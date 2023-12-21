<?php

function getMenus(array|string $columns = '*') : array
{
    $connect = connect();

    $menus = $connect->select('menus' , $columns);

    return $menus ;
}
function getParentMenus($id = 0) 
{
    $connect = connect();

    $menus = $connect->select('menus' , ['id' , 'name'], ['parent_id' => $id ]);
    echo "<ul>" ;
    foreach($menus as $key => $val){
        echo "<li>" . $val['name'] ;
        $temp = $connect->count('menus' , ['parent_id' =>$val['id'] ]) ;
        if($temp > 0){
            chiledMenu($val['id']) ;
        }
        echo '</li>' ;
    }
    echo "</ul>" ;

}

function chiledMenu($id , $step = false)
{
    $connect = connect();

    $chiledMenu = $connect->select('menus' , ['id' , 'name'], ['parent_id' => $id ]);
   
    echo "<ul>" ;
    foreach($chiledMenu as $key => $val){
        echo "<li>" . $val['name'] ;
        $temp = $connect->count('menus' , ['parent_id' =>$val['id'] ]) ;
        if($temp > 0){
            chiledMenu($val['id']) ;
        }
        echo '</li>' ;
    }
    echo "</ul>" ;

}