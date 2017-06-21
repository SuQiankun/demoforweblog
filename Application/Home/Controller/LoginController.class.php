<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Verify;

class LoginController extends Controller{

    function index()
    {
        $data  = M('userinfo');
        $map['user_id'] = array('gt',0);
        $count = $data->where($map)->count();


        $page = new Page($count,'1');

        $page->setConfig('header',' 条记录 ');
        $page->setConfig('prev',' 上一页 ');
        $page->setConfig('next',' 下一页 ');
        $page->setConfig('first',' 首页 ');
        $page->setConfig('last',' 尾页 ');

        $show = $page->show();

        //$list = $Data->where($map)->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $data->where($map)->order('user_id')->limit($page->firstRow.','.$page->listRows)->select();

        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();


    }

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
                    echo '登陆成功';
                    $ip = get_client_ip();
                    echo $ip;

                    $ad = new \Org\Net\IpLocation('UTFry.dat');
                    echo $ad->getlocation($ip);


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