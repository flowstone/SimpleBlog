<?php
/**
 * Created by PhpStorm.
 * User: 尧
 * Date: 10/23/2016
 * Time: 7:33 PM
 */
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends Controller{
    public function indexAction(){
        $this->display();
    }

    public function addAction(){

//        if (IS_POST) {
//
//            $category_title = I('post.category_title');
//            echo $category_title;
////            $m_category = M('category');
////            $row = $m_category->add()
//            //
//        }
        $this->display();
    }

    public function editAction(){
        $this->display();
    }

    public function listAction(){
        $this->display();
    }
}