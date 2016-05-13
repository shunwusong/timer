<?php

class DefaultController extends Controller
{
    public $defaultAction='push';
    public $layout='';
	public function actionIndex()
	{
        $needing_id=$_GET['id'];
        //需求不复杂使用ar
        //需求复杂可用dao（cdbcommand)
        //查询条件多用cdbcreteria类
        $needing=new Needing();
        $info=$needing->find('id=:id',array(':id'=>$needing_id));
        //收藏
        $collection=Collection::model()->count('user_id=:user_id and needing_id=:cat_id',array(':user_id'=>Yii::app()->user->id,':cat_id'=>$needing_id));
        //验证是否已参与需求
        $needing_gotAll=NeedingPre::model()->findAll('needing_id=:needing_id',array(':needing_id'=>$needing_id));
        $needing_gotCheck=NeedingPre::model()->count('needing_id=:needing_id and username=:username',array(':needing_id'=>$needing_id,':username'=>Yii::app()->user->name));
        //需求是否已托管
        $needing_tuoguan=NeedingGet::model()->find('needing_id=:needing_id',array(':needing_id'=>$needing_id));
        $this->render('index',array(
            'needing'=>$info,
            'collect_num'=>$collection,
            'needing_got'=>$needing_gotCheck,
            'needing_gotAll'=>$needing_gotAll,
            'needing_tuoguan'=>$needing_tuoguan,
            'needing_reply'=>'',
        ));
	}
    public function actionGet(){
        if(!empty($_GET['needing_id'])&&is_numeric($_GET['needing_id'])) {
            $needing_pre = new NeedingPre();
            $needing_id = $_GET['needing_id'];
            $username = Yii::app()->user->name;
//        $needing_pre->setAttributes(array('userid'=>1,'needing_id'=>2));
            $needing_pre->username = $username;
            $needing_pre->needing_id = $needing_id;
            if($needing_pre->save()){
                echo json_encode(array('status'=>true));
            }else{
                echo json_encode(array('status'=>false));
            }
        }else{
            echo json_encode(array('status'=>false));
        }
    }
    public function filters(){
        return array(
            'accessControl',
        );
    }
    public function accessRules(){
        return array(
            array(
                'deny',
                'actions'=>array('push'),
                'users'=>array('?')
            )
        );
    }
    public function actionPush(){
        $model=new Needing();
        if(!empty($_POST)){
            $model->attributes=$_POST['Needing'];
            $model->start_time=strtotime($_POST['Needing']['start_time']);
            $model->end_time=strtotime($_POST['Needing']['end_time']);
            $model->subject=$_POST['Needing']['subject'];
            $model->detail=$_POST['detail'];
            $model->create_time=time();
            $model->push_user='test';
            $model->payment=$_POST['Needing']['payment'];
            $model->save();
        }
        $this->render('push',array('model'=>$model));
    }
}