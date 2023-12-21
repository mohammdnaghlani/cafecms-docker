<?php

function runApp()
{
    $current_route = getCurrentRequest();
    //echo $current_route ;
    $routeExsist =  routeExsist($current_route);
    // var_dump($routeExsist) ;
    if (!$routeExsist) {
        header('HTTP/1.0 404 Not Found');
        throw new Exception('page not found');
    }
    $methodExsist = methodExsist($routeExsist['method']);
    // var_dump($methodExsist);
    if(!$methodExsist){
        header('HTTP/1.0 403 access denied');
        throw new Exception('access denied');  
    }
    //middleware scop
    $getMiddlewares = getMiddlewares($routeExsist) ;
    if($getMiddlewares){
        $getMiddlewares() ;
    }

    //end middleware scop

    // var_dump($methodExsist);
    $params = getParams() ;

    if($routeExsist['method'] === 'post'){
        checkCSRF($params) ;
    }
    
    $page = $routeExsist['page']($params);
    //include $page ;
    
}
function routeExsist(string $current_route): array|bool
{
    $getRoutes = getAllRoutes();

    if (array_key_exists($current_route,  $getRoutes)) {
        return $getRoutes[$current_route];
    }
    return false;
}
function getMiddlewares(array $route_info)
{
    if(!isset($route_info['middleware'])){
        return false ;
    }
    return $route_info['middleware'] ;
}









function getCurrentRequest(): string
{
    $dataRequest = explode('?', $_SERVER['REQUEST_URI']);
    $currentRequest = rtrim($dataRequest[0], '/');
    if ($currentRequest == '') {
        $currentRequest = '/';
    }
    return $currentRequest;
}
function methodExsist(string $method): bool
{
    $currentRequestMethod = strtolower($_SERVER['REQUEST_METHOD']);

    if ($currentRequestMethod === $method) {
        return true;
    }
    return false ;
}
function getParams() : array|bool|object
{
    return $_REQUEST ;
}
function getAllRoutes() : array|object
{
    return include createPath('routes.routes') ;
}

function aliensRoute(string $aliensName) : string
{
    $allRoutes = getAllRoutes();
    $temp = null ;
    foreach($allRoutes as $key => $routeInfo){
        $temp[$routeInfo['aliensName']] = $key ;
    }
    if(!array_key_exists($aliensName , $temp)){
        return "#" ;
    }
    return $temp[$aliensName] ;
    
}
