<?php

namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;
use Think\Verify;
class LoginController extends Controller{

    function index()
    {
        dump($_COOKIE);

       $this->display();

    }

    function uploadFiles()
    {
        if(!empty($_POST)){
            echo '12132131312312';
            $upload = new Upload();
            $upload->rootPath = './Public';
            $upload->allowExts = array('jpg','gif','jpeg');
            $upload->savePath = '/Uploads/';


            foreach ($_FILES as $k => $v){

                $info = $upload->uploadOne($v);
                $info+=$info;
                dump($info);
            }

        }else{

            $this->display();
        }
    }

    function fenYe()
    {
        $data  = M('userinfo');
        $map['user_id'] = array('gt',0);
        $count = $data->where($map)->count();


        $page = new Page($count,'1');
        $page->lastSuffix = false;
        $page->setConfig('header','<a class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;');
        $page->setConfig('prev','&nbsp;<');
        $page->setConfig('next','>&nbsp;');
        $page->setConfig('first','首页&nbsp;');
        $page->setConfig('last','&nbsp;尾页');
        $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');

        $show = $page->show();

        //$list = $Data->where($map)->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $data->where($map)->order('user_id')->limit($page->firstRow.','.$page->listRows)->select();

        dump($list);
        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display('index');

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
                    $userpsw = array(
                        'username'=>$_POST['username'],
                        'password'=>$_POST['password'],
                    );
                    $re = setcookie('userinfo',$_POST['username'],time()+3600,'/');
                    $re = setcookie('password',$_POST['password'],time()+3600,'/');
                    dump($re);
                    echo '登陆成功';
                    $this->display();


//                    dump($_COOKIE);
                }else{
                    echo '登录失败';
                }

            }else{
                echo '验证码错误';
            }

        }else{
//            $this->display();
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
ob_end_flush();