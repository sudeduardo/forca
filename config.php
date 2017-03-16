<?php

function __autoload($class){
    if(file_exists('Controller/'.$class.".php")){
        include "Controller/".$class.".php";
    }
    if(file_exists('Model/'.$class.".php")){
        include "Model/".$class.".php";
    
        
    }
    
}
