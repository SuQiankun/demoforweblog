<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
    //插入数据的操作
    public function insert(){

        //使用 D 函数,需要有model 类

        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }

 }