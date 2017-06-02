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
}