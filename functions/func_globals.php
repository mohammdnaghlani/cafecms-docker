<?php
function createPath(string $file_name , string $extention = 'php') : string
{
    //dir.file
    
    $file_path = str_replace('.' , DIRECTORY_SEPARATOR , $file_name);
    
    //dir/file
    $file_path = $file_path .'.'.$extention;
    //dir/file.php
    $file_path = BASE_PATH . $file_path ;
    //c:/xampp/htdoc/cafecms/dir/file.php
    if(!file_exists( $file_path)){
        // echo "$file_path  <br />" ;
        throw new Exception('file not found !' . $file_name) ;
    }
    return $file_path ;
}


function getAssets(string $file_name) : string
{
    return get__env('BASE_URI') . $file_name ;
}

function getAdminAssets($file_name) : string
{
    return getAssets(get__env('ADMIN_ASSETS_PATH') . $file_name) ;
}
function getFrontAssets(string $file_name) : string
{
    return getAssets(get__env('FRONT_ASSETS_PATH') . $file_name) ; 
}


function getUriByAliensName(string $aliens_Name) : string
{
  $getRouteByAliensName = trim(aliensRoute($aliens_Name) , '/');

  return get__env('BASE_URI') . $getRouteByAliensName ;
}

function getConfig(string $config_name) : mixed
{
    $config = include createPath('config.' . $config_name) ;
    return $config ;
}

function paginamtionByArray(array $data , int $page , int|null &$totalPage) : array|object
{
    $countData = count($data) ;

    $totalPage = ceil($countData / get__env('ITEMS_PER_PAGE')) ;
    
    $item = ($page - 1) * get__env('ITEMS_PER_PAGE') ;

    $data = array_splice($data , $item , get__env('ITEMS_PER_PAGE')) ;

    return $data ;
}

function paginationWithMysql(string $target ,array $columns ,  int $page , int|null &$totalPage ) : array|object
{
    $connect = connect();

    $countData = $connect->count($target) ;

    $totalPage = ceil($countData / get__env('ITEMS_PER_PAGE')) ;
    
    $item = ($page - 1) * get__env('ITEMS_PER_PAGE') ;

    $data = $connect->select($target , $columns , ['LIMIT' => [$item , get__env('ITEMS_PER_PAGE')]]);

    return $data ;
}