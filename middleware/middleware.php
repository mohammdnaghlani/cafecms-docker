<?php

function mLogin()
{
    if($_SESSION['login']['status'] === true){
        return true ;
    }

    redirect('login') ;
}