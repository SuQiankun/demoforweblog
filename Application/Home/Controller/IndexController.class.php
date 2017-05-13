<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this->display();
    }
    public function insert(){
    		
    }
    
 public function jump(){
 	
 	$Data = M('Data');
 	$result     = $Data->find(2);
 	$this->assign('result',$result);
 	
 	$this->display();
 }

}