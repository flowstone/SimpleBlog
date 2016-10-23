<?php
/**
 * Created by PhpStorm.
 * User: 尧
 * Date: 10/23/2016
 * Time: 9:34 PM
 */
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller{
    public function addAction(){
        $this->display();
    }

    public function  listAction(){
        $this->display();
    }
}
