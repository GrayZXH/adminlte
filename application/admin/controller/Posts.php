<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;

class Posts extends Controller
{
    public function add()
    {
        return $this->fetch();
    }
    public function posts()
    {
        return $this->fetch();
    }
    public function p()
    {	
    	$all=Request::post();
    	if ($all) {
    		var_dump($all);
    	}
        
    }
    
}
