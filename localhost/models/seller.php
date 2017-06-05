<?php

class Seller extends Model {

	public function save($data, $id = null){
		if ( !isset($data['name_company']) || !isset($data['place_car']) || !isset($data['cont_email']) || !isset($data['cont_phone']) || !isset($data['start_p']) || !isset($data['finish_p']) ){
			return false;
		}

		$id = (int)$id;
		$name_company = $this->db->escape($data['name_company']);
		$place_car = $this->db->escape($data['place_car']);
		$cont_email = $this->db->escape($data['cont_email']);
		$cont_phone = $this->db->escape($data['cont_phone']);
		$start_p = $this->db->escape($data['start_p']);
		$finish_p = $this->db->escape($data['finish_p']);

		if ( !$id){ // add new record
			$sql = "
				insert into seller_info
				    set name_company = '{$name_company}',
				    	place_car = '{$place_car}',
				    	cont_email = '{$cont_email}',
				    	cont_phone = '{$cont_phone}',
				    	start_p = '{$start_p}',
				    	finish_p = '{$finish_p}'
			";
		} else { //update existing record
			$sql = "
				update seller_info
				    set name_company='{$name_company}',
				    	place_car='{$place_car}',
				    	cont_email='{$cont_email}',
				    	cont_phone='{$cont_phone}',
				    	start_p='{$start_p}',
				    	finish_p='{$finish_p}'
				    where id ={$id}
			";
		}

		return $this->db->query($sql);

	}

	public function getList(){
		$sql = "select * from seller_info where 1";
		return $this->db->query($sql);
	}

}