<?php

namespace Admin\Controller;
use Think\Controller;

class MangerController extends Controller {

    public function index(){

        $this->assign("name","password");
        $this->display();

    }



}