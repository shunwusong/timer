<?php

class DefaultController extends Controller
{
    public $layout='';
	public function actionIndex()
	{

//        echo 'test';
        $order=new Order();
        $order_info=$order->findAllByAttributes(array('pusher'=>Yii::app()->user->getName()));
		$this->render('index',array('order'=>$order_info));
	}
}