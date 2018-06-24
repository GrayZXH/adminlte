<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;


class Login extends Controller
{
    public function index()
    {	
        return $this->fetch();
    }
    public function check(){
    	$email = Request::post('email');
    	$password = Request::post('password');
    	if ($email) {
    		return ($email);
    	}
    }
}
