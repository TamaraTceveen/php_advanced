<?php

namespace app\engine;

class Autoload 
{
    function loadClass($className){
        $find = array("app\\", "\\");
        $replace = array(ROOT . DS, DS);
        $className = str_replace($find, $replace, $className) . ".php";
        
        // var_dump($className);
        if(file_exists($className)){
            include $className;
        
        }
    }
}

