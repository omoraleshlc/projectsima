<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('editable', dirname(__FILE__).'/../extensions/x-editable');

return array(
	'theme'=>'bootstrap',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SISTEMA INTEGRAL MEDICO ADVENTISTA',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.*',
		'application.models.*',
		'application.components.*',
		'application.modules.cruge.*',
		'application.modules.cruge.components.*',	//cruge es un modulo para crear y administrar usuarios, roles y permisos
		'application.modules.cruge.extensions.crugemailer.*',
		'editable.*',	
		
		/*MODULOS PROPIOS inicia*/
		'application.modules.Compras.*',
		'application.modules.Compras.models.*',
		'application.modules.Configuracion.*',
		'application.modules.Configuracion.models.*',
		'application.modules.Configuracion.modules.Configuracion.*',
		'application.modules.Configuracion.modules.Configuracion.models.*',
		'application.modules.ServiciosInstitucionales.*',
		'application.modules.ServiciosInstitucionales.models.*',
		'application.modules.ServiciosInstitucionales.modules.Sistemas.*',
		'application.modules.ServiciosInstitucionales.modules.Sistemas.models.*',
		'application.modules.ServiciosInstitucionales.modules.Sistemas.controllers.*',
		/*MODULOS PROPIOS termina*/
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'cacaquita',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		/**/ 		
            		
            		
            		
		'cruge'=>array(
			'tableprefix'=>'cruge_',

			// para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
			//
			// en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
			// para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
			//
			'availableAuthMethods'=>array('default'),

			'availableAuthModes'=>array('username','email'),

			// url base para los links de activacion de cuenta de usuario
			'baseUrl'=>'http://coco.com/',

			// NO OLVIDES PONER EN FALSE TRAS INSTALAR
			'debug'=>false,
			'rbacSetupEnabled'=>false,
			'allowUserAlways'=>false,

			// MIENTRAS INSTALAS..PONLO EN: false
			// lee mas abajo respecto a 'Encriptando las claves'
			//
			'useEncryptedPassword' => true,

			// Algoritmo de la función hash que deseas usar
			// Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
			'hash' => 'md5',

			// Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
			// hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
			//  lee en la wiki acerca de:
						           //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
						           //
			// ejemplo:
			//		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
			//		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
			//
			'afterLoginUrl'=>null,
			'afterLogoutUrl'=>null,
			'afterSessionExpiredUrl'=>null,

			// manejo del layout con cruge.
			//
			/*'loginLayout'=>'//layouts/column2',
			'registrationLayout'=>'//layouts/column2',
			'activateAccountLayout'=>'//layouts/column2',
			'editProfileLayout'=>'//layouts/column2',*/
			'loginLayout'=>'//layouts/login',
			'registrationLayout'=>'//layouts/column2',
			'activateAccountLayout'=>'//layouts/column2',
			'editProfileLayout'=>'//layouts/column2',
			
			
			// en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
			// de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
			// requerirá de un portlet para desplegar un menu con las opciones de administrador.
			//
			'generalUserManagementLayout'=>'ui',

			// permite indicar un array con los nombres de campos personalizados, 
			// incluyendo username y/o email para personalizar la respuesta de una consulta a: 
			// $usuario->getUserDescription(); 
			'userDescriptionFieldsArray'=>array('email'), 

		),
		
		/*MODULOS PROPIOS inicia*/
		'Compras',
		'Configuracion',
		'Configuracion.Configuracion',
		'ServiciosInstitucionales',
		'ServiciosInstitucionales.Sistemas',
		/*MODULOS PROPIOS termina*/
		
	),//end modules

	// application components
	'components'=>array(
			//  IMPORTANTE:  asegurate de que la entrada 'user' (y format) que por defecto trae Yii
			//               sea sustituida por estas a continuación:
			//
			'user'=>array(
				'allowAutoLogin'=>true,
				'class' => 'application.modules.cruge.components.CrugeWebUser',
				'loginUrl' => array('/cruge/ui/login'),
			),
			'authManager' => array(
				'class' => 'application.modules.cruge.components.CrugeAuthManager',
			),
			'crugemailer'=>array(
				'class' => 'application.modules.cruge.components.CrugeMailer',
				'mailfrom' => 'email-desde-donde-quieres-enviar-los-mensajes@xxxx.com',
				'subjectprefix' => 'Tu Encabezado del asunto - ',
				'debug' => true,
			),
			'format' => array(
				'datetimeFormat'=>"d M, Y h:m:s a",
			),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		
		//X-editable config
        'editable' => array(
            'class'     => 'editable.EditableConfig',
            'form'      => 'bootstrap',        //form style: 'bootstrap', 'jqueryui', 'plain' 
            'mode'      => 'inline',            //mode: 'popup' or 'inline'  
            'defaults'  => array(              //default settings for all editable elements
               'emptytext' => 'Clic para editar'
            )
        ),
        
                
		
		







		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sima',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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
				 	'levels'=>'trace',
			    		'categories'=>'vardump',
				    	'showInFireBug'=>true
				),
				*/
			),
		),
		'bootstrap'=>array(
   		//'class'=>'application.extensions.bootstrap.components.Bootstrap',
			'class'=>'bootstrap.components.Bootstrap',
 		),
       		
       		
       		/*'authManager'=>array(
	     			'class'=>'CDbAuthManager',
	     			'connectionID'=>'db',
	     			/* comentadas pk tienen los nombres por default
	     			'itemTable'=>'AuthItem', // Tabla que contiene los elementos de autorizacion
					'itemChildTable'=>'AuthItemChild', // Tabla que contiene los elementos padre-hijo
					'assignmentTable'=>'	', // Tabla que contiene la signacion usuario-autorizacion
					/
    			),*/
	),
	
	'controllerMap' => array(
        // ...
        'barcodegenerator' => array(
            'class' => 'ext.barcodegenerator.BarcodeGeneratorController',
        ),
    ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'omorales@lacarlota.um.edu.mx',
	),
    'sourceLanguage'=>'es',
    'language'=>'es',
    
    
);
