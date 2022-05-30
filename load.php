<?php
ob_start();
session_start();

define('AUTENTICATION',[
    'email' => 'admin@admin.com',
    'senha' => 'admin'
]);

define('DS',DIRECTORY_SEPARATOR);
define('PATH',__DIR__);

$dirAutoloading = [
    'helpers'
];

foreach($dirAutoloading as $folders){
    $pathDir = PATH.DS.$folders;
    if(is_dir($pathDir)){
        $dir = dir($pathDir);
        while( ($files = $dir->read()) !== false ){
            if($files != '..' && $files != '.'  ){
                $informationFiles = pathinfo($files);
                if($informationFiles['extension'] == 'php'){
                    require_once($pathDir.DS.$files); 
                }
            }
        }
    }
}

