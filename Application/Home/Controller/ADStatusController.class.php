<?php
namespace Home\Controller;
use Think\Controller;
class ADStatusController extends Controller{
    public function index(){
        $str['stauts'] = 'on';
        $jsonStr = json_encode($str);
        exit($jsonStr);
    }   
 }