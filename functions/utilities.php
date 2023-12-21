<?php

function setErrors(array $arr)
{
    setOldData($arr['params']);
    setFormError($arr['errors']);
    setFlashMessage($arr['message']['type'] , $arr['message']['key']) ;
    header('location:' .$arr['url'] );
    exit();
}

function redirect(string $url = null )
{
    ob_start() ;
    $location = null ;
    if(is_null($url)){
        $location = $_SERVER['HTTP_REFERER'] ; 
    }else{
        $location = get__env('BASE_URI') . $url ; 
    }
    header('location:' .$location );
    exit() ;
    echo ob_get_clean() ;
}