<?php
namespace Home\Controller;
use Think\Controller;
class ADStatusController extends Controller{
    public function index(){
        $str['status'] = 'off';
        $jsonStr = json_encode($str);
        exit($jsonStr);
    }   
 }