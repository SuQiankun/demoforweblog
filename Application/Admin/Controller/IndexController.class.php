<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


        $this->show('<h1>admin module</h1>','utf-8');
    }
}