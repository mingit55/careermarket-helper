<?php
function call($className){
    $className = str_replace("/", DS, $className);
    $classPath = APP.DS.$className.".php";
    if(is_file($classPath)){
        require $classPath;
    }
}
spl_autoload_register("call");