<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/24 0024
 * Time: 13:22
 */
?>
loginPage
<!--<a href="--><?php //echo Yii::app()->createUrl('user/login/login');?><!--">login_test</a>-->
<form action="<?php Yii::app()->createUrl('user/login/login');?>" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="sub">
</form>