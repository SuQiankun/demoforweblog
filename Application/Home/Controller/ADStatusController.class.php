<?php
namespace Home\Controller;
use Think\Controller;
class ADStatusController extends Controller{
    //插入数据的操作
    public function index(){
      
        $str = "{'status':'off'}";
        $jsonStr = json_encode($str);
        $this->ajaxReturn($jsonStr);

    }   
 }