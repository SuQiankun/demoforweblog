<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function loginAction($username,$password)
    {
        $Use = M('User');
        $result = $Use->find($username);
//        $this->assign();
        $this->display();

    }



}