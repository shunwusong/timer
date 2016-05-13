<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 15:56
 */
?>
<div  style="width: 100%" id="menu">
    <nav class="nav navbar-inverse">
        <div class="nav navbar-header"></div>
        <div class="container">
            <ul class="nav navbar-nav">

                <?php
                    $categoryArr=array();
                    foreach($info as $k=>$v){
                        if($v['p_id']!=0){
                            array_push($categoryArr,$v['p_id']);
                        }
                    }
                    foreach($info as $k=>$v) {
                        if ($v['p_id'] == 0) {
                            if (!in_array($v['id'], $categoryArr)) {
                    ?>
                    <li><a href="<?php echo Yii::app()->createUrl($v['url']);?>"><?php echo $v['name'] ?></a></li>
                <?php
                            }
                            else {
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $v['name'] ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                    <?php
                                foreach ($info as $child_k => $child_v) {
                                    if ($child_v['p_id'] == $v['id']) {
                            ?>
                            <li><a href="<?php echo Yii::app()->createUrl($child_v['url'])?>"><?php echo $child_v['name'] ?></a></li>
                        <?php
                                    }
                                    else{

                                    }
                                }
                    ?>
                    </ul>
                </li>
                            <?php
                            }
                        }}

                    ?>
<!--                <li class="active"><a href="--><?php //echo Yii::app()->createUrl('site/default/index')?><!--">Home</a></li>-->
<!--                <li><a href="--><?php //echo Yii::app()->createUrl('needing/default/push') ?><!--">Fabu</a></li>-->
<!--                <li><a href="">Part2</a></li>-->
<!--                <li><a href="">Part3</a></li>-->
<!--                <li class="dropdown">-->
<!--                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--                        Java <span class="caret"></span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="#">Swing</a></li>-->
<!--                        <li><a href="#">jMeter</a></li>-->
<!--                        <li><a href="#">EJB</a></li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li><a href="#">分离的链接</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div>
    </nav>
</div>