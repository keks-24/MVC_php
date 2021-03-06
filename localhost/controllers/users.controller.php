<?php 

class UsersController extends Controller{

	public function __construct($data = array() ){
		parent::__construct($data);
		$this->model = new User();
	}

	public function admin_login(){
		if ( $_POST && isset($_POST['login']) && isset($_POST['password']) ){
			$user = $this->model->getByLogin($_POST['login']);
			$hash = md5(Config::get('salt').$_POST['password']);
			if ( $user && $user["is_active"] && $hash == $user["password"] ){
				Session::set('login', $user['login']);
				Session::set('role', $user['role']);
				Session::set('id', $user['id']);

				if ($user['role'] == 'admin') {
					Router::redirect('/admin/');
				} elseif ($user['role'] == 'customer') {
					Router::redirect('/cust/');
				} elseif ($user['role'] == 'seller') {
					Router::redirect('/sell/');
					}				
			}
		}
	}



		public function admin_logout(){
			Session::destroy();		
			Router::redirect('/admin/');	
			
		}
	}