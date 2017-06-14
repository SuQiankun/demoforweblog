<?php
/**
 * Created by PhpStorm.
 * User: suqiankun
 * Date: 17/6/14
 * Time: 10:57
 */
namespace Home\Controller;
use Think\Controller;

class RegisterController extends \Think\Controller{

    public function reegister(){

        if (!empty($_POST)){

        }else{

         $this->display();
        }

    }


}