<?php

class RegistratorController extends Controller{

	public function __construct($data = array() ){
		parent::__construct($data);
		$this->model = new Reg();
	}

	public function index(){
		if ($_POST) {
			if( $this->model->save($_POST) ){
				Session::setFlash('You were registred successfully!');
			}
		}
	}

}