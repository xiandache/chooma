<?php

  
  $config = array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',                    
                    //  'runtimePath' => Yii::getPathOfAlias('system') . '/../zzyysystemp/tmp/',
                    
//	'name'=>'Open Real Estate PRO',
                    'name'=>'www.gopropertypage.com',
                    'id'=>'www.gopropertypage.com',
	'sourceLanguage' => 'en',
	'language' => 'en',
//               'homeUrl' => 'site/index/?ls=block',
	'theme' => 'classic',
                   'timeZone' => 'Asia/Kuala_Lumpur',       //for safety incase we have no control on php.ini param setting on hosting server... 

	'preload'=>array(
		'log',
		'configuration', // preload configuration
	),
                
	'components'=>array(
         		'loid' => array(
			'class' => 'application.extensions.lightopenid.loid',
		),
		'eauth' => array(
			// yii-eauth-1.1.8
			'class' => 'ext.eauth.EAuth',
			'popup' => true, // Use popup windows instead of redirect to site of provider
		),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'configuration' => array(
			'class' => 'Configuration',
			'cachingTime' => 0, // caching configuration for 180 days
		),

		'cache'=>array(
			'class'=>'system.caching.CFileCache',
			/*'class'=>'system.caching.CMemCache',
			//'useMemcached' => true,
			'servers'=>array(
				array('host'=>'127.0.0.1', 'port'=>11211),
			),*/
		),

		'request'=>array(
			'class' => 'application.components.CustomHttpRequest',
			'enableCsrfValidation' => true,
                    //http://www.yiiframework.com/doc/guide/1.1/en/topics.security
                    //ookies that are directly read/sent via $_COOKIE and setcookie() will NOT be validated.
                                                          'enableCookieValidation'=>true,
                                                          
                    
                                                         'noCsrfValidationRoutes' => array(
                // Defined Payment Gateway which  "The CSRF token could not be verified."
                                                          '^payment/main/paypalreturn.*$',                   //paypal Return IPN
                                                          '^payment/main/paypalcancel.*$',                  //paypal Cancel
                                                          '^payment/main/paypalresult.*$',                   //paypal Result                                                          
                                                          '^payment/main/zzyymolpayretipn.*$',
                                                          '^payment/main/zzyymolpaynofipn.*$',     
                                                          '^payment/main/zzyymolpaycbkipn.*$',                                                             
                                                        ),
		),

		
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
                                                                'routes'=>array(

                                                                array(
                                                                'class'=>'CFileLogRoute',
                                                                                    //  'levels'=>'error, warning, info, trace, vardump',
                                                                                    'levels'=>'error',
                                                                                    'logFile'=>'ZZYYGPP_ERROR.log',
                                                                        ),
                                                                ),
		),
        
		'messages'=>array(
			'class'=>'DbMessageSource',
			'forceTranslation'=>true,                   
                                                          'onMissingTranslation' => array('CustomEventHandler', 'handleMissingTranslation'),   //zzyybomb make sure turn it off  in production
		),

		'messagesInFile'=>array(
			'class'=>'CPhpMessageSource',
			'forceTranslation'=>true,
		),

		'bootstrap'=>array(
			'class'=>'bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		),


	),
                   
	
);

  
  $result = recursive($config);
  echo 'Key = '. $data[1]['key'] . '  Value = ' .$data[1]['value'] .'<br>';   
  echo "<br><br>";
  //var_dump($data);
  echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br><br>";
  $zzz = array_column($data, 'value');
  var_dump($zzz);
  
  
  $i=0;
    foreach($data as $key => $value){
        $i++;
                echo 'Row = '. $i ;
     foreach($value as $k => $v){            
              echo ' Value = ' .$v;              
    }
    echo '<br>';   
    }
          
    //$zdata=array('A','1','3','0','C','+');
    asort($data);
    array_multisort(array_column($data, 'key'),  SORT_DESC,
                
                $data);
    var_dump($data);
              
  for ($r=0; $r<count($data);$r++) {
      
               echo 'Key = '. $data[$r]['key'] . ',  Value = ' .$data[$r]['value'] .'<br>';   
                //echo 'Key = '. $zdata[$r].'<br>';   
  
  
      }
  
  function recursive($array, $level = 1){
      
   global $data;
   
   static $i=0;
    foreach($array as $key => $value){
        //If $value is an array.
        if(is_array($value)){
            //We need to loop through it.
            recursive($value, $level + 1);
        } else{
            //It is not an array, so print it out.
            echo $key . ": " . $value, '<br>';
            $data[$i]['key'] = $key;
            $data[$i]['value'] = $value;
            $i++;
        }
    }
        
        

    
}