<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
class Controller_Login extends Controller{
	public function action_index(){;
		return View::forge('authen/login');
	}
	public function action_login(){
		
	}
} 