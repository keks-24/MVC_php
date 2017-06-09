<?php

class Seller extends Model {

		public function get_id_seller(){
		$id_seller = $_GET['id_seller'];
		$sql = "select * from seller_info where id_seller='{$id_seller}' ";
		return $this->db->query($sql);
	}

	public function get_id(){
		$id = $_GET['id'];
		$sql = "select * from seller_info where id='{$id}' ";
		return $this->db->query($sql);
	}

	public function save($data, $id = null){
		if ( !isset($data['name_company']) || !isset($data['place_car']) || !isset($data['cont_email']) || !isset($data['cont_phone']) || !isset($data['start_city']) || !isset($data['start_adress']) || !isset($data['finish_city']) || !isset($data['finish_adress']) ){
			return false;
		}


		$id = $_GET['id'];
		$name_company = $this->db->escape($data['name_company']);
		$place_car = $this->db->escape($data['place_car']);
		$cont_email = $this->db->escape($data['cont_email']);
		$cont_phone = $this->db->escape($data['cont_phone']);
		$start_city = $this->db->escape($data['start_city']);
		$start_adress = $this->db->escape($data['start_adress']);
		$finish_city = $this->db->escape($data['finish_city']);
		$finish_adress = $this->db->escape($data['finish_adress']);
		$time=date("Y-m-d");
		$id_seller= Session::get('id');
		
		$path = "/webroot/uploads/"; // директория для загрузки
		$ext = array_pop(explode('.',$_FILES['img_file']['name'])); // расширение
		$new_name = time().'.'.$ext; // новое имя с расширением
		$full_path = $path.$new_name; // полный путь с новым именем и расширением
		/*echo "<pre>"; 
		echo var_dump($path);
		echo "</pre>";
		echo Session::get('id');*/


		if($_FILES['img_file']['error'] == 0){
		    if(move_uploaded_file($_FILES['img_file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$full_path)){
		        // Если файл успешно загружен, то вносим в БД (надеюсь, что вы знаете как)
		        // Можно сохранить $full_path (полный путь) или просто имя файла - $new_name
						if (!$id){ // add new record
							$sql = "
								insert into seller_info
								    set name_company = '{$name_company}',
								    	place_car = '{$place_car}',
								    	cont_email = '{$cont_email}',
								    	cont_phone = '{$cont_phone}',
								    	start_city = '{$start_city}',
								    	start_adress = '{$start_adress}',
								    	finish_city = '{$finish_city}',
								    	finish_adress = '{$finish_adress}',
								    	full_path = '{$full_path}',
								    	time = '{$time}',
								    	id_seller = '{$id_seller}'	    	
							";
						} else { //update existing record
							$sql = "
								update seller_info
								    set name_company = '{$name_company}',
								    	place_car = '{$place_car}',
								    	cont_email = '{$cont_email}',
								    	cont_phone = '{$cont_phone}',
								    	start_city = '{$start_city}',
								    	start_adress = '{$start_adress}',
								    	finish_city = '{$finish_city}',
								    	finish_adress = '{$finish_adress}',
								    	full_path = '{$full_path}',
								    	time = '{$time}',
								    	id_seller = '{$id_seller}'
								    where id ={$id}
							";
						}

						return $this->db->query($sql);
		    }
		} else {
		    	if ( !$id){ // add new record
							$sql = "
								insert into seller_info
								    set name_company = '{$name_company}',
								    	place_car = '{$place_car}',
								    	cont_email = '{$cont_email}',
								    	cont_phone = '{$cont_phone}',
								    	start_city = '{$start_city}',
								    	start_adress = '{$start_adress}',
								    	finish_city = '{$finish_city}',
								    	finish_adress = '{$finish_adress}',
								    	time = '{$time}',
								    	id_seller = '{$id_seller}'	    	
							";
						} else { //update existing record
							$sql = "
								update seller_info
								    set name_company = '{$name_company}',
								    	place_car = '{$place_car}',
								    	cont_email = '{$cont_email}',
								    	cont_phone = '{$cont_phone}',
								    	start_city = '{$start_city}',
								    	start_adress = '{$start_adress}',
								    	finish_city = '{$finish_city}',
								    	finish_adress = '{$finish_adress}',
								    	time = '{$time}',
								    	id_seller = '{$id_seller}'
								    where id ={$id}
							";
						}

						return $this->db->query($sql);
		    }
		}
		//transp_img = '{$transp_img}'



	public function getList(){
		$sql = "select * from seller_info where 1";
		return $this->db->query($sql);
	}

}