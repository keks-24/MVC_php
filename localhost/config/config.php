<?php
//основной конфигурационный файл приложения
Config::set('site_name', 'Carrier.shum.ua =)');

Config::set('languages', array ('en','ua'));

//Routes. Route name => method prefix
Config::set ('routes',array(
	'default'=>'',
	'admin'=>'admin_',
		));

Config::set('default_route', 'default');
Config::set('default_language','en');
Config::set('default_controller', 'pages');
Config::set('default_action','index');


Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');

Config::set('salt','dshajk8d9d0flfds');