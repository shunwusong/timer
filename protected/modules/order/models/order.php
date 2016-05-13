<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17 0017
 * Time: 17:55
 */
class Order extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return 'order';
    }
}