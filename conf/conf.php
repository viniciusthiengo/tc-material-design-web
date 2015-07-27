<?php
	// PATH
        /*if( @fopen('CtrlCar.php', 'r') ){
            define('__PATH__', '../../');
        }
        else{
            define('__PATH__', './');
        }*/


        define('__PATH_FULL_URL__', 'http://192.168.25.221:8888/TCMaterialDesign/');
        //define('__PATH_FULL_URL__', 'http://YourComputerIp:8888/TCMaterialDesign/');

    // DATABASE
        $settingsDatabase = [
            'type'=>'mysql',
            'host'=>'localhost',
            'port'=>'3306',
            'name'=>'tc_cars',
            'username'=>'root',
            'password'=>'root',
            'charset'=>'utf8'
        ];
