<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 15:57
 */
    class menu extends CWidget{
        public function run(){
            $model=new Category();
            $info=$model->findAll();
            $this->render('menu',array('info'=>$info));
        }
    }