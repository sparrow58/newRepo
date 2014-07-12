<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
        'defaultController' => 'user/login', // to make the index page == login page

	// preloading 'log' component
	'preload'=>array('log'),
        // path aliases
        'aliases' => array(
                // yiistrap configuration
                'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
                // yiiwheels configuration
                'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
                //WebUserBehavior extenstion for the rights and user (RWebUser)
                'WebUserBehavior' => realpath(__DIR__ . '/../vendor/WUbehavior'),
        ),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
                'application.modules.user.components.*',
                'application.modules.rights.*',
                'application.modules.rights.components.*',   // Correct paths if necessary.
            
                'bootstrap.*',
                'bootstrap.helpers.*',
                'bootstrap.behaviors.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'ministry',
                'culturalAttache',
                'student',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'sats123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array('bootstrap.gii'),
		),
		'user'=>array(
                         # identifying the name of the tables that will be created in the db.
                         'tableUsers' => 'users',
                         'tableProfiles' => 'profiles',
                         'tableProfileFields' => 'profile_fields',

                         # encrypting method (php hash function)
                         'hash' => 'md5',

                         # send activation email
                         'sendActivationMail' => true,

                         # allow access for non-activated users
                         'loginNotActiv' => false,

                         # activate user on registration (only sendActivationMail = false)
                         'activeAfterRegister' => false,

                         # automatically login from registration
                         'autoLogin' => true,

                         # registration path
                         'registrationUrl' => array('/user/registration'),

                         # recovery password path
                         'recoveryUrl' => array('/user/recovery'),
                         
                         # login form path
                         'loginUrl' => array('/user/login'),

                         # page after login
                         'returnUrl' => array('/user/profile'),

                         # page after logout
                         'returnLogoutUrl' => array('/user/login'),
                ),
                
                'rights'=>array(
                         'install'=>false,      // Enables the installer.
                ),
		
	),

	// application components
	'components'=>array(
                // user configuration
		'user'=>array(
                        'class' => 'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'behaviors' => array(
                                'WebUserBehavior.WebUserBehavior'
                        ),
                        'loginUrl'=>array('/user/login'),
		),
                //rights configuration
                'authManager'=>array(
                        'class'=>'RDbAuthManager',
                        'connectionID'=>'db',
                        'defaultRoles'=>array('Authenticated', 'Guest'),
                ),
                // yiistrap configuration
                'bootstrap' => array(
                        'class' => 'bootstrap.components.TbApi',   
                ),
            
                // yiiwheels configuration
                'yiiwheels' => array(
                        'class' => 'yiiwheels.YiiWheels',
                ),
            
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
                                '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		// uncomment the following to use a SQLite database
                /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		
		// MySQL database configuration	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=tdd',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
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
?>