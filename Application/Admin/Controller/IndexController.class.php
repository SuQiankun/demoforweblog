<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function index(){
        
        if (!empty($_POST)) {
                $User = M("user");
                I('.post')
                $params['username'] = $_POST['username'];
                $params['password'] = $_POST['password'];
                $result = $User->WHERE($params)->select(); 
                
                if ($result) {
                    $this ->success("登陆成功","admin/Manger/index");
                } else {
                    $this ->error();
                }

        } else {
                 $this->display();
        }
    }

public function ADStatus(){
       $str = array("status"=>"off");
     return json_encode($str);
}

}