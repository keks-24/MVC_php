<?php

Class SellController extends Controller{

	public function __construct($data = array() ){
		parent::__construct($data);
		$this->model = new Seller();
	}


	public function my_offer(){
		$this->data = $this->model->get_id_seller();
	}

	public function edit(){
		$this->data = $this->model->get_id();
		if ($_POST){
			$id = isset($_POST['id']) ? $_POST['id'] : null;
			$result = $this->model->save($_POST, $id);
			if ( $result ){
				Session::setFlash('Offer was seved.');
			} else {
				Session::setFlash('Error.');
			}
	}
}

	public function index(){
		if ($_POST) {
			if( $this->model->save($_POST) ){
				Session::setFlash('Thank you! Your data saved successfully!');
			}
		}
	}

}