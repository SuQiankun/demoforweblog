<?php
/**
 * Created by PhpStorm.
 * User: suqiankun
 * Date: 17/6/14
 * Time: 17:20
 */
namespace Home\Model;
use Think\Model;

class UserinfoModel extends Model{

    //使用$_validate 属性验证 验证
   protected $_validate = array(

//       array('username','require','用户名不能为空!'),
//       array('password','require','密码不能为空!'),
//       array('repassword','require','请输入确认密码'),
//       array('repassword','password','两次输入密码不符',0,'confirm'),
//       array('mail','email','邮箱格式不正确'),
       array('hobby','checkHobby','爱好至少选择两个以上',0,'callback'),
//       array('password','',''),
//       array('email','email','邮箱格式错误',2),


    );

    function checkHobby($arg){
        if (count($arg) < 2){
            return false;
        }
            return true;
    }
}