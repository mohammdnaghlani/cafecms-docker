<?php

function get__env(string $name) : string|bool
{
    $dotEnv = file_get_contents('..' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . '.env') ;
    $dotEnv = trim($dotEnv , PHP_EOL) ;
    $dotEnv = explode( PHP_EOL , $dotEnv);
    $temp = array();
    foreach($dotEnv as $key => $item){
        list($env_key , $env_value) = explode('=' , $item);
        $temp[$env_key] = $env_value ;
    } 
    //var_dump($temp);
    return trim($temp[$name]);
}
