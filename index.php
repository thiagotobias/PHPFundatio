<?php
//echo $_GET['url']."<<<";
define("CONTROLLERS","app/controllers/" );
define("VIEWS","app/views/" );
define("MODELS","app/models/" );

require_once('system/system.php');
require_once('system/controller.php');
require_once('system/model.php');

function __autoload($file){
    if(file_exists(MODELS . $file . '.php') ){
        require_once(MODELS . $file . '.php');
    }else{
        die("VIEW não encontrado!");
    }
    
}

$start = new System();
$start->run();