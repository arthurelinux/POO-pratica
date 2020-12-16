<?php

spl_autoload_register(function($nameClass){
var_dump($nameClass);

$dirClass ="Class";
$FileName = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";

if(file_exists($FileName)){
    include($FileName);
}

});