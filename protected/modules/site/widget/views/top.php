<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/22 0022
 * Time: 15:39
 */
//    var_dump(Yii::app()->user->isGuest);
//    var_dump(Yii::app()->user);
?>
<div>
<div class="container" style="">
    <?php if(Yii::app()->user->isGuest){ ?>
    Welcome!<br>Can you <a href="<?php echo Yii::app()->createUrl('user/register/register');?>">Create An Account</a> or <a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>
    <div class="pull-right">Message<span class="badge">12</span></div>
    <?php }else{?>
    <a href="<?php echo Yii::app()->createUrl('user/logout/logout')?>">log out</a>
    <?php }?>
</div>
</div>
<div  id="loginModal" class="modal fade" aria-labelledby="loginModalLable" aria-hidden="true" data-backdrop="static" style="margin: 0 auto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="loginModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <?php $form=$this->beginWidget('CActiveForm',array(
                    'id'=>'denglu',
//                                'enableAjaxValidation'=>true,
                    'enableAjaxValidation'=>true,
//                                'enableClientValidation'=>true,
                    'action'=>array('default/index'),
//                                'htmlOptions' => array('enctype' => 'multipart/form-data'),
//                                'focus'=>array($model,'username'),
//                                'class'=>'bs-example bs-example-form',
                ))?>
                <!--                            <form id="zhuce" class="bs-example bs-example-form" method="post"  action="--><?php //echo Yii::app()->createUrl('user/register/register');?><!--">-->
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <!--                                    <input type="text" class="form-control" name="username" placeholder="input your username">-->
                    <!--                                    --><?php //echo $form->labelEx($model,'username');?>
                    <!--                                    此处加name=‘username’将无法产生效果，-->
                    <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'input your username'));?>
                </div>
                <?php echo $form->error($model,'username')?>
                <div class="bg-danger" id="username_error"></div>
                <br>
                <?php echo $form->errorSummary($model); ?>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <!--                                    <input type="text" class="form-control" name="password" placeholder="input your passworld">-->
                    <?php echo $form->textField($model,'password',array('class'=>'form-control','placeholder'=>'input your password'));?>
                </div>
                <?php echo $form->error($model,'password');?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                    <button type="button" id="login_button" class="btn btn-primary" onclick="register()">Login</button>
                    <div id="register_info"></div>
                </div>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

        $(window).on('scroll',function() {
                var scrollHeight = $("#menu").offset().top;
                if ($(window).scrollTop() > scrollHeight) {
                    $("#float_layer").addClass('on');
                }else{
                    $("#float_layer").removeClass('on');
                }
            }
        )

</script>