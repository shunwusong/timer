<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/4 0004
 * Time: 14:00
 */
class Page extends CWidget{
    public $page_now;
    public $page_limit;
    public $page_count;
    public $param;
    public $action_url;
    public $query_arr;
    public $query_str='';
    public function run(){
        if(!empty($this->query_arr)){
            foreach($this->query_arr as $k=>$v){
                $this->query_str.='/'.$k.'/'.$v;
            }
        }
        $this->render('page_view');
    }
}