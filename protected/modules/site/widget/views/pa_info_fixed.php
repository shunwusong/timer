<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/20 0020
 * Time: 13:36
 */
?>
<div class="float_layer" id="float_layer">
    <div class="warp">
        <div class="fr size">
            <a href="#">
                <i class="icon-home"></i>
                Home
            </a>
            <span class="split">|</span>
                <div style="display: inline-block" id="dropdown">
                    <div style=""><a href="<?php echo Yii::app()->createUrl('user/default/index')?>">user<i class="icon-angle-down"></i></a></div>
                    <div class="user-dropdown-menu" style="">
                        <dl style="">
                            <li><a href="<?php echo Yii::app()->createUrl('user/default/needing')?>">my_needing</a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('user/default/setting')?>">setting</a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('user/logout/logout')?>">logout</a></li>
                        </dl>
                    </div>
                </div>
            <span class="split">|</span>
            test
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#dropdown").mouseover(function(){
//            $("#dropdown").style.background('black');
            $("#dropdown").css('background-color','#BEBEBE');
            $(".user-dropdown-menu").addClass('on');
        });
        $("#dropdown").mouseleave(function(){
            $(".user-dropdown-menu").removeClass('on');
            $('#dropdown').css('background-color','#f8f8f8')

        })
    })
</script>