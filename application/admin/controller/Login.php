<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;


class Login extends Controller
{
    public function index()
    {	
    	$email = Request::post('email');
    	$password = Request::post('password');
        return $this->fetch();
    }
}
