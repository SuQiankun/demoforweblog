<?php
namespace Home\Controller;
use function Sodium\add;
use Think\Controller;
class IndexController extends Controller {
    public function index(){



       $this->display();
    }


    public function regiest(){
        $user = D('User');
        if (!empty($_POST)){
            //可以使用 creat 方法进行非法字段过滤功能,如果不存在就 unset 非法数据
            //多选框处理,
            $_POST['user_hobby'] = implode(',',$_POST['user_hobby']);
            $user.add($_POST);


        }else{
            $this->display();
        }
    }
    //使用 creat 验证数据
    public function checkFormat(){

        /*
         * 在模型文件中, 添加 $_validate 属性(父类属性), 之后需要使用 new \Model\xxxxModel 进行实例化模型类, 如果错误信息
         * 比较多可以设置 $pathValidate 为 true
         * */
         $_validate = array(
            //验证规则 array(字段名,验证规则,错误提示 ==);
             array(),
        );

    }
    
 public function jump(){
 	
 	$Data = M('Data');
 	$result     = $Data->find(2);
 	$this->assign('result',$result);
 	
 	$this->display();
 }

}