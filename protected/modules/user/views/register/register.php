<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21 0021
 * Time: 11:01
 */
//    echo "test";
?>
<html>
<head>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <h2 style="width:100%;border: 1px solid #EEEEEE">logo/img</h2>
    </div>
    <div class="container">
        <div style="width: 60%;border: 1px solid #EEEEEE;padding: 10px">
            <?php $form=$this->beginWidget('CActiveForm',array(
                'id'=>'zhuce',
                'enableAjaxValidation'=>true,
//                'class'=>'form-horizontal'
//            添加页面HTML属性
                'htmlOptions'=>array('class'=>'form-horizontal'),
            ));
            ?>
<!--            <form role="form" class="form-horizontal">-->
                <div class="form-group">
<!--                    --><?php //echo $form->labelEx($model,'username',array('class'=>'control-label col-md-2'));?>
                    <label for="username" class="control-label col-md-2">username</label>
                    <div class="col-md-8">
<!--                        <input class='form-control' type="text" placeholder="input your username">-->
                        <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'input your username'));?>
                        <?php echo $form->error($model,'username');?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-md-2">password</label>
                    <div class="col-md-8">
                        <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'input your password'));?>
                        <?php echo $form->error($model,'password');?>
<!--                        <input class="form-control" type="text" placeholder="input your password here">-->
                    </div>
                </div>
            <div class="form-group">
                <label for="RePassword" class="control-label col-md-2">password</label>
                <div class="col-md-8">
                    <?php echo $form->passwordField($model,'rePassword',array('class'=>'form-control','placeholder'=>'input your password again'));?>
                    <!--                        <input class="form-control" type="text" placeholder="input your password here">-->
                    <?php echo $form->error($model,'rePassword');?>
                </div>
            </div>
            <div class="form-group">
                <label for="verifyCode" class="control-label col-md-2">verifyCode</label>
                <div class="col-md-4">
                    <?php echo $form->textField($model,'verifyCode',array('class'=>'form-control','placeholder'=>'verifyCode'))?>
                    <?php echo $form->error($model,'verifyCode');?>
                </div>
                <div class="col-md-6">
                    <?php $this->widget('CCaptcha');?>
                </div>
            </div>
<!--            </form>-->
            <div class="" style="clear: both"></div>
            <div class="">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</body>
</html>