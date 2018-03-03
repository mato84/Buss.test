<?php
class ModelToolMessage extends Model{

  private $optionMessage  = '';
  private $passengerOptionMessage = [];

  public function prepareMessage($order_info){

    list($product_order) = $this->getOrderProducts($order_info['order_id']);
    list($order_option) = $this->getOrderOptions($order_info['order_id'], $product_order['order_product_id']);

    $product_info = $this->getProduct($product_order['product_id']);
    $product_name_main_category = $this->getProductMainCategoryName($product_order['product_id']);
    $product_manufacturer_name =  $this->getProductManufacturerName($product_order['product_id']);

      if(!empty($order_info['passengers'])){
          foreach ($order_info['passengers'] as $passenger){
              $this->passengerOptionMessage[] = [
                  'to'       => $passenger['phone'],
                  'copy'     => $this->config->get('config_sms_copy'),
                  'from'     => $this->config->get('config_sms_from'),
                  'username' => $this->config->get('config_sms_gate_username'),
                  'password' => $this->config->get('config_sms_gate_password'),


                  'message'  => str_replace(array('{NAME}', '{DATE}', '{TIME}', '{DEPAERTURE_FROM}', '{CATEGORY}', '{CARRIER}'),
                      array($product_info['name'], $order_option['value'], $product_info['departure_time'], $product_info['departure_from'],
                          $product_name_main_category,$product_manufacturer_name),
                      'Заброньовано:'."\xA".'{NAME}'."\xA".'{DATE}'."\xA".'{TIME}'."\xA".'{DEPAERTURE_FROM}'."\xA".'Автобус {CATEGORY}'."\xA".'Перевізник {CARRIER}')

              ];
          }

      }
      else {
          $this->optionMessage = array(
              'to'       => $order_info['telephone'],
              'copy'     => $this->config->get('config_sms_copy'),
              'from'     => $this->config->get('config_sms_from'),
              'username' => $this->config->get('config_sms_gate_username'),
              'password' => $this->config->get('config_sms_gate_password'),


              'message'  => str_replace(array('{NAME}', '{DATE}', '{TIME}', '{DEPAERTURE_FROM}', '{CATEGORY}', '{CARRIER}'),
                  array($product_info['name'], $order_option['value'], $product_info['departure_time'], $product_info['departure_from'],
                      $product_name_main_category,$product_manufacturer_name),
                  'Заброньовано:'."\xA".'{NAME}'."\xA".'{DATE}'."\xA".'{TIME}'."\xA".'{DEPAERTURE_FROM}'."\xA".'Автобус {CATEGORY}'."\xA".'Перевізник {CARRIER}')
          );

      }

    return $this;
  }
  public function sendMessage(){
    try {
      if( !empty($this->passengerOptionMessage)){
          foreach ($this->passengerOptionMessage as $optionMessageToPassenger){
              $sms = new Sms($this->config->get('config_sms_gatename'), $optionMessageToPassenger);
              $sms->send();
          }
      }
      else {
          $sms = new Sms($this->config->get('config_sms_gatename'), $this->optionMessage);
          $sms->send();
      }

    } catch (Exception $e) {
      return $e;
    }

  }
  private function getOrderProducts($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");

		return $query->rows;
	}
	private function getOrderOptions($order_id, $order_product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX."order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$order_product_id . "' LIMIT 1");
		return $query->rows;
	}

  private function getProduct($product_id) {
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name,pd.pre_name AS pre_name, p.image, (SELECT md.name FROM " . DB_PREFIX . "manufacturer_description md WHERE md.manufacturer_id = p.manufacturer_id AND md.language_id = '" . (int)$this->config->get('config_language_id') . "') AS manufacturer, (SELECT c.name FROM " . DB_PREFIX . "city c WHERE c.city_id = p.from_t) AS  from_name,(SELECT c.name FROM " . DB_PREFIX . "city c WHERE c.city_id = p.to_t) AS  to_name, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT points FROM " . DB_PREFIX . "product_reward pr WHERE pr.product_id = p.product_id AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "') AS reward, (SELECT ss.name FROM " . DB_PREFIX . "stock_status ss WHERE ss.stock_status_id = p.stock_status_id AND ss.language_id = '" . (int)$this->config->get('config_language_id') . "') AS stock_status, (SELECT wcd.unit FROM " . DB_PREFIX . "weight_class_description wcd WHERE p.weight_class_id = wcd.weight_class_id AND wcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS weight_class, (SELECT lcd.unit FROM " . DB_PREFIX . "length_class_description lcd WHERE p.length_class_id = lcd.length_class_id AND lcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS length_class, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r2 WHERE r2.product_id = p.product_id AND r2.status = '1' GROUP BY r2.product_id) AS reviews, p.sort_order FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return array(
				'product_id'       => $query->row['product_id'],
				'name'             => $query->row['name'],
				'from_name'        => $query->row['from_name'],
				'to_name'          => $query->row['to_name'],
				'departure_from'   => $query->row['departure_from'],
				'departure_to'     => $query->row['departure_to'],
				'departure_time'   => date("H:i", strtotime($query->row['departure_time'])),
				'arrival_time'     => date("H:i", strtotime($query->row['arrival_time'])),
				'time_road'        => $query->row['time_road'],
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'meta_h1'          => $query->row['meta_h1'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'model'            => $query->row['model'],
				'sku'              => $query->row['sku'],
				'upc'              => $query->row['upc'],
				'ean'              => $query->row['ean'],
				'jan'              => $query->row['jan'],
				'isbn'             => $query->row['isbn'],
				'mpn'              => $query->row['mpn'],
				'location'         => $query->row['location'],
				'quantity'         => $query->row['quantity'],
				'stock_status'     => $query->row['stock_status'],
				'image'            => $query->row['image'],
				'manufacturer_id'  => $query->row['manufacturer_id'],
				'manufacturer'     => $query->row['manufacturer'],
				'price'            => ($query->row['discount'] ? $query->row['discount'] : $query->row['price']),
				'special'          => $query->row['special'],
				'reward'           => $query->row['reward'],
				'points'           => $query->row['points'],
				'tax_class_id'     => $query->row['tax_class_id'],
				'date_available'   => $query->row['date_available'],
				'weight'           => $query->row['weight'],
				'weight_class_id'  => $query->row['weight_class_id'],
				'length'           => $query->row['length'],
				'width'            => $query->row['width'],
				'height'           => $query->row['height'],
				'length_class_id'  => $query->row['length_class_id'],
				'subtract'         => $query->row['subtract'],
				'rating'           => round($query->row['rating']),
				'reviews'          => $query->row['reviews'] ? $query->row['reviews'] : 0,
				'minimum'          => $query->row['minimum'],
				'sort_order'       => $query->row['sort_order'],
				'status'           => $query->row['status'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			);
		} else {
			return false;
		}
	}
  private function getProductMainCategoryName($product_id) {

		$query = $this->db->query("SELECT cd.name FROM " .DB_PREFIX."product_to_category pc INNER JOIN ".DB_PREFIX."category_description cd ON pc.category_id = cd.category_id WHERE pc.product_id = '". (int)$product_id ."' AND pc.main_category = '1' LIMIT 1");

		return ($query->num_rows ? $query->row['name'] : ' ');
	}
  private function getProductManufacturerName($product_id){
		$query = $this->db->query("SELECT m.name FROM " .DB_PREFIX."product p INNER JOIN ".DB_PREFIX."manufacturer m ON p.manufacturer_id = m.manufacturer_id WHERE p.product_id = '". (int)$product_id ."'");
		return ($query->num_rows ? $query->row['name'] : ' ');
	}
}
