<?php
namespace app\admin\controller;

use think\Controller;

class  Interaction extends Controller
{
    public function applicants()
    {
        return $this->fetch();
    }
    public function comments()
    {
        return $this->fetch();
    }
    public function messageboard()
    {
        return $this->fetch();
    }
}
