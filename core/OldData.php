<?php

function setOldData(array $data)
{
    if(!isset($_SESSION['old_data'])){
        $_SESSION['old_data'] = [] ; 
    }
    $_SESSION['old_data'] = $data ;
}

function getOldData(string $key) : string|bool
{
    if(isset($_SESSION['old_data'][$key])){
        $getData = $_SESSION['old_data'][$key];
        unset($_SESSION['old_data'][$key]);
        return $getData ;
    }
    return false ;
}