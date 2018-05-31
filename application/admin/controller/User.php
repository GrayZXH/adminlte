<?php
namespace app\admin\controller;

use think\Controller;

class User extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function users()
    {
        return $this->fetch();
    }
    
}

