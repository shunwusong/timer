<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/23 0023
 * Time: 15:23
 */
?>
<head>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/jquery-ui.css" />
</head>
<div class="container" style="margin: 0 auto;">
    <div style="width: 60%;border: 1px solid #EEEEEE;padding: 10px">
        <?php $form=$this->beginWidget('CActiveForm',array(
            'id'=>'needing_push',
            'enableAjaxValidation'=>false,
//                'class'=>'form-horizontal'
//            添加页面HTML属性
            'htmlOptions'=>array('class'=>'form-horizontal'),
        ));
        ?>
        <!--            <form role="form" class="form-horizontal">-->
        <div class="form-group">
            <!--                    --><?php //echo $form->labelEx($model,'username',array('class'=>'control-label col-md-2'));?>
            <label for="subject" class="control-label col-md-2">subject</label>
            <div class="col-md-8">
                <!--                        <input class='form-control' type="text" placeholder="input your username">-->
                <?php echo $form->textField($model,'subject',array('class'=>'form-control','placeholder'=>'input your subject'));?>
                <?php echo $form->error($model,'subject');?>
            </div>
        </div>

        <div class="form-group">
            <label for="detail" class="control-label col-md-2">detail</label>
            <div class="col-md-8">
<!--                --><?php //echo $form->passwordField($model,'detail',array('class'=>'form-control','placeholder'=>'input your password'));?>
<!--                --><?php //echo $form->error($model,'detail');?>
                <textarea  class="col-md-12" rows="4" name="detail"></textarea>
                <!--                        <input class="form-control" type="text" placeholder="input your password here">-->
            </div>
        </div>
        <div class="form-group">
            <label for="start_time" class="control-label col-md-2">start_time</label>
            <div class="col-md-8">
                <?php echo $form->textField($model,'start_time',array('class'=>'form-control start','placeholder'=>'choose a start_time','readonly'=>'readonly'));?>
                <!--                        <input class="form-control" type="text" placeholder="input your password here">-->
                <?php echo $form->error($model,'start_time');?>
            </div>
        </div>
        <div class="form-group">
            <label for="end_time" class="control-label col-md-2">end_time</label>
            <div class="col-md-8">
                <?php echo $form->textField($model,'end_time',array('class'=>'form-control end','placeholder'=>'choose a end_time','readonly'=>'readonly'))?>
                <?php echo $form->error($model,'end_time');?>
            </div>
        </div>
        <div class="form-group">
            <label for="payment" class="control-label col-md-2">payment</label>
            <div class="col-md-8">
                <?php echo $form->textField($model,'payment',array('class'=>'form-control','placeholder'=>'money you will pay','value'=>''))?>
                <?php echo $form->error($model,'payment');?>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
    $('.end').datetimepicker({
        showSecond: false,
        showMillisec: false
    });
    $('.start').datetimepicker({
        showSecond: false,
        showMillisec: false
    });
</script>