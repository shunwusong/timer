<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15 0015
 * Time: 10:32
 */
    class RegisterController extends Controller{

//        action方法方便重用action
        public function actions(){
            return array(
                'captcha'=>array(
                    'class'=>'CCaptchaAction',
                    'backColor'=>0xFFFFFF,
                    'maxLength'=>'4',
                    'minLength'=>'4',
                    'height'=>'40',
                ),
            );
        }
        public function actionRegister(){

            $model=new RegisterForm();
            if(isset($_POST['ajax'])&&$_POST['ajax']=='zhuce'){
//                $model->attributes=
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            else if(isset($_POST['RegisterForm'])){
                $model->attributes=$_POST['RegisterForm'];
                if($model->validate()){
                    $model->password=$model->rePassword=md5($model->password);
                    $model->create_time=time();
                    if($model->save()){
                        echo 'register success!back to login';
                        exit;
                    }
                }else{
                    echo "fail";
                }
            }
            $this->render('register',array('model'=>$model));
        }



        public function actionRegister1(){
//            echo $_POST['User']['username'];
//            exit;
            if(!empty($_POST)){
                $username=$_POST['User']['username'];
                $password=$_POST['User']['password'];
//                var_dump($_POST);
////                $model=new User();
//                $pdo=Yii::app()->db;
////                var_dump($pdo);
//                $command=$pdo->createCommand("insert into user(username,password) VALUES ('".$username."','".$password."')");
//                $res=$command->execute();
//                echo $res;


//                // 查找满足指定条件的结果中的第一行
//                $post=Post::model()->find($condition,$params);
//// 查找具有指定主键值的那一行
//                $post=Post::model()->findByPk($postID,$condition,$params);
//// 查找具有指定属性值的行
//                $post=Post::model()->findByAttributes($attributes,$condition,$params);
//// 通过指定的 SQL 语句查找结果中的第一行
//                $post=Post::model()->findBySql($sql,$params);

                $model=new User();
//                $model->username=$username;
//                $model->password=$password;
                //此处可直接赋值
                $model->attributes=$_POST['User'];
                $model->create_time=time();
//                $model->save();
                if(!($model->validate())) {
//                    var_dump($model->getErrors());
//                    echo json_encode($model->getErrors());
                    echo 0;
                }else{
                    if($model->save()){
                        echo 1;
                    }else{
                        echo 0;
                    }
                }
            }
        }
    }