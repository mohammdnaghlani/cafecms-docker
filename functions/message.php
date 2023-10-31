<?php

function getMessage(string $key_name) : string
{
    $messages =  getConfig('messages');
    return $messages[$key_name] ;
}
