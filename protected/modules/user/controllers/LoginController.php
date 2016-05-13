<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/17 0017
 * Time: 15:19
 */
    class LoginController extends Controller{
        public function actions(){
            return array(
                'captcha'=>array(
                    'class'=>'CCaptchaAction',
                    'backColor'=>0xFFFFFF,
                    'maxLength'=> 4,
                ),
            );
        }
        public function actionLogin(){
//            $model=new User();
//            $model->username=$_POST['username'];
//            $model->password=$_POST['password'];
//            $model->verifyCode=$_POST['User']['verifyCode'];
////            echo $model->validate();
//            echo CActiveForm::validate($model);
////            $model->attributes=$_POST['use']
////            echo $model->
            if(!empty($_POST)) {
                $model = new UserLogin();
                $model->username=$_POST['username'];
                $model->password=$_POST['password'];
                if($model->validate()){
                    $this->redirect(Yii::app()->user->returnUrl);
                }
                var_dump($_POST);
            }
            $this->render('login');
//            $this->redirect(Yii::app()->user->returnUrl);
        }
    }