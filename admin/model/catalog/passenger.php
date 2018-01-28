<?php
class ModelCatalogPassenger extends Model {
	public function addPassenger($data) {

		$this->db->query("INSERT INTO " . DB_PREFIX . "passenger SET name = '" . $this->db->escape($data['name']) . "',surname = '" . $this->db->escape($data['surname']) . "',email = '" . $this->db->escape($data['email']). "',phone = '" . $this->db->escape($data['phone']) . "'");

		$passenger_id = $this->db->getLastId();

		return $passenger_id;
	}

	public function editPassenger($passenger_id, $data) {

		$this->db->query("UPDATE " . DB_PREFIX . "passenger SET name = '" . $this->db->escape($data['name']) . "',surname = '" . $this->db->escape($data['surname']) . "',email = '" . $this->db->escape($data['email']). "',phone = '" . $this->db->escape($data['phone']) .  "' WHERE pass_id = '" . (int)$passenger_id . "'");

        $passenger_id = $this->db->getLastId();
        return $passenger_id;
	}

	public function deletePassenger($passenger_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "passenger WHERE pass_id = '" . (int)$passenger_id . "'");

		$this->cache->delete('passenger');
	}

	public function getPassenger($passenger_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "passenger  WHERE pass_id = '" . (int)$passenger_id . "'");
		return $query->row;
	}

	public function getPassengers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "passenger";

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalPassengers() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "passenger");

		return $query->row['total'];
	}
}
