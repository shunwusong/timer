<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/25 0025
 * Time: 16:34
 */
class Category extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return 'category';
    }
}