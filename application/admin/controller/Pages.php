<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;

class Pages extends Controller
{
    public function add()
    {	
    	return $this->fetch();
    }
    public function pages()
    {
        return $this->fetch();
    }

    public function p()
    {
        return 'helloo';
    }
}
