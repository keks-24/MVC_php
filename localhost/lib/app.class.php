<?php

class App{
	//для работы с объектом роутера
	protected static $router;
	//подлючение к БД
	public static $db;

	/**
	 * @return mixed
	 */
	public static function getRouter(){
		return self::$router;
	}
	//обработка запросов к приложению, этот параметр (ури) будет использоваться для создания обьекта роутера
	public static function run($uri){
		self::$router = new Router($uri);

		self::$db = new DB(Config::get('db.host'), Config::get('db.user'), Config::get('db.password'), Config::get('db.db_name'));

		Lang::load(self::$router->getLanguage());

		$controller_class = ucfirst(self::$router->getController()).'Controller';
		$controller_method = strtolower(self::$router->getMethodPrefix().self::$router->getAction());

		//calling controller`s method
		$controller_object = new $controller_class();
		if ( method_exists($controller_object, $controller_method) ){
			//controller`s action ,ay return a view path
			$view_path = $controller_object->$controller_method();
			$view_object = new View($controller_object->getData(), $view_path);
			$content = $view_object->render(); //записываем результат рендеринга представления (view)
		} else {
			throw new Exception('Method '.$controller_method.' of class '.$controller_class.'does not exist.');
		}
		//выполнение рендеринга контента выводимого в дефолт хтмл
		$layout = self::$router->getRoute();
		$layout_path = VIEWS_PATH.DS.$layout.'.html';
		$layout_view_object = new View(compact('content'), $layout_path);
		echo $layout_view_object->render();

	}


}