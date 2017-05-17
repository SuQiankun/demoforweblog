<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{


    public function loginIn()
    {
        $username = $_POST['username'];
        $password= $_POST['password'];

        $Use = M('User');
        $params['username']=$username;
        $result = $Use->where($params)->select();

        if($result[0]['username'] == $username){

            if($result[0]['password'] == $password){
              $this->display('loginAction');
            }else{
                echo ('<script>alert("密码错误")</script>');
                $this->display('login');
            }


        }else{
            echo ('<script>alert("账号错误")</script>');
            $this->display('login');

        }

    }



}