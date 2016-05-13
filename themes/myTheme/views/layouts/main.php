<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <!-- blueprint CSS framework -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.more.js"></script>
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/h.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/drop-icon.css" rel="stylesheet">
    <title>Timer</title>
    <script type="text/javascript">
        function register(){
            $("#login_button").html('logging');
            $.ajax({
                type:'post',
                url:"<?php echo Yii::app()->createUrl('site/default/index');?>",
                data: $("#denglu").serialize(),
                success: function(res){
                    if(res==1){
//                        $("#loginModal").attr('aria-hidden','true');
                        $("#loginModal").hide();
                        window.location.reload();
                    }
                    else{

                    }
                }
            })
        }
    </script>
</head>
<body>
    <header>
        <?php
            if(!Yii::app()->user->isguest){
                $this->widget('application.modules.site.widget.info_fixed');
            }
        ?>
        <?php $this->widget('application.modules.site.widget.Top')?>
        <?php $this->widget('application.modules.site.widget.header')?>
        <?php $this->widget('application.modules.site.widget.menu')?>
        <?php $this->widget('application.modules.site.widget.categoryMenu')?>
    </header>
    <?php echo $content?>
    <footer>
        <?php $this->widget('application.modules.site.widget.footer')?>
    </footer>
</body>
</html>
