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
                $user_id=intval($_GET['user']);
                $user=new User();
//                var_dump($user);
                $user_info=$user->findByPk($user_id);
//                $user_info=$user->find('id=:id',array(':id'=>$user_id));
//                var_dump($user_info);
//                $needing_get=NeedingGet::model()->findAll('username=:username',array(':username'=>Yii::app()->user->name));
                $needingGetCount=NeedingGet::model()->count('username=:username',array(':username'=>Yii::app()->user->name));
                $neededGetCount=NeedingGet::model()->count('push_user=:username',array(':username'=>Yii::app()->user->name));
                $starCount=Yii::app()->db->createCommand("select sum(star) as star_sum from needingGet where username=:username")->query(array(':username'=>Yii::app()->user->name))->readAll();

                $from_count=(empty($_GET['page'])||(!is_numeric($_GET['page'])))?0:$_GET['page'];
                $page_size=10;
                $needing_get=Yii::app()->db->createCommand("select * from needingget as A left join needing as B on A.needing_id=B.id limit $from_count,$page_size")->queryAll();

                if(!empty($_GET['action'])&&$_GET['action']=='more'){
                    echo json_encode($needing_get);
                    exit;
                }
                $this->render('index',array(
                    'user'=>$user_info,
                    'needing_get'=>$needing_get,
                    'needingGetCount'=>$needingGetCount,
                    'starSum'=>$starCount[0],
                    'neededGetCount'=>$neededGetCount,
                ));
                exit;
            }
        }
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