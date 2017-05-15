<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function loginIn($username,$password)
    {
        echo($username);
        echo($password);

        $Use = M('User');
        $params['username']=$username;

        $result = $Use->where($params)->select();

        if($result[0]['username']){

            if($result[0]['password'] == $password){
                echo ('登陆成功');
            }else{
                echo ('登陆失败');
            }

        }

    }



}