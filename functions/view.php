<?php

function forntIndex($params)
{
    // return loadFront('auth.register' , $params ) ;
    return loadFront('index' , $params  , 'front-layout') ;
}
function register($params)
{
    return loadFront('auth.register' , $params ) ;
}

function frontRegisterUser($params)
{    
    extract($params) ;
    $token = md5(microtime()) ;
    $register = registerUser($email , $password , $token) ;
    if($register){
        $emailData = [
            'subject' => 'this is a test',
            'token'  => $token ,
            'altBody' => 'test' ,
        ];
       // sendEmail($email , $emailData , 'confirme_account');
        setFlashMessage('success' , 'success') ;
        redirect('register');
    }
}

function acceptEmail($params)
{
   $token = $params['confirmed'];

   // function findUserBytoken($token )
   //if find true => $coonect->update('users) -> confirmed 0 => 1
   //else redirect => 404 
}
// view function for admin
function loginIndex($params)
{
    return loadFront('auth.login' , $params ) ;
}
function login($params)
{    
   $userExiste = loginByEmail($params['email'] , $params['password']) ;
    if(!$userExiste){
        setFlashMessage('error' , 'loginError') ;
        redirect('login');
    }
    setFlashMessage('success' , 'loginSuccess') ;
    redirect('profile');
   
}

function profile($params)
{
    loadFront('profile' , $params , 'front-layout') ;
}

function logout($params)
{
    unset($_SESSION['login']);
    redirect('login');
}




function AdminIndex($params)
{
    return loadAdmin('index' , $params ,'admin-layout' ) ;
}

function adminAddUser($params)
{
    return loadAdmin('user.add' , $params ,'admin-layout' ) ;
}

function adminSaveUser($params)
{
    $validation = validation(
            $params ,
            ['email' => 'required' ,'fullname' => 'required'],
            [
                'required' => 'این فیلد اجباری می باشد !' ,
                // 'fullname:required' => ' انام و نام خانوادگی اجباری می باشد' ,
            ]
        );
    

    if(!$validation['status']){
        $arr = [
            'params' => $params,
            'errors' => $validation['errors'],
            'message' => ['type' => 'error' , 'key' => 'createUserError'],
            'url' => 'http://localhost/admin/user/add'
        ];
        setErrors($arr);
    }
    $params = (object) $params ;

    $data = array(
        'email' => $params->email  ,
        'password' => $params->password,
        'full_name' => $params->fullname,
        'mobile' => $params->mobile,
        'role' => $params->role,
        'confirmed' => 1,
    );

    $newUser = newUser($data) ;
    if($newUser > 0){
        setFlashMessage('success' , 'success') ;
        redirect('admin/user/add');
    }
    
}

function listUserAdmin($params)
{
    $params['page'] =  intval(isset($params['page']) ? $params['page'] : 1 );
    $params['totalPage'] = null ;
    // $data = getUsers(['uid','email','full_name','role','confirmed']) ;
    $params['users'] = paginationWithMysql( 'users' ,  ['uid','email','full_name','role','confirmed'],  $params['page'] ,  $params['totalPage']) ;
    return loadAdmin('user.list' , $params ,'admin-layout' ) ;
}
function acceptUserByid($params)
{
    $confirmed = confirmedUserBuId($params['userId']) ;
    if($confirmed){
        setFlashMessage('success' , 'success') ;
    }else{
        setFlashMessage('error' , 'success') ;
    }  
    redirect() ;

}


function removeUser($params)
{
    $remove = removeUserById($params['user_id']) ;
    if($remove){
        setFlashMessage('success' , 'success') ;
    }else{
        setFlashMessage('error' , 'success') ;
    }
  
    redirect() ;
}

function editUser($params)
{
    $params['user_info'] = getUserById($params['userId']) ;
    // var_dump($params);
    // die() ;
    return loadAdmin('user.edit' , $params ,'admin-layout' ) ;
}

function updateUser($params)
{
    $password = trim($params['password']) ;
    $update = [
        'full_name' => $params['fullname'],
        'mobile' => $params['mobile'],
        'role' => $params['role'],
    ];
    if(!empty($password)){
        $update['password'] = $password ;
    }
    
     $update = UpdateUserById($update , $params['user_id']) ; 

     if($update){
        setFlashMessage('success' , 'success') ;
    }else{
        setFlashMessage('error' , 'success') ;
    }
    redirect() ;
    
}


function addmenu($params)
{
    $params['menus'] = getMenus() ;
    return loadAdmin('menu.add' , $params ,'admin-layout' ) ;
}

function test($params)
{
    $menus = getParentMenus();
}



























