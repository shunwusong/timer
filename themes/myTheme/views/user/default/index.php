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
                    <span class="number">84</span>
                    雇佣
                </div>
                <div style="float: left;width: 33%">
                    <span class="number">95</span>
                    被雇佣
                </div>
                <div style="float: left;width: 33%">
                    <span class="number">71%</span>
                    好评率
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="record">
        <div class="center" style="font-size: 22px;font-weight: bold">record</div>
        <div class="needing">
            发布的需求
        </div>
        <div class="needing">
            提供的服务
        </div>
    </div>
</div>