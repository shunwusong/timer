<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/12 0012
 * Time: 14:46
 */
class Collection extends CActiveRecord{
    public static function model($classname=__CLASS__){
        return parent::model($classname);
    }
    public function tableName(){
        return 'collection';
    }
}