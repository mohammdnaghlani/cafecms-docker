<?php

function connect() 
{

    $connect = new \Medoo\Medoo(getConfig('database')) ;
    return $connect ;
}
