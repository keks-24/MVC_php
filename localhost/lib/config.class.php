<?php
// клсаа config хранит настройки приложения (параметры соединения с БД)
// настройки будут предстваляться в виде пары ключ -> значение
class config{

	protected static $settings = array();

	//ключем может быть строка DataBaseUser, а значением Логин который используется к бд
	public static function get($key){
			return isset(self::$settings[$key]) ? self::$settings[$key] : null; //если существет - если нет null
	}

	//получаем настройки приложения
	public static function set($key, $value) {
		self::$settings[$key] = $value;	
	}

}