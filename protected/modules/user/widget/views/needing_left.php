<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16 0016
 * Time: 17:17
 */
?>
<div class="needing_left">
    <div class="user_info">
        <dl class="user_min_image">
            <dt>
                <a href="#">
                    <img style="height: 60px" src="<?php echo empty($user[0]['img'])?Yii::app()->request->baseUrl.'/css/images/test.jpg':$user[0]['img'];?>">
                </a>
            </dt>
            <dd>
                <p class="user_name" style="margin-left: 70px"><a href="#"><?php echo $user[0]['username']?></a></p>
            </dd>
        </dl>
    </div>
    <div class="clear"></div>
    <div class="account_info" style="position: relative">
        <dl>
            <!--                <a tool-map="top" tool-text="详细" class="fr zbj-tooltip" href="http://u.zbj.com/paymentdetails/buyer?_t=1455523333965" target="_blank">详细</a>-->
            <dt><a href="#">收入：<span class="highlight">$<?php echo $user[0]['in'];?></span></a><span style="float: right">detail</span></dt>
            <dt><a href="#">支出：<span class="highlight">$<?php echo $user[0]['out'];?></span></a></dt>
        </dl>
    </div>
    <hr style="height:1px;border:none;border-top:1px solid #CCC;" />
    <div class="user_menu">
        <div class="title-sum on">
            交易管理
        </div>
        <dl class="title-detail">
            <dt><a href="<?php echo Yii::app()->createUrl('order/default/index')?>">我的订单</a></dt>
            <dt><a href="#">我的需求</a></dt>
        </dl>
    </div>
    <div class="user_menu">
        <div class="title-sum on">
            评论管理
        </div>
        <dl class="title-detail">
            <dt><a href="#">评论管理</a></dt>
        </dl>
    </div>
    <div class="user_menu">
        <div class="title-sum on">
            我的账本
        </div>
        <dl class="title-detail">
            <dt><a href="#">收支明细</a></dt>
            <dt><a href="#">充值记录</a></dt>
            <dt><a href="#">提现记录</a></dt>
        </dl>
    </div>
</div>
<script type="text/javascript">
    $(".title-sum").mousemove(function(){
//        alert("test");
        $(this).css('background-color','#CCC');
    });
    $(".title-sum").mouseleave(function(){
        $(this).css('background-color','transparent');
    });
    $(".title-sum").click(function(){
//        alert($('.title-sum').index(this));
//        alert($('.title-sum').index(this));
//        alert($('.title-detail').eq($('.title-sum').index(this)).css('display'));
        if($('.title-detail').eq($('.title-sum').index(this)).css('display')=='none') {
            $(this).removeClass('on');
//            $('.title-detail').eq($('.title-sum').index(this)).css('display','block');
            $('.title-detail').eq($('.title-sum').index(this)).toggle('1000');
        }else{
            $(this).addClass('on');
//            $('.title-detail').eq($('.title-sum').index(this)).css('display','none');
            $('.title-detail').eq($('.title-sum').index(this)).toggle('1000');
        }

//        $(this).removeClass('on');
    })
</script>