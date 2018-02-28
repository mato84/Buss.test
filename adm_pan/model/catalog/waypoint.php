<?php
class ModelCatalogWaypoint extends Model {

  public function addWaypoint($data) {

		$this->db->query("INSERT INTO " . DB_PREFIX . "way_point SET name = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "',city = '" . $this->db->escape($data['city']) ."', latitude = '" . $data['latitude']."', longitude = '" . $data['longitude']. "',time = '" . $data['time'] . "',place = '" . $this->db->escape($data['place']) ."',manufacturer_id = '" . $data['manufacturer_id'] . "'");

		$city_id = $this->db->getLastId();

		$this->cache->delete('waypoint');

		return $city_id;
	}
  public function editWaypoint($waypoint_id, $data) {

    $this->db->query("UPDATE " . DB_PREFIX . "way_point SET name = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] ."',city = '" . $this->db->escape($data['city']) ."', latitude = '" . $data['latitude']."', longitude = '" . $data['longitude']. "',time = '" . $data['time'] ."',place = '" . $this->db->escape($data['place']) . "' WHERE waypoint_id = '" . (int)$waypoint_id . "'");

    $this->cache->delete('waypoint');
  }
  public function getWaypoints($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "way_point w";
		$sort_data = array(
			'name',
			'sort_order'
		);
    if (!empty($data['filter_name'])) {
      $sql .= " WHERE w.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
    }
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY w.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 0) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT ". (int)$data['start'].", ".(int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}
  public function getWaypoint($waypoint_id) {
		$query = $this->db->query("SELECT *, DATE_FORMAT(time, '%H:%i') AS time FROM " . DB_PREFIX . "way_point  WHERE waypoint_id = '" . (int)$waypoint_id . "'");

		return $query->row;
	}
  public function getTotalWaypoints() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "way_point");
		return $query->row['total'];
	}
  public function deleteWaypoint($waypoint_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "way_point WHERE waypoint_id = '" . (int)$waypoint_id . "'");


		$this->cache->delete('waypoint');
	}
}
