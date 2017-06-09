<?php
return array(
	//'配置项'=>'配置值'
'DB_TYPE'=>'mysql',// 数据库类型
'DB_HOST'=>'localhost',// 服务器地址
'DB_NAME'=>'thinkphp',// 数据库名
'DB_USER'=>'root',// 用户名
'DB_PWD'=>'suqiankun',// 密码
'DB_PORT'=>3306,// 端口
'DB_PREFIX'=>'think_',// 数据库表前缀
'DB_CHARSET'=>'utf8',// 数据库字符集
'unix_socket'   => '/Applications/MAMP/tmp/mysql/mysql.sock',

//'配置项'=>'配置值'
'URL_ROUTER_ON' => true,

'URL_MAP_RULES' =>  array(
'showTipList'=> 'Home/NodePad/showTipList',

),

);