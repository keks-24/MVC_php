<?php 

CLass Customer extends Model{

	public function getList(){
		$sql = "select * from seller_info where 1";
		return $this->db->query($sql);
	}
	
	public function get_id(){
		$id = $_GET['id'];
		$sql = "select * from seller_info where id='{$id}' ";
		return $this->db->query($sql);
	}



	public function delete($id){
		$id = (int)$id;
		$sql= "delete from seller_info where id = '{$id}' ";
		return $this->db->query($sql);
	}

}