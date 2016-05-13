<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17 0017
 * Time: 17:40
 */
//var_dump(Yii::app()->user->getName());
//var_dump($order);
?>
<head>
    <title>My Order</title>
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/user_needing.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/order.css" rel="stylesheet">
</head>
<div class="container" style="border: 0px solid #DDD;margin-top: 10px;padding:0;background: rgba(255,255,255,.15);overflow: hidden">
    <?php $this->widget('application.modules.user.widget.needing_left');?>
    <div style="float: left;padding: 0 20px;width: 938px">
        <h4 style="font-family: '黑体';font-weight: bold;">我的订单</h4>
        <div class="order-type" style="padding-bottom: 20px">
            <span>
                类型：
                <a href="#" class="order-btn-sm choose">全部</a>
            </span>
        </div>
        <div class="order-status">
            <span>
                状态：
                <a href="#" class="order-btn-sm choose">全部</a>
                <a href="#" class="order-btn-sm">进行中</a>
            </span>
        </div>
        <div style="position:relative;min-height: 400px;width: 100%;margin-top: 20px">
            <?php if(empty($order)):?>
            <div style="margin: 50px auto;text-align: center;min-height: 400px" class="no-order">
                目前没有订单
            </div>
            <?php endif;
                if(!empty($order)):
//                    var_dump($order);
                    foreach($order as $v):
            ?>
                    <div class="order-info">
                        <table>
                            <tr>
                                <td>
                                    <?php echo $v['getter'];?>
                                </td>
                                <td>
                                    <?php echo $v[''];?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php endforeach?>
            <?php endif;?>
        </div>
    </div>
    <div class="clear"></div>
</div>