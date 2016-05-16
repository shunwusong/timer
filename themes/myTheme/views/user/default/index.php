<?php
/**
 用户页
 */
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    .left-slid{
        width:220px;float: left;background-color: white;min-height: 450px;margin: 0 4px 4px 0
    }
    .zhong-slid{
        width:620px;float: left;background-color: white;min-height: 289px;padding: 0 15px 0 15px;margin: 0 4px 4px 0
    }
    .right-slid{
        width:291px;float: left;background-color: white;min-height: 289px;padding: 0 15px 0 15px;margin: 0 0 4px 0
    }
    .user-card{
        width: 100%;
    }
    .left-slid{
        width:220px;float: left;background-color: white;min-height: 250px;margin: 0 4px 4px 0;
        border: 1px solid #c8ccd0;
        border-radius: 4px;
        text-align: center;
        padding: 17px;
        box-shadow: inset 0 130px 0 #e7e8ea;
    }
    .reputation{
        width: 100%;
        text-align: center;
        font-size: 22px;
        font-weight: 300;
        padding: 12px 0;
    }
    .level{
        width: 35px;
        height: 32px;
        background: #f9ebe1;
        border-color: #f1decc;
        padding-top: 8px;
    }
    .circle{
        position: relative;
        top: -1px;
        margin-top: 0;
        margin-right: 4px;
        width: 8px;
        height: 8px;
        vertical-align: middle;
        border-radius: 50%;
        background-image: none;
        background: #D1A684;
        display: inline-block;
    }
    .state{
        padding: 10px 0 10px 0;
    }
    .row-user{
        width: 100%;
        padding-left: 10px;
    }
    .number{
        display: block;
        color: #0C0D0E;
        font-weight: 700;
        font-size: 17px;
    }
    .record{
        margin-top: 0;
        width: 100%;
        min-height: 450px;
        background-color: white;
    }
    .needing{
        width: 49%;
        float: left;
    }
    .needed{

    }
    .center {
        display: table;
        margin-left: auto;
        margin-right: auto;
    }
    .clear{
        clear: both;
    }
    .star {display: block; float: left; width: 16px; height: 15px; background: url(<?php echo Yii::app()->request->baseUrl;?>/images/star.png) no-repeat ; background-position: -20px 0; cursor: pointer;}
    .star_five { background-position: 0 0;}
    .needing-nav{border-bottom: 1px solid #ddd;}
    .data-empty{
        margin-top: 160px;
        font-size: 14px;
        color: #999;
    }
</style>
<div class="container" style="margin-top: 20px;position: relative">
    <div class="left-slid">
        <div class="user-img">
            <img class="center" style="width: 164px" src="<?php echo empty($user[0]['img'])?Yii::app()->request->baseUrl.'/css/images/test.jpg':$user[0]['img'];?>">
        </div>
        <div class="reputation">
            45<span style="font-size: 11px;color: #999">信誉点</span>
        </div>
        <div class="level center">
            <span class="circle"></span>
            <span class="">8</span>
        </div>
    </div>
    <div class="zhong-slid">
        <div class="user-info">
            <h2>test测试用户</h2>
            <div>
                short description about user<br>
                用户简介...
            </div>
        </div>
    </div>
    <div class="right-slid">
        <div class="state">
            <div class="row-user">
                <div style="float: left;width: 33%">
                    <span class="number"><?php echo $needingGetCount;?></span>
                    雇佣
                </div>
                <div style="float: left;width: 33%">
                    <span class="number">95</span>
                    被雇佣
                </div>
                <div style="float: left;width: 33%">
<!--                    <span class="number">--><?php //echo $starSum['star_sum']/$needingGetCount;?><!--</span>-->
<!--                    --><?php //$this->widget('application.widget.star.star');?>
                    <div style="height: 25px">
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    </div>
                    <div class="clearfix"></div>
                    信用评价
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="record">
        <div class="center" style="font-size: 22px;font-weight: bold">record</div>
<!--        <div class="needing">-->
<!--            发布的需求-->
<!--            --><?php //foreach($needing_get as $k=>$v):?>
<!---->
<!--            --><?php //endforeach;?>
<!--        </div>-->
<!--        <div class="needing">-->
<!--            提供的服务-->
<!--        </div>-->
        <ul class="nav nav-tabs" style="font-size: 14px">
            <li class="active"><a href="#">服务方</a></li>
            <li><a href="#">雇佣方</a></li>
        </ul>
        <div class="needing-table">
            <?php if(!empty($needing_get)):?>
            <table class="table">
                <caption style="text-align: center">服务记录</caption>
                <thead>
                <tr>
                    <th>需求</th>
                    <th>参与日期</th>
                    <th>状态</th>
                    <th>金额</th>
                    <th>反馈</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($needing_get as $k=>$v):?>
                    <?php if($v['status']==0):?>
                <tr class="active">
                    <td><?php echo $v['subject']?></td>
                    <td><?php echo date('Y-m-d',$v['addtime']);?></td>
                    <td>进行中</td>
                    <td>￥<?php echo $v['payment'];?></td>
                    <td></td>
                    <td></td>
                </tr>
                        <?php elseif($v['status']==1):?>
                        <tr class="success">
                            <td><?php echo $v['subject']?></td>
                            <td><?php echo date('Y-m-d',$v['addtime']);?></td>
                            <td>已完成</td>
                            <td>￥<?php echo $v['payment']?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php elseif($v['status']==2):?>
                        <tr class="danger">
                            <td><?php echo $v['subject']?></td>
                            <td><?php echo date('Y-m-d',$v['addtime']);?></td>
                            <td>未完成</td>
                            <td>￥<?php echo $v['payment'];?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php endif;?>
                    <?php endforeach;?>
<!--                <tr class="success">-->
<!--                    <td>产品2</td>-->
<!--                    <td>10/11/2013</td>-->
<!--                    <td>已确认</td>-->
<!--                    <td></td>-->
<!--                </tr>-->
<!--                <tr  class="warning">-->
<!--                    <td>产品3</td>-->
<!--                    <td>20/10/2013</td>-->
<!--                    <td>待确认</td>-->
<!--                    <td></td>-->
<!--                </tr>-->
<!--                <tr  class="danger">-->
<!--                    <td>产品4</td>-->
<!--                    <td>20/10/2013</td>-->
<!--                    <td>已退货</td>-->
<!--                    <td></td>-->
<!--                </tr>-->
                </tbody>
            </table>
                <?php else:?>
                <div class="center data-empty">暂无记录</div>
            <?php endif;?>
        </div>
    </div>
</div>
<script type="text/javascript">
    var score = <?php echo floor(($needingGetCount!=0)?($starSum['star_sum']/$needingGetCount):0)?>;
    if(score!=0&&score!=false){
        $(".star").removeClass("star_five");
        var item = $(".star").eq(score-1);
        item.addClass('star_five');
        item.prevAll(".star").addClass('star_five');
    }
    function getMore($page_count){
        $.ajax({
            type:'GET',
            url:<?php Yii::app()->createUrl('user/default/index?user=')?>
        });
    }
</script>