<?php

class DefaultController extends Controller
{
//    public $layout=/
//默认布局文件：配置theme，则为theme下的文件；未配置则为根目录下的view；此处可指定路径；或在config中配置theme
//    public $layout="application.modules.site.views.layouts.column1";
    public $layout='';
    public function actions(){
        return array(
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'maxLength'=> 4,
            ),
        );
    }
    public function actionMore(){
        $last=$_POST['last'];
        $amount=$_POST['amount'];
//        $needing=new Needing();
//        $info=$needing->findAll(array('limit'=>2,1));
////        file_put_contents('test.txt',$last);

        //createCommand效率相较model更高
        $info=Yii::app()->db->createCommand()
            ->select('*')
            ->from('needing')
            ->limit($amount,$last)
            ->queryAll();
        ;
        echo json_encode($info);
    }
	public function actionIndex()
	{
//        var_dump($_SERVER);exit;
        $model=new UserLogin();
        $query_arr=array();
        if(!empty($_GET['cat_id'])&&is_numeric($_GET['cat_id'])){
//            array_push($query_arr,array('cat_id'=>$_GET['type']));
            $query_arr['cat_id']=$_GET['cat_id'];
        }
        //sql的直接执行，条件可放于query中，防注入
        $needing_cat=Yii::app()->db->createCommand("select * from needing_cat")->query()->readAll();

        //对cactiverecorde的包装
        $criteria=new CDbCriteria();
        $criteria->order='create_time desc';
        if(!empty($_GET['cat_id'])&&is_numeric($_GET['cat_id'])) {
            $criteria->addCondition(array('cat_id='.$_GET['cat_id']));
        }
        //CActiveDataProvider是基于ActiveRecord实现的一个数据提供者
        //needing分页
        $page_size=4;
        $dataProvider=new CActiveDataProvider('needing',array(
            'pagination'=>array(
                'pageSize'=>$page_size,
            ),
            'criteria'=>$criteria
        ));
//        var_dump($dataProvider->getPagination());
//        if(!empty($_GET['action'])&&$_GET['action']=='paging'){
////            echo json_encode($dataProvider->getData(false));
//            echo CJSON::encode($dataProvider->getData());
//            exit;
//        }

        //分页最终处理
        if(!empty($query_arr)) {
            $count = Needing::model()->count("cat_id=:cat_id", $query_arr);
        }else{
            $count=Needing::model()->count();
        }
        $page_count=ceil($count/$page_size);

        $page_now=(isset($_GET['Needing_page'])&&intval($_GET['Needing_page']))?$_GET['Needing_page']:1;
        if(!empty($_POST)) {
            if (!empty($_POST['ajax']) && ($_POST['ajax'] == 'denglu')) {
                //失去焦点自动提交ajax请求
                echo CActiveForm::validate($model);
                exit;
            }
            else if(isset($_POST['UserLogin'])){
                $model->attributes=$_POST['UserLogin'];
//                echo $model->getErrors();
                if($model->validate()){
                    echo 1;
                }else{
                    echo 0;
                }
                Yii::app()->end();
            }
        }
//        $model->addError('username','test');
//        var_dump($model->getErrors());
        $this->render('index',array(
            'model'=>$model,
//            'needing'=>$needing,
            'dataProvider'=>$dataProvider,
            'page_now'=>$page_now,
            'count'=>$count,
            'page_size'=>$page_size,
            'page_count'=>$page_count,
            'needing_cat'=>$needing_cat,
            'query_arr'=>$query_arr
        ));
	}
    public function actionTest(){
        var_dump(Yii::app()->user,false,true);
    }
}