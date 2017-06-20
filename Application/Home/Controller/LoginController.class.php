<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller{
    public function login(){

        if (!empty($_POST)){
            $vry = new Verify();

            if ($vry->check($_POST['imgcode'])){

                $userpsw = array(
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                );
                $info = D('userinfo')->where($userpsw)->find();

                if ($info){
                    echo '登录失败';
                }else{
                    echo '登录失败';
                }

            }else{
                echo '验证码错误';
            }

        }else{
            $this->display();
        }


    }

    function vryImg(){
        //验证码的配置
        $cfg = array(
            'imageH'=> 40,
            'imageW'=>100,
            'fontSize'=>15,
            'length'=>4,
            'fontttf'=>'4.ttf',
        );
        $vry = new \Think\ Verify($cfg);
        $vry->entry();
    }


}