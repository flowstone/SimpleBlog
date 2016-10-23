<?php
/**
 * Created by PhpStorm.
 * User: 尧
 * Date: 10/23/2016
 * Time: 5:28 PM
 */
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller{
    public function indexAction(){
        $this->display();
    }

    public function articleAction(){
        $this->display();
    }
}