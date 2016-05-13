<?php //Yii::app()->clientScript->registerCssFile("http://localhost/timer/css/bootstrap.min.css"); ?>
<?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/bootstrap.min.js'); ?>
<?php //$model=$this->beginWidget('CActiveForm');?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Timer</title>
    <script type="text/javascript">
        $('.modal').on('show', function() {
            $(this).css({
                'margin-top': function () {
                    return -($(this).height() / 2);
                }
            });
        });
        function register(){
            $.ajax({
                type:'post',
                url:"<?php echo Yii::app()->createUrl('site/default/index');?>",
                data: $("#denglu").serialize(),
                success: function(res){
                    alert(res);
                    if(res==1){

                    }
                    else{

                    }
                }
            })
        }
        function login(){
            $.ajax({
                type:'post',
                url:"<?php echo Yii::app()->createUrl('user/login/login');?>",
                data:$("#denglu").serialize(),
                success:function(res){
                    alert(res);
                }
            })
        }
    </script>
</head>
<body>
    <div>
<!--container:width=>750px-->
        <div style="border: 1px solid #E2E6E7">
            <section class="container">
                Welcome!<br>Can you <a href="<?php echo Yii::app()->createUrl('user/register/register');?>">Create An Account</a> or <a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>
            <div class="pull-right">Message<span class="badge">12</span></div>
            </section>
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
                                    <button type="button" id="login_button" class="btn btn-primary" onclick="register()">Register</button>
                                    <div id="register_info"></div>
                                </div>
                            <?php $this->endWidget();?>
<!--                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <section class="container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4">
                    <h1>head/logo</h1>
                </div>
                <div class="row clearfix col-lg-6 col-md-8 col-sm-6">
                    <form class="">
                        <div class="form-group pull-right" style="margin-top: 30px">
                            <input type="text" placeholder="Search">
                            <button type="submit" class="btn btn-default">搜索</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                <nav class="nav navbar-inverse">
                    <div class="nav navbar-header"></div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="">Home</a></li>
                            <li><a href="">Part1</a></li>
                            <li><a href="">Part2</a></li>
                            <li><a href="">Part3</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div><h3>筛选条件</h3></div>
            <div style="margin-top: 10px">
                <h5>时间段:</h5>
                <ul class="list-inline">
                    <li><a href="">today</a></li>
                    <li><a href="">yesterday</a></li>
                    <li><a href="">...</a></li>
                </ul>
            </div>
            <div>
                <h5>类型:</h5>
                <ul class="list-inline">
                    <li><a href="">type1</a></li>
                    <li><a href="">type2</a></li>
                    <li><a href="">...</a></li>
                </ul>
            </div>
            <div class="" style="width: 100%;height: 500px;border: 1px solid #ff0000">
                <h2>main</h2>
                <div class="table-responsive">
                    <table class="table  table-striped table-hover table-condensed">
                        <thead>
                            <tr class="danger">
                                <th>author</th>
                                <th>date</th>
                                <th>$</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">test1</a></td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>test2</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>test3</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>test4</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>