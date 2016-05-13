<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'language'=>'zh_cn',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),
    'theme' => 'myTheme',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.needing.models.*',
        'application.modules.srbac.controllers.SBaseController',
        'application.modules.site.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123a123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
        'srbac'=>array(
            'userclass'=>'user',//default: User      对应用户的model
            'userid'=>'id',//default: userid     用户表标识位对应字段
            'username'=>'username',//default:username  用户表中用户名对应字段

            'delimeter'=>'@',//default:-      item分隔符

            'debug'=>true,//default :false           调试模式，true则所有用户均开放，可以随意修改权限控制

            'pageSize'=>10,// default : 15
            'superUser'=>'a', //default: Authorizer    超级管理员，这个账号可以不受权限控制的管理，对所有页面均有访问权限
            'css'=>'srbac.css',//default: srbac.css        样式文件
            'layout'=>'application.views.layouts.main',//default: application.views.layouts.main,must be an existing alias
            'notAuthorizedView'=>'srbac.views.authitem.unauthorized',// default:srbac.views.authitem.unauthorized, must be an existing alias

            'alwaysAllowed'=>array(//default: array()  总是允许访问的动作
                'gui','SiteLogin','SiteLogout','SiteWelcome','SiteIndex'
            ),
            'userActions'=>array(
                'Show','View','List'
            ),//default: array()
            'listBoxNumberOfLines'=>15,//default : 10
            'imagesPath'=>'srbac.images',// default: srbac.images
            'imagesPack'=>'noia',//default: noia
            'iconText'=>true, // default : false
            'header'=>'srbac.views.authitem.header',//default : srbac.views.authitem.header,must be an existing alias
            'footer'=>'srbac.views.authitem.footer',//default: srbac.views.authitem.footer,must be an existing alias
            'showHeader'=>true,// default: false
            'showFooter'=>true,// default: false
            'alwaysAllowedPath'=>'srbac.components',// default: srbac.components,must be an existing alias
        ),
        'order',
        'site',
        'user',
        'needing',
        'errorHandler'=>array(
            'errorAction'=>'error/index',
        ),
        //authbooster
        'auth'=>array(
            'userClass'=>'User',
            'userIdColumn'=>'id',//id列
            'userNameColumn'=>'username'//username列
        )
	),

	// application components
    'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl'=>array('user/login/login'),
            'class'=>'auth.components.AuthWebUser',
            'admins'=>array('a')
		),

        //权限设置
        'authManager'=>array(
            // Path to SDbAuthManager in srbac module if you want to use case insensitive
            //access checking (or CDbAuthManager for case sensitive access checking)
            'class'=>'srbac.components.SDbAuthManager',// Manager 的类型
            'connectionID'=>'db',// The database component used
            'itemTable'=>'authitem',// The itemTable name (default:authitem)       授权项表
            'assignmentTable'=>'authassignment',// The assignmentTable name (default:authassignment)    权限分配表
            'itemChildTable'=>'authitemchild',// The itemChildTable name (default:authitemchild)     任务对应权限表
        ),

        // uncomment the following to enable URLs in path-format

        'urlManager'=>array(
//            'showScriptName'=>false,
            'urlFormat' => 'path',
            'showScriptName' => true,
            'rules'=>array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
            ),
        ),
		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
//			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
//                    'class' => 'CWebLogRoute',
                    'levels'=>'notice, error, warning',
				),
				// uncomment the following to show log messages on web pages

//				array(
//					'class'=>'CWebLogRoute',
//				),
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
