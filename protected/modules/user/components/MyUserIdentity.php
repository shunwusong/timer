<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21 0021
 * Time: 16:56
 */
    class MyUserIdentity extends CUserIdentity{
        private $_id;
        //重写该方法；根据数据库用户名密码判断
        public function authenticate(){
            $res=User::model()->findByAttributes(array('username'=>$this->username));
//            var_dump($res);
            if($res===null){
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            }else if($res->password!=md5($this->password)){
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }else{
                $this->_id=$res->id;
//                $this->setState('title',$res->title);
                $this->errorCode=self::ERROR_NONE;
            }
            return $this->errorCode;
        }
        //重写该方法，因为默认id为用户名
        public function getId(){
            return $this->_id;
        }
    }