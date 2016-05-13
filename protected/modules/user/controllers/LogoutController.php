<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 16:26
 */
    class LogoutController extends Controller{
        public function actionLogout(){
            Yii::app()->user->logout();
            $this->redirect(array('/site/default/index'));
        }
    }