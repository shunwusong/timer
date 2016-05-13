<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/18 0018
 * Time: 10:16
 */
    class test_1 extends CActiveRecord{
        public static function model($className=__CLASS__){
            return parent::model($className);
        }
        public function tableName(){
            return 'user';
        }
    }