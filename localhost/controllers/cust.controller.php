<?php

/**
* 
*/
class CustController extends Controller
{
	public function __construct($data = array() ){
		parent::__construct($data);
		$this->model = new Customer();
	}


	public function index(){
		$this->data = $this->model->getList();
	}

	public function edit(){
		
	}

	public function delete(){
		if ( isset($this->params[0]) ){
			$result = $this->model->delete($this->params[0]);
			if ( $result){
				Session::setFlash('Объявление удалено');
			} else {
				Session::setFlash('Error.');
			}			
		}
		Router::redirect('/cust/');
	}
}