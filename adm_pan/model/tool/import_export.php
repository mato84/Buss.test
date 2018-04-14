<?php
require_once '.././system/library/spout-2.7.2/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;

class ModelToolImportExport extends Model{
  public function import($path){
    $exclusion_sheet = ['product','waypoint_to_route','url_alias']; //this is exclusion for setDependentTable function
    try{
    $reading_data = $this->readFile($path);
    $last_id = $this->setProducts($reading_data['product']);
    $this->setDependentTable($reading_data, $last_id, $exclusion_sheet);
    $this->setUrlAliace($reading_data['url_alias'], $last_id);
    $this->setWayPointToRoute($reading_data['waypoint_to_route'], $last_id);
    return $last_id;
     }
  catch(Exception $e){
       echo 'Catch exception: ',  $e->getMessage(), "\n";
     }
  }

  protected function readFile($path){
    $reader = ReaderFactory::create(Type::XLSX);
    $reader->open($path);
    $dataArray = array();
    foreach ($reader->getSheetIterator() as $sheet) {
      $tempArray = array(); //temporary array
      $head_sheet = array();
       foreach ($sheet->getRowIterator() as $key => $row) {
         if($key === 1){
           $head_sheet = $row;
         }
         else{
           $tempArray[] =  array_reduce(array_keys($head_sheet),
            function($acc,$val) use ($head_sheet,$row){
             if(!empty($row[$val])){
             $acc[$head_sheet[$val]] = $row[$val];
             }
              return $acc;
             },array());
         }
       }
     $dataArray[$sheet->getName()] = $tempArray;
     }
    $reader->close();
    return $dataArray;
  }
  protected function setProducts($array_product){
    $last_id = array();
    foreach ($array_product as $key => $value) {
        if (array_key_exists('product_id', $value)) {
            $this->updataProduct($value);
            $last_id[] = $value['product_id'];
        } else {
            $sql = "INSERT INTO " .DB_PREFIX. "product SET ";
            $sql .= array_reduce(array_keys($value), function($carry,$key) use($value) {
                if(!empty($key) && !empty($value[$key]) ){
                    if((strcasecmp($key,'from_t') == 0 || strcasecmp($key,'to_t') == 0)
                        && !is_numeric($value[$key]) ){
                        $query = $this->db->query("SELECT c.city_id FROM ".DB_PREFIX."city c WHERE c.name = '".$value[$key]."'");
                        if(array_key_exists('city_id',$query->row)){
                            return $carry." ".$key." = '" .$query->row['city_id']."',";
                        }
                        throw new \Exception('not find city_id in ' . $value[$key]);
                    }
                    return $carry." ".$key." = '" .$value[$key]."',";
                } else {
                    return $carry;
                }
            },"");
            $this->db->query(rtrim($sql,", "));
            $last_id[] = $this->db->getLastId();
        }

    }
   return $last_id;
  }
  protected function setDependentTable($array_dependent, $products_last_id, $exclusion_sheet_name = []){
    $new_array = array();
    foreach ($array_dependent as $name_sheet => $values) {
      if(in_array($name_sheet, $exclusion_sheet_name )) continue;
        $temp_array = array_map(function($a, $product_id){
          $a['product_id'] = $product_id;
          return $a;
        },$values,$products_last_id);
      $new_array[$name_sheet] = $temp_array;
    }

    foreach ($new_array as $nameTable => $values) {
        $updateValue = $this->existDataInTable($nameTable, $products_last_id);
        $this->setDataInDependentTable($nameTable, $values, $updateValue);
    }

  }
  protected function setUrlAliace($array_url_alice, $products_id){
    $temp_array = array();
     $temp_array[] = array_map(function($a, $b){
       $a['query'] = trim("product_id=$b");
       $a['keyword'] =trim("квиток-на-автобус-".$a['keyword']."-купити-онлайн");
       return $a;
     },$array_url_alice,$products_id);

      foreach ($temp_array as $nameTable => $values) {
          foreach ($values as $key => $value) {
            $sql = "INSERT INTO ".DB_PREFIX."url_alias SET ";
            $sql .= array_reduce(array_keys($value), function($carry,$val) use($value){
            return $carry." ".$val." = '" .$value[$val]."',";
            },"");
          $this->db->query(rtrim($sql,", "));
        }
    }

  }
  protected function setWayPointToRoute($array_waypoint, $products_id){
    $formatted_array = array_reduce($array_waypoint, function($acc, $item) use ($products_id){
      list($name, $value) = explode('=',$item['product_id'] );
         if(empty($products_id[$value-1])) return $acc;
         $acc[$products_id[$value-1]][] = $item['waypoint_id'];
      return $acc;
    }, []);
    foreach ($formatted_array as $product_id => $waypoints) {
        $sql = "INSERT INTO ".DB_PREFIX."waypoint_to_route VALUES ";
        $sql.= array_reduce($waypoints, function($acc, $waypoint_id) use ($product_id) {
          return $acc.="('$product_id', '$waypoint_id',''),";
        },"");
       $this->db->query(rtrim($sql,", "));
    }
  }
    private function updataProduct($productData) {
        $sqlQuery = 'UPDATE ' . DB_PREFIX . 'product SET';
        $sqlQuery .= array_reduce(array_keys($productData), function($carry,$key) use($productData) {
            if(!empty($key) && !empty($productData[$key]) ){
                if((strcasecmp($key,'from_t') == 0 || strcasecmp($key,'to_t') == 0)
                    && !is_numeric($productData[$key]) ){
                    $query = $this->db->query("SELECT c.city_id FROM ".DB_PREFIX."city c WHERE c.name = '".$productData[$key]."'");
                    if(array_key_exists('city_id',$query->row)){
                        return $carry." ".$key." = '" .$query->row['city_id']."',";
                    }
                    throw new \Exception('not find city_id in ' . $productData[$key]);
                }
                return $carry." ".$key." = '" .$productData[$key]."',";
            } else {
                return $carry;
            }
        },"");
        $sqlQuery = rtrim($sqlQuery,", ");
        $sqlQuery .= sprintf(' WHERE product_id = \'%s\'', $productData['product_id']);
        $this->db->query($sqlQuery);
    }
    private function setDataInDependentTable($nameTable, $data, $updateData)
    {
        $sqlOperation = 'INSERT INTO';
        foreach ($data as $key => $value) {
            $isUpdate = array_key_exists($value['product_id'], $updateData);
            $isUpdate ? $sqlOperation = 'UPDATE':null;
            $sql = sprintf('%s %s%s SET ',$sqlOperation, DB_PREFIX, $nameTable);
            $sql .= array_reduce(array_keys($value), function($carry,$val) use($value){
                if(!empty($val) && !empty($value[$val]) ){
                    return $carry." ".$val." = '" .$value[$val]." ',";
                }
                else{
                    return $carry;
                }
            },"");
            $isUpdate ? $sql = rtrim($sql,", ").sprintf(' WHERE product_id = \'%s\'', $value['product_id']):null;
            $this->db->query(rtrim($sql,", "));
        }

    }
    private function existDataInTable($tableName, $data)
    {
        $sqlQuery = 'SELECT product_id FROM '.DB_PREFIX.$tableName.' WHERE product_id IN ';
        $sqlQuery .= sprintf('(%s)', implode(',', $data));
        $result = $this->db->query($sqlQuery);
        return array_reduce($result->rows, function($acc, $value) {
            $acc[$value['product_id']] = 0;
            return $acc;
        }, []);
    }
}
