<?php
//Yii::beginProfile('all');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Darul Ilmi',
	'defaultController' => 'site',

	// preloading 'log' component
	'preload'=>array(
        'log',
		//	'chartjs'
    //'bootstrap', // preload the bootstrap component
     ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
'aliases'=>array(
    'bootstrap'=>'ext.bootstrap',
		//'chartjs'=>'ext.yii-chartjs'
    ),
	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
           'generatorPaths'=>array(
              'bootstrap.gii', // since 0.9.1
            ),
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
	'cache'=>array('class'=>'system.caching.CDbCache',),
	//'cache'=>array('class'=>'system.caching.CMemCache','servers'=>array(array('host'=>'localhost', 'port'=>11211),),),
	
	'cache2'=>array(
			'class'=>'system.caching.CFileCache',
	),
	
		'bootstrap' => array(
			'class' => 'ext.bootstrap.components.Bootstrap',
			'responsiveCss' => true,
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

        /*by default we don't use the  extension,we use the original bootstrap js and css files,(with less).
         'bootstrap'=>array(
        'class'=>'ext.bootstrap.components.Bootstrap',
                ),*/
    
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
		'class' => 'UrlManager',
			'urlFormat'=>'path',
            'showScriptName'=>false,
            'urlSuffix'=>'.html',
//             'useStrictParsing'=>true,
// 			'appendParams'=>false,
			'rules'=>array(
// 			'<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
 			'<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>' => '<controller>/<action>',
 			'<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>/<s:[\w\-]+>' => '<controller>/<action>',
 			'<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>/<s:\d+>' => '<controller>/<action>',
 			'<controller:\w+>/<action:\w+>/<id:\d+>/<s:\d+>'=>'<controller>/<action>',
		    '<controller:\w+>/<action:\w+>/<id:\d+>/<s:\w+>'=>'<controller>/<action>',
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                 //'<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>' => '<controller>/<action>',    
				//'<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
				//'<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>/<s:\w+>' => '<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db' => array (
						'connectionString' => 'mysql:host=localhost;dbname=web7',
						// 'schemaCachingDuration' => 3600,
						'emulatePrepare' => true,
						'username' => 'root',
						'password' => '',
						'charset' => 'utf8' 
				),
		
// 		'db'=>array(
// 				'class'=>'CDbConnection',
// 				'emulatePrepare' => false,
// 				'connectionString'=>'oci:dbname=localhost:1521/XE;charset=UTF8',
// 				'username'=>'sa',
// 				'password'=>'sa',
// 		),


		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					 'logFile'=>'trace.log', // saya simpan di file trace.log di protected/runtime
                     'class' => 'CFileLogRoute', // berupa file
                     'levels' => 'trace', // dengan level trace
                     'categories'=>'my.*', // katagori berawalan my.
				
				),
				array(
						'class'=>'CProfileLogRoute',
						'report'=>'summary',
				),
				// uncomment the following to show log messages on web pages
				
// 				array(
// 					'class'=>'CWebLogRoute',
// 				),
				
			),
		),
        'clientScript'=>array(
        'class' => 'CClientScript',
                'scriptMap' => array(
                        'jquery.js'=>false,
                    'jquery.min.js'=>false
                ),
        'coreScriptPosition' => CClientScript::POS_END,
),


	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'ort0bt@gmail.com',
	),
);