<?php
class ModelCatalogCity extends Model {
	public function addCity($data) {
		$this->load->model('localisation/country');
		$country_id = $this->model_localisation_country->getCountry($data['city_country_id']);

		$this->db->query("INSERT INTO " . DB_PREFIX . "city SET name = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "',country = '" . $this->db->escape($data['city_country_id']) . "',region = '" . $this->db->escape($data['city_zone_id']) . "',contry_iso = '" . $this->db->escape($country_id['iso_code_2']) . "'");

		$city_id = $this->db->getLastId();

		$this->cache->delete('city');
		$this->cache->delete('cityData');

		return $city_id;
	}

	public function editCity($city_id, $data) {


		$this->load->model('localisation/country');
		$country_id = $this->model_localisation_country->getCountry($data['city_country_id']);

		$this->db->query("UPDATE " . DB_PREFIX . "city SET name = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] ."',country = '" . $this->db->escape($data['city_country_id']) . "',region = '" . $this->db->escape($data['city_zone_id']) ."',contry_iso = '" . $this->db->escape($country_id['iso_code_2']) . "' WHERE city_id = '" . (int)$city_id . "'");

		$this->cache->delete('city');
		$this->cache->delete('cityData');
	}

	public function deleteCity($city_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "city WHERE city_id = '" . (int)$city_id . "'");


		$this->cache->delete('city');
		$this->cache->delete('cityData');
	}

	public function getCity($city_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "city  WHERE city_id = '" . (int)$city_id . "'");

		return $query->row;
	}

	public function getCities($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "city";
		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
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

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalCities() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "city");

		return $query->row['total'];
	}
}
