<?php
//var_dump($this instanceof CController);
//var_dump(Yii::app() instanceof CModule);
//var_dump(Yii::app()->getWidgetFactory());
//var_dump($this);
//var_dump($dataProvider->getData());
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 15:09
 */
//$date=new DateTime();
//var_dump($date);
//var_dump($needing);
//var_dump(Yii::app()->authManager);
//var_dump(Yii::app()->user->isguest);
?>
<style>
    .fenye{

    }
    .center {
        width: auto;
        display: table;
        margin-left: auto;
        margin-right: auto;
    }
    .table p{
        color: #999;
    }
    /*body{*/
        /*font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
        /*font-size: 12px;*/
    /*}*/
    .button_choose{
        /*padding: 0 4px; */
        /* display: inline-block; */
         padding: 4px 12px;
        /* margin-bottom: 0; */
        /* font-size: 14px; */
        /* line-height: 20px; */
        color: #333;
        /* text-align: center; */
        /* vertical-align: middle; */
        cursor: pointer;
        /* border: 1px solid #d2d2d2; */
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
         background-color: #ff9400;
        border-color: #ea7f00;
        font-size: 12px;
    }
</style>
<head>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body{
            font-family: 'Microsoft Yahei', Helvetica, Arial, sans-serif;
        }
    </style>
</head>
<div class="container" style="">
<!--<div><h3>筛选条件:</h3></div>-->
    <div>
<!--        --><?php //$this->widget('application.modules.site.widget.location');?>
    </div>
<div style="margin-top: 10px">
<!--    <h5>时间段:</h5>-->
    <ul class="list-inline">
        <li style="font-weight: bold">发布时间:</li>
        <li><a class="btn-sm choose">All</a></li>
        <li><a href="">today</a></li>
        <li><a href="">yesterday</a></li>
        <li><a href="">...</a></li>
<!--        <li><input id="example"></li>-->
    </ul>
</div>
<div>
<!--    <h5>类型:</h5>-->
    <ul class="list-inline">
        <li style="font-weight: bold">类型:</li>
        <?php if(empty($_GET['cat_id'])):?>
        <li><a href="<?php echo Yii::app()->createUrl('site/default/index');?>" class="button_choose">All</a></li>
            <?php else:?>
            <li><a href="<?php echo Yii::app()->createUrl('site/default/index');?>">All</a></li>
        <?php endif;?>
        <?php foreach($needing_cat as $k=>$v):?>
            <?php if(!empty($_GET['cat_id'])&&($_GET['cat_id']==$v['id'])):?>
                <li><a class="button_choose" href="<?php echo Yii::app()->createUrl('site/default/index').'/cat_id/'.$v['id'];?>"><?php echo $v['name'];?></a></li>
            <?php else:?>
                <li><a href="<?php echo Yii::app()->createUrl('site/default/index').'/cat_id/'.$v['id'];?>"><?php echo $v['name'];?></a></li>
            <?php endif;?>
        <?php endforeach?>
    </ul>
</div>
<!--    <div id="more">-->
<!--<!--javascript:void(0)表示死链接，#会跳到页首-->
<!--        <a href="javascript:void(0)" id="get_more">更多</a>-->
<!--    </div>-->
<div class="" style="width: 100%;background:white;border-radius: 4px">
    <h2>main</h2>
    <div class="table-responsive">
        <table class="table  table-striped table-hover table-condensed">
            <thead>
            <tr class="danger">
                <th style="width: 24%">subject</th>
                <th style="width: 15%">push_date</th>
                <th style="width: 19%">s&e_date</th>
                <th style="width: 20%">author</th>
                <th style="width: 10%">$</th>
                <th style="width: 10%"></th>
            </tr>
            </thead>
            <tbody id="needing_table">
<!--            --><?php
//            for($i=0;$i<count($dataProvider->data);$i++){
//                echo "<tr>
//                <td><a href=''>".$dataProvider->data[$i]->push_user."</a></td>
//                <td>".date('y-m-d H:i:s',$dataProvider->data[$i]->create_time)."</td>
//                <td><a href=''>".$dataProvider->data[$i]->detail."</a></td>
//                <td>...</td>
//            </tr>";
//            }
//            ?>
<?php foreach($dataProvider->getData() as $k=>$v):?>
<tr>
    <td>
        <p style="font-size: 14px;color: #0b73bb;font-weight: bold;line-height: 14px"><a href="<?php echo Yii::app()->createUrl('needing/default/index/id/'.$v['id'])?>"><?php echo $v['subject']?></a></p>
        <p><?php echo $v['detail'];?>...</p>
    </td>
    <td><p><?php echo date('y-m-d H:i:s',$v['create_time']);?></p></td>
    <td>
        <p><?php echo date('y-m-d H:i:s',$v['start_time']);?> - </p>
        <p><?php echo date('y-m-d H:i:s',$v['end_time']);?></p>
    </td>
    <td><p style="color: #0b73bb"><a href=""><?php echo $v['push_user']?></a></p></td>
    <td><p><?php echo $v['payment']?></p></td>
    <td><p>0人参与</p></td>
</tr>
<?php endforeach;?>
<?php
//        var_dump($dataProvider->data);
//$this->widget('zii.widgets.CListView', array(
//    'dataProvider'=>$dataProvider,
////        'pagerTemplate'=>'onlyPager',
//    'itemView'=>'_view',
//
//    'emptyText'=>'ooooo',
//    'ajaxUpdateError'=>'function(){alert("test")}',
//    'enablePagination'=>true,//是否启用分页
////        'itemsCssClass'=>'',
//    'pagerCssClass'=>'',
//    'ajaxUpdate'=> true,//这样就不会AJAX翻页
//    'pager' => array(//pager 的配置信息。默认为<CODE>array('class'=>'CLinkPager')</CODE>.也可以自己配置
////        'class'=>'CListPager',
//        'nextPageLabel' => '下一页 »',
//        'prevPageLabel' => '« 上一页'
//    ),
//    'sortableAttributes'=>array(
//        'push_user',
//        'detail'
//    )
//));
?>
            </tbody>
        </table>
<!--        <div class="center">-->
<!--        <ul class="pagination" id="fenye">-->
<!--            <li><a href="javascript:void(0)">&laquo;</a></li>-->
<!--            <li class="active"><a href="javascript:void(0)">1</a></li>-->
<!--            <li><a href="javascript:void(0)">2</a></li>-->
<!--            <li><a href="javascript:void(0)">3</a></li>-->
<!--            <li><a href="javascript:void(0)">4</a></li>-->
<!--            <li><a href="javascript:void(0)">5</a></li>-->
<!--            <li><a href="javascript:void(0)">&raquo;</a></li>-->
<!--        </ul>-->
<!--        </div>-->
        <?php $this->widget('application.modules.site.widget.page',array('page_now'=>$page_now,'page_limit'=>$page_size,'page_count'=>$page_count,'param'=>'Needing_page','action_url'=>'site/default/index','query_arr'=>$query_arr))?>
    </div>
</div>
</div>
<!--<div class="float_layer" id="float_layer">-->
<!--    <div class="warp">-->
<!--        <ul>-->
<!--            <li class="size">Goods of <a href="#">Join Us</a></li>-->
<!--            <li>...</li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<script type="text/javascript" src="--><?php //echo Yii::app()->request->baseUrl;?><!--/js/bootstrap-datetimepicker.fr.js"></script>-->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/unix_trans.js"></script>
<script type="text/javascript">
    var last=0;
    $('#example').datetimepicker({
        showSecond: false,
        showMillisec: false
    });
    function more(){
        $.ajax({
            type:'post',
            url:"<?php echo Yii::app()->createUrl('site/default/more');?>",
            data:'last='+last+'&amount=2',
            success:function(more){
                more=JSON.parse(more);
//                alert(more);
                for(i=0;i<more.length;i++){
//                    $('#needing_table').append("<tr><td>"+more[i].push_user+"</td><td>"+unix_to_datetime(more[i].start_time)+"</td><td>"+unix_to_datetime(more[i].create_time)+"</td><td><a href=<?php //echo Yii::app()->createUrl('needing/default/index');?>///id/"+more[i].id+">"+more[i].detail+"</a></td></tr>");
                }
                last=last+2;
//                $.each(more,function(){
////                    alert(res.push_user);
//                    $('#needing_table').append("<tr><td>"+more.push_user+"<td><td>"+more.create_time+"</td><td>"+more.detail+"</td></tr>")
//                })
            }
        })
    }
    var page_now=0;
//    $("#fenye li").click(function(){
////        alert($(this).index());
//        var index_page=$(this).index();
//        var page=index_page+page_now*5;
//        $.ajax({
//            type:'GET',
//            url:"<?php //echo Yii::app()->createUrl('site/default/index')?>//?Needing_page="+page+"&action=paging",
//            success:function(data){
//                data=JSON.parse(data);
//                page_data='';
//                for(i=0;i<data.length;i++) {
//                    page_data+="<tr><td>"+data[i].subject+"</td><td>"+unix_to_datetime(data[i].create_time)+"</td><td>"+data[i].push_user+"</td><td>"+data[i].payment+"</td></tr>";
//                }
//                $("#needing_table").html(page_data);
//            }
//
//        });
//    });
</script>