<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function loginIn(){
        $username = $_POST["username"];
        $password= $_POST['password'];
        if(!trim($username)){
            return show(0,$username);
        }
        if(!trim($password)){
            return show(0,'密码不能为空');
        }
        $Use = M('User');
        $params['username']=$username;
        $result = $Use->where($params)->select();
        if($result[0]['username'] == $username){
            if($result[0]['password'] == $password){
                showURL(200,'登陆成功','loginAction');
//                $this->success('新增成功，即将返回列表页面', '/NodePad/showTipList');
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