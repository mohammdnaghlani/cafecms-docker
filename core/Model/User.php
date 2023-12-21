<?php

function newUser(array|object $data) : bool|int
{
    $connect = connect();

    $newUser = $connect->insert('users' , $data);
    if($connect->id() > 0 ){
        return $connect->id() ;
    }
    return false ;
}


function registerUser(string $email , string $password , string $token = null) 
{
     $userExist = userExist($email) ;
     if($userExist){
        setFlashMessage('warning' , 'userExistMessage') ;
        redirect('register');
     }
     $newUser = [
        'email' => $email ,
        'password' => $password,
        'token' =>$token ,
    ];

    $create_user = newUser($newUser) ;
    if($create_user){
        return true ;
     }
     setFlashMessage('info' , 'info') ;
     redirect('register');
}

function  userExist(string $email) : bool
{
    if(count(getUserByEmail($email)) == 0){
        return false ;
    }
    return true ;
  
}

function getUserByEmail(string $email) : array|object
{
    $connect = connect();
    
    return $connect->select('users' , '*' , ['email' => $email] , ['LIMIT' => 1]) ;
}
function getUsers(array|string $columns = '*') : array
{
    $connect = connect();

    $allUsers = $connect->select('users' , $columns);

    return $allUsers ;
}
function getUserById(int $user_id) : bool|array|object
{
    $connect = connect();
    $getUser = $connect->select('users' , '*' , ['uid' => $user_id]);
    if($getUser){
        return $getUser[0] ;
    }
    return false ;
}
function confirmedUserBuId(int $user_id) : bool
{
    $connect = connect();
    $update = $connect->update('users' , ['confirmed' => 1] , ['uid' => $user_id]);
    if($update->rowCount() > 0){
        return true ;
    }
    return false ;
}

function removeUserById(int $user_id) : bool
{
    $connect = connect();
    $remove = $connect->delete('users' , ['uid' => $user_id]);
    if($remove->rowCount() > 0){
        return true ;
    }
    return false ; 
}

function UpdateUserById(array|object $data , int $userId) : bool
{
    $connect = connect();
  
    $update = $connect->update('users' , $data , ['uid' => $userId]);

    if($update->rowCount() > 0){
        return true ;
    }
    return false ;  
}


function loginByEmail(string $email , string $password) : bool
{
    $getUser = getUserByEmail($email) ;
    if(empty($getUser)){
        return false ;
    }
    if($getUser[0]['password'] != $password){
        return false ;
    }
    $_SESSION['login'] = [
        'status' => true ,
        'userInfo' => [
            'userId' => $getUser[0]['uid'],
            'email' => $getUser[0]['email'],
            'role' => $getUser[0]['role'],
        ],
    ];
    return true ;
}








function getRole(int $role) : string
{
    $roles = array(
        1 => 'کاربر' ,
        2 => 'مدیر'
    );

    return $roles[$role] ;
}

function userStatus(int $status) : string
{
    $situation = array(
        0 => 'غیر فعال' ,
        1 => 'فعال'
    );

    return $situation[$status] ; 
}

