<?php

function generateToken() : string
{
    $chars = 'zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP1234567890!@#$%^&*()';
    $randChar = str_shuffle( $chars );
    $token = substr($randChar  ,0 , get__env('LEN_CSRF_TOKEN')) . microtime();
    $hashToken = hash('sha256' , $token);
    return  $hashToken ;

}
function setCSRFToken() : string
{
    $getToken =  generateToken();
    if(isset($_SESSION['csrf_token']) && !empty($_SESSION['csrf_token'])){
        return $_SESSION['csrf_token'] ;
    }
    $_SESSION['csrf_token'] = $getToken ;
    return $getToken ;
}
function CSRFInput() : string
{
    $getToken = setCSRFToken() ;
    $temp = '<input type="hidden" name="csrf_token" value="'. $getToken .'">' ;
    return $temp ;
}

/**
 * [checkCSRF this function use in Router.php]
 *
 * @param   array  $params  
 *
 * @return  bool           
 */
function checkCSRF(array $params) : bool
{
    if(!isset($_SESSION['csrf_token'])){
        $_SESSION['csrf_token'] = '' ;
    }
    if(!isset($params['csrf_token']) ||$params['csrf_token'] !== $_SESSION['csrf_token'] ){
        header('HTTP/1.0 419 Expierd Page');
        throw new Exception('Expierd Page 419');
    }
    return true ;

}
