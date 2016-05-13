<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15 0015
 * Time: 17:27
 */
    class RegisterForm extends User{
        public $username;
        public $password;
        public $rePassword;
        public $verifyCode;
        public function rules()
        {
            return array(
                array('username,password,verifyCode', 'required', 'message' => 'empty'),
                array('rePassword','reCheck'),
                array('username','usernameCheck'),
                array('verifyCode','captcha','allowEmpty'=>!CCaptcha::checkRequirements())
            );
        }
        public function reCheck($attribute){
            if($this->rePassword!=$this->password){
                $this->addError($attribute,'rePassword not same');
            }
        }
        public function usernameCheck(){
            $user=new User();
            $check=$user->findByAttributes(array('username'=>$this->username));
            if($check){
                $this->addError('username','username already exit');
            }
        }

    }