<?php

function isLogin() : bool
{
    if(isset($_SESSION['login']) && $_SESSION['login']['status'] === true){
        return true ;
    }
    return false ;
}