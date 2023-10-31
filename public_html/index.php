<?php
try{

    require_once '../bootstrap/init.php';
   
    runApp() ;

}catch(Exception $error){

    echo $error->getMessage() ;

}
