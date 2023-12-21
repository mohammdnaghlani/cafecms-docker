<?php

function loadPage(string $file_name , array $data , string $layout = null)
{
    $createPath = createPath($file_name) ;
    ob_start() ;
    extract($data) ;
    /**
     * array("user" => "mohammad");
     * 
     * $user = "mohammad"
     */
    include $createPath ;

    $content = ob_get_clean();
    if(is_null($layout)){
        echo $content ;
        return ;
    }
    $createPathLayout = createPath($layout) ;
    include $createPathLayout ;
    return true ;
}

function loadFront(string $file_name , array $data , string $layout = null)
{
    if(!is_null($layout)){
        $layout = get__env('LAYOUT_PATH')  . '.' .$layout  ;
    }
    return loadPage(get__env('FRONT_PATH').'.'.$file_name
                    , $data 
                    ,$layout  ) ;
}

function loadAdmin(string $file_name , array $data , string $layout = null)
{
    if(!is_null($layout)){
        $layout = get__env('LAYOUT_PATH')  . '.' .$layout  ;
    }
    return loadPage(get__env('ADMIN_PATH').'.'.$file_name
    , $data 
    , $layout) ;  
}
