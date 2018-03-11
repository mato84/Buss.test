<?php
class ModelCatalogPassenger extends Model{
    public function addPassengers(array $arrPassengers){
      $passengerIds = [];
      $queryAddPassenger = 'INSERT INTO '. DB_PREFIX .'passenger (name, surname, phone, email) VALUES';
      foreach ($arrPassengers as $passenger){
          if(is_array($passenger)){
              $q = $queryAddPassenger;
              $q.= sprintf( " ('%s', '%s', '%s', '%s' ) ",
                  $passenger['first_name'],
                  $passenger['last_name'],
                  $passenger['phone'],
                  $passenger['passenger_email']);
              $this->db->query(rtrim($q,' , '));
              $passengerIds[] = $this->db->getLastId();
          } elseif(is_numeric($passenger)) {
              $passengerIds[] =  $passenger;
          }
      }
      return $passengerIds;
  }

  public function getAllPhone(){
     $query = $this->db->query('SELECT pass_id, phone FROM '. DB_PREFIX .'passenger');
     return $query->rows;
  }
}
