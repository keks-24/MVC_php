<?php

class Reg extends Model {

	public function save($data, $id = null){
		if ( !isset($data['login']) || !isset($data['email']) || !isset($data['role']) || !isset($data['password']) ){
			return false;
		}

		$id = (int)$id;
		$login = $this->db->escape($data['login']);
		$email = $this->db->escape($data['email']);
		$role = $this->db->escape($data['role']);
		$password = $this->db->escape(md5(Config::get('salt').$_POST['password']));
		

		if ( !$id){ // add new record
			$sql = "
				insert into users
				    set login = '{$login}',
				    	email = '{$email}',
				    	role = '{$role}',
				    	password = '{$password}'
			";
		} 
		return $this->db->query($sql);

	}
}