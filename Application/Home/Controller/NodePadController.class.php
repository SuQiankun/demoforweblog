<?php
namespace Home\Controller;
use Think\Controller;

class NodePadController extends Controller{


    public function showTipList(){
		$WORD = M('word');
		$map['sgNumber'] = array('gt',5);
		$result = $WORD->where($map)->select();
		foreach($result as $k=>&$v){
			$v['index'] = $v['sgnumber'];
			 unset($v['sgnumber']);
		}
		$resultData = json_encode($result);
		$this -> ajaxReturn($resultData); 
    }



}