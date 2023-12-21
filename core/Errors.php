<?php

function setFormError(array $errors)
{
    if(!isset($_SESSION['errors'])){
        $_SESSION['errors'] = [] ; 
    }
    $_SESSION['errors'] = $errors ;
}

function getErrorByKey(string $key): string|bool
{
    if(isset($_SESSION['errors'][$key])){

        $error = $_SESSION['errors'][$key];

        unset($_SESSION['errors'][$key]);

        return  $error;

    }
    return false ;
}

