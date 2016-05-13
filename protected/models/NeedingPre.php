<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/13 0013
 * Time: 14:01
 */
class NeedingPre extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return 'needingPre';
    }
}