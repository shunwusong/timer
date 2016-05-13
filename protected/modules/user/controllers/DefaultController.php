<?php

class DefaultController extends CController
{
    public function actions()
    {
        return array(
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
        );
    }
	public function actionIndex()
	{
//		$this->render('index');
        if(!empty($_GET['user'])){
            if(is_numeric($_GET['user'])){
                $user_id=$_GET['user'];
                $user=new User();
                $user_info=$user->findByPk($user_id);
                $this->render('index',array('user'=>$user_info));
            }
        }
        $user=new User();
        var_dump($user);
        echo "test_index";
	}
    public function actionNeeding(){
//        $needing=new Needing();
        $user=new User();
        $sql="select * from needing  as A left join (select needing_id,count(1) from needingPre group by needing_id) as B on A.id=B.needing_id   where push_user=:push_user";
        $needing=Yii::app()->db->createCommand($sql)->query(array(':push_user'=>Yii::app()->user->name))->readAll();
        $user_info=$user->findAllByPk(Yii::app()->user->getId());
//        session_start();
//        var_dump($_SESSION);
//        var_dump(Yii::app()->user->getId());
//        var_dump($user_info);
//        var_dump($needing);
        $this->render('needing',array(
            'user'=>$user_info,
            'needing'=>$needing
        ));
    }
    public function actionRegister(){
        echo 'test';
    }
}