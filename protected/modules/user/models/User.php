<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15 0015
 * Time: 15:28
 */
    class User extends CActiveRecord{
        public $verifyCode;
        public static function model($className=__CLASS__){
            return parent::model($className);
        }
        public function tableName(){
//            return Yii::app()->getModule('user')->tableUsers;
            return 'user';
        }
//        public function rules(){
//            return array(
//                array('username,password','required','message'=>'check enter'),
////                array('email','email','message'=>'enter correct mail type'),
////                array('username','checkUsername'),
////                array('verifyCode','captcha'),
//            );
//        }
    }