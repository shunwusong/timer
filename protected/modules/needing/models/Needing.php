<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/23 0023
 * Time: 14:57
 */
    class Needing extends CActiveRecord{
        public static function model($classname=__CLASS__){
            return parent::model($classname);
        }
        public function tableName(){
            return 'needing';
        }
    }