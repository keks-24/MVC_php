<?php

class Controller{
	//содержит всю информацию которая будет передаваться из контроллера в представление
	protected $data;
	//длядоступа к обьекту моделей
	protected $model;
	//в нем будут храниться параметры полученные из строки запроса
	protected $params;

	/**
	 * @return mixed
	 */
	public function getData()
	{
		return $this->data;
	}  

	/**
	 * @return mixed
	 */
	public function getModel()
	{
		return $this->model;
	} 

	/**
	 * @return mixed
	 */
	public function getParams()
	{
		return $this->params;
	} 
	//если контсруктор вызывается без параметров то массив будет пуст
	public function __construct($data = array() ){
		$this->data = $data;
		$this->params = App::getRouter()->getParams();
	}



}