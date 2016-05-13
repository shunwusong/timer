<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/15 0015
 * Time: 10:29
 */
//var_dump($user);
//echo $user[0]['img'];
ini_set('post_max_size', '12M');
?>
<head>
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/user_needing.css" rel="stylesheet">
    <title>My Needing</title>
</head>
<div class="container" style="border: 0px solid #DDD;margin-top: 10px;padding:0;background: rgba(255,255,255,.15);overflow: hidden">
    <?php $this->widget('application.modules.user.widget.needing_left');?>
    <div class="main"  style="border: 1px solid #DDD;overflow: hidden">
        <div style="min-height: 1200px;overflow: hidden;width: 938px">
            <div>
                <div class="main-left" style="min-height:550px;float: left;padding: 20px">
                    <a href="#" style="float: right">查看全部订单</a>
                    我的订单
                    <span>
                        <a href="#">进行中(0)</a>
                        <a href="#">待付款(0)</a>
                        <a href="#">待评价(0)</a>
                    </span>
                    <div class="deal-empty">
<!--                        --><?php //if()?>
                        <h4 style="margin-bottom: 40px;color: #999">
                            没有交易
                        </h4>
                        <div class="deal-inner">
                            <p style="color: #999;font-size: 14px">支配你的时间</p>
                            <div style="background-color: #ff9400;border-color: #ea7f00;font-size: 17.5px" class="ui-btn">
                                发布新的需求
                            </div>
                        </div>
                    </div>
<!--                    <span>进行中</span>-->
<!--                    <span>待付款</span>-->
                </div>
                <div style="float: right;width: 452px;min-height: 550px;padding: 20px;position: relative">
                    <div style="background-color: #F4F9FD;min-height: 400px;position: relative;overflow: hidden;padding-left: 15px;padding-right: 15px">
                        <div class="money" style="background-color: white;margin: 20px auto;left:auto;position: relative;padding: 10px 15px">
                            <table style="width: 100%">
                                <tbody style="vertical-align: middle;width: 100%">
                                <tr>
                                    <td>收入</td>
                                    <td>支出</td>
                                    <td style="border-right: none">余额</td>
                                </tr>
                                <tr>
                                    <td>$0.00</td>
                                    <td>$0.00</td>
                                    <td style="border-right: none">$0.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            <a href="#">查看收支明细</a>
                            <a href="#" class="ui-btn-sm" style="float: right;color:black;margin-left: 3px">充值</a>
                            <a href="#" class="ui-btn-sm" style="float: right;color:black">提现</a>
                        </div>
                    </div>
                </div>
            </div>
<!--            user_index-->
        </div>
    </div>
</div>
