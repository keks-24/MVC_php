<?php

Class SellController extends Controller{

	public function __construct($data = array() ){
		parent::__construct($data);
		$this->model = new Seller();
	}

	public function index(){
		if ($_POST) {
			if( $this->model->save($_POST) ){
				Session::setFlash('Thank you! Your data saved successfully!');
			}
		}
	}

}