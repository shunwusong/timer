<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 15:37
 */
    class Top extends CWidget{
        public function run(){
            $model=new UserLogin();
            $this->render('top',array('model'=>$model));
        }
    }