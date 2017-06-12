<?php
namespace Home\Controller;
use Think\Controller;

class NodePadController extends Controller{


    public function showTipList(){
		$WORD = M('word');
//		$map['sgNumber'] = array('gt',5);
//		$result = $WORD->where($map)->select();

//		$result= $WORD->limit('0,10')->select();

		$result = $WORD -> limit(5)->page(3)->select();
		foreach($result as $k=>&$v){
			$v['index'] = $v['sgnumber'];
			 unset($v['sgnumber']);
		}
		$resultData = json_encode($result);

		$this->assign('list',$result);

		$this->display();

//		$this -> ajaxReturn($resultData);
    }

    
	function updateInfo($infoid){
		$info = D('word');

        //更新数据, else 赋值
        if(!empty($_POST)){
            $data = $info ->find($infoid);
            $info->save($data);
        }else{

           $word = $info ->find($infoid);
            $this-> assign('info',$word);
            $this->display();
        }





	}


}