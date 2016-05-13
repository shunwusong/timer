<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16 0016
 * Time: 17:14
 */
class needing_left extends CWidget{
    public function run(){
        $user=new User();
        $user_info=$user->findAllByPk(Yii::app()->user->getId());
        $this->render('needing_left',array('user'=>$user_info));
    }
}
?>