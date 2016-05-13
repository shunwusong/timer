<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21 0021
 * Time: 17:20
 */
    class UserLogin extends CFormModel{
        public $username;
        public $password;
        public $rememberMe;
        public function rules(){
            return array(
                array('username,password','required'),
                array('password','authenticate'),
            );
        }
        public function authenticate($attribute,$parames){
            $identity=new MyUserIdentity($this->username,$this->password);
            $identity->authenticate();
            switch($identity->errorCode){
                case UserIdentity::ERROR_NONE:
                    Yii::app()->user->login($identity);
                    break;
                case UserIdentity::ERROR_USERNAME_INVALID:
                    $this->addError('username','no user');
                    break;
                case UserIdentity::ERROR_PASSWORD_INVALID:
                    $this->addError('password','not right');
                    break;
            }
        }
    }