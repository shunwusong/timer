<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/25 0025
 * Time: 16:32
 */
class categoryMenu extends CWidget{
    public function run(){
        $model=new Category();
        $info=$model->findAll();
        $this->render('categoryMenu',array('info'=>$info));
    }
}