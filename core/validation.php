<?php

function validation(array $params ,array $validation_rule , array|null $messages = null) : array|bool
{
   
    $validator = new \Rakit\Validation\Validator;
   
     $validation = $validator->make($params , $validation_rule);

    if(!is_null($messages)){
        $validation->setMessages($messages);
    }
    $validation->validate() ;

    if($validation->fails()){
        return ['status' => false ,  'errors' => $validation->errors()->firstOfAll()];
    }
    return  ['status' => true ]; ;
}
