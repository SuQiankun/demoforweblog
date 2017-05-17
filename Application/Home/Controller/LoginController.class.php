<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{


    public function loginIn()
    {
        $username = $_REQUEST["username"];
        $password= $_REQUEST['password'];
        if(!trim($username)){
            return show(0,$username);
        }
        if(!trim($password)){
            return show(0,'用密码不能为空');
        }
        $Use = M('User');
        $params['username']=$username;
        $result = $Use->where($params)->select();

        if($result[0]['username'] == $username){

            if($result[0]['password'] == $password){
              $this->display('loginAction');
            }else{
               show(0,'密码错误');
                $this->display('login');
            }


        }else{

            show(0,'账号错误');
            $this->display('login');


        }

    }



}