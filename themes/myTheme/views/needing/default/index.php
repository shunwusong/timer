<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/30 0030
 * Time: 14:45
 */
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    .needing_request{
        margin-top: 12px;
        font-size: 14px;
    }
    .needing_content span{
        font-weight: bold;
    }
    .book-button{
        width: 80%;
        margin: 10px auto 0 auto;
        padding: 0 4px;
        display: inline-block;
        line-height: 40px;
        color: #333;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        border-color: #ea7f00;
        font-size: 14px;
        background-color: #ff9400;
    }
    .booked{
        width: 80%;
        margin: 10px auto 0 auto;
        padding: 0 4px;
        display: inline-block;
        line-height: 40px;
        color: #333;
        text-align: center;
        vertical-align: middle;
        /*cursor: pointer;*/
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        border-color: #ea7f00;
        font-size: 14px;
        background-color: #EEEEEE;
    }
    .center {
        display: table;
        margin-left: auto;
        margin-right: auto;
    }
    .needing-info{
        width: 80%;
    }
    .info{
        color: #c0c0c0;
        float: left;
    }
    .needing_title{
        /*background-color: #FAFAFA;*/
        margin-bottom: 20px;
    }
    .ques-form{
        width:910px;float: left;background-color: white;padding: 0 15px 0 15px;margin: 0 4px 4px 0;position: relative;
    }
    .needing-status{
        width:910px;float: left;background-color: white;min-height: 450px;padding: 0 15px 0 15px;margin: 0 4px 4px 0;
    }
    .questions{
        /*font-size: 14px;*/
        /*font-weight: bold;*/
    }
    .que-info{
        font-size: 14px;
        font-weight: bold;
        float: left;
    }
    .que-time{
        font-size: 12px;
        color: #c0c0c0;
        float: right;
    }
    .answer{
        margin-left: 40px;
    }
    .que-box{
        position: relative;
        /*bottom: 20px;*/
        margin: 20px;
        width: 100%;
    }
    .que-button{
        width: 80px;
        margin: 10px auto 0 auto;
        padding: 0 4px;
        line-height: 40px;
        color: #333;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        border-color: #ea7f00;
        font-size: 14px;
        background-color: #EEEEEE;
    }
    .collect{
        float: right;
    }
    a{
        /*text-underline: none;*/
    }
</style>
<div class="container" style="margin-top: 20px;position: relative">
    <div style="width:910px;float: left;background-color: white;min-height: 450px;padding: 0 15px 0 15px;margin: 0 4px 4px 0" class="needing_content">
        <div class="needing_title">
            <h1>test</h1>
            <div class="info">
                <a href="<?php echo Yii::app()->createUrl('user/default/index/user/1');?>"><?php echo $needing['push_user'];?></a>于<?php echo date('Y-m-d H:i:s',$needing['create_time'])?>发布. 共<?php echo $needing['view_count']?>人浏览.
            </div>
            <div class="collect">
                <a href="">我要收藏</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="needing_request">
            <span>他的要求：</span><br>
            no
        </div>
        <div class="needing_time">
            <span>需要的时间：</span><br>
            no
        </div>
        <div class="needing_detail">
            <span>具体需求：</span><br>
            <?php echo $needing['detail']?>
        </div>
    </div>
    <div class="user_info" style="width: 225px;background-color: white;min-height: 450px;position: fixed;padding-top: 20px">
        <div class="needing-info center">
            1人参与<br>
            <?php echo $collect_num;?>人收藏<br>
            截止时间：2016-05-09 13:21<br>
            金额：￥2.45
        </div>
        <?php if(time()>$needing['end_time']):?>
            <div class="booked center">
                该需求已过期
            </div>
            <?php else:?>
            <?php if($needing_tuoguan):?>
                <div class="booked center">
                    该需求已托管
                </div>
                <?php else:?>
        <?php if(!$needing_got&&($needing['push_user']!=Yii::app()->user->name)):?>
        <div class="book-button center" id="get-btn">
            <a href="javascript:needingGet(<?php echo $needing['id'];?>)">GET</a>
        </div>
        <?php else:?>
            <div class="booked center">
                    已参与该需求
                </div>
                <?php endif?>
        <?php endif;?>
        <?php endif;?>
        <div class="get-status"></div>
<!--        <div class="book-button center">-->
<!--            <a href="">收藏</a>-->
<!--        </div>-->
        <div class="book-button center">
            <a href="">联系雇主</a>
        </div>
    </div>
    <div class="needing-status">
        <div class="center">
            <h1>订单状态追踪</h1>
        </div>
        <div class="status">
            <div class="que-info">
                <a href="">test</a>参与竞价
            </div>
            <div class="que-time">
                2016-05-09
            </div>
        </div>
    </div>
    <div class="ques-form">
        <div class="center">
            <h1>question&answer</h1>
        </div>
        <div class="">
            <div class="questions">
                <div class="que-info"><a href="">test_user</a>:questions test?</div>
                <div class="que-time">2016-05-09 10:08</div>
            </div>
            <div class="clearfix"></div>
            <div class="answer">
                <div class="que-info"><a href="">test</a>:answer test</div>
                <div class="que-time">2016-05-09 10:09</div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="que-box">
<!--            <form>-->
<!--                <textarea></textarea>-->
<!--            </form>-->
            <div class="center que-button">
                <a href="">我要提问</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var width=$(".needing_content").offset().left;
    $(".user_info").css('left',width+912+'px');
    window.console.log(width);
    function needingGet(needing_id){
        $.ajax({
            type:'GET',
            url:"<?php echo Yii::app()->createUrl('needing/default/get')?>/needing_id/"+needing_id,
            success:function(res){
                res=eval('('+res+')');
                window.console.log(res);
                if(res.status==true){
                    $("#get-btn").css('background-color','#EEE');
                    $("#get-btn").css('cursor','default');
                    $("#get-btn").html("参与成功");

                }
            }
        })
    }
</script>