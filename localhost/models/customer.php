<?php 

CLass Customer extends Model{

	public function getList(){
		$sql = "select * from seller_info where 1";
		return $this->db->query($sql);
	}


}