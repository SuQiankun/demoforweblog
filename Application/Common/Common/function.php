<?php
/**
 * Created by PhpStorm.
 * User: suqiankun
 * Date: 17/5/17
 * Time: 23:21
 */

function show($status,$message,$data=array()){
    $result = array(
            'status'=>$status,
            'message'=>$message,
            'data'=>$data
    );

    exit(json_encode($result));
}
function showURL($status,$message,$urlStr=''){
    $result = array(
        'status'=>$status,
        'message'=>$message,
        'urlStr'=>$urlStr
    );

    exit(json_encode($result));
}