<?php
class ModelCatalogWaipoint extends Model{
  public function getAllWaypointInProduct($productId){
    $query = $this->db->query("SELECT w.waypoint_id, w.latitude, w.longitude FROM (SELECT * FROM" . DB_PREFIX ."waypoint_to_route  WHERE product_id = '" .(int)$productId."') as ro INNER JOIN  oc_way_point w ON ro.waypoint_id = w.waypoint_id");
     return $query->row;
  }
  public function getWaypoint($waypoint_id) {
		$query = $this->db->query("SELECT *, DATE_FORMAT(time, '%H:%i') AS time FROM " . DB_PREFIX . "way_point  WHERE waypoint_id = '" . (int)$waypoint_id . "'");
		return $query->row;
	}
}
