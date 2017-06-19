<?php
/**
 * Created by PhpStorm.
 * User: suqiankun
 * Date: 17/6/14
 * Time: 10:57
 */
namespace Home\Controller;
use Think\Controller;
use Think\Think;

class RegisterController extends Controller{

    function index()
    {

        echo 'hdiebvjahuidsa';

        if (IS_POST){
            echo 'POST';
        }else{
            echo 'NOT POST';
        }
    }


     function register()
     {
         $user = new \Home\Model\UserinfoModel();
        if (IS_POST){
            $data =  $user->create();

            if ($data){
                dump($data);
            }else{
                echo $user->getError();
            }
        }else{
            $this->display();
        }



    }


}