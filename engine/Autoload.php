<?php
class Autoload 
{
    function loadClass($className){
        $find = array("app\\", "\\");
        $replace = array("../", "/");
        $className = str_replace($find, $replace, $className) . ".php";
        
        // var_dump($className);
        if(file_exists($className)){
            include $className;
        
        }
    }
}

