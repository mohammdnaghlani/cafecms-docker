<?php

return array(
    // front routes
    '/' => array(
        'page' => 'forntIndex',
        'method' => 'get',
        'aliensName' => 'frontIndex'
    ),
    '/register' => array(
        'page' => 'register',
        'method' => 'get',
        'aliensName' => 'register'
    ),
    '/register-user' => array(
        'page' => 'frontRegisterUser',
        'method' => 'post',
        'aliensName' => 'register_user'
    ),
    '/acceptEmail' => array(
        'page' => 'acceptEmail',
        'method' => 'get',
        'aliensName' => 'acceptEmail'
    ),
    '/login' => array(
        'page' => 'loginIndex',
        'method' => 'get',
        'aliensName' => 'loginPage'
    ),
    '/checkUser' => array(
        'page' => 'login',
        'method' => 'post',
        'aliensName' => 'checkUser'
    ),

    '/profile' => array(
        'page' => 'profile',
        'method' => 'get',
        'aliensName' => 'profile',
        'middleware' => 'mLogin'
    ),
    '/logout' => array(
        'page' => 'logout',
        'method' => 'get',
        'aliensName' => 'logout',
    ),












    // adminroutes
    '/admin' => array(
        'page' => 'adminIndex',
        'method' => 'get',
        'aliensName' => 'AdminIndex'
    ),
    '/admin/user/add' => array(
        'page' => 'adminAddUser',
        'method' => 'get',
        'aliensName' => 'createUserAdmin'
    ),
    '/admin/user/save' => array(
        'page' => 'adminSaveUser',
        'method' => 'post',
        'aliensName' => 'saveUserAdmin'
    ),
    '/admin/user/list' => array(
        'page' => 'listUserAdmin',
        'method' => 'get',
        'aliensName' => 'listUserAdmin'
    ),
    '/admin/user/confirme' => array(
        'page' => 'acceptUserByid',
        'method' => 'get',
        'aliensName' => 'confirmeUser'
    ),
    '/admin/user/remove' => array(
        'page' => 'removeUser',
        'method' => 'post',
        'aliensName' => 'removeUser'
    ),
    '/admin/user/edit' => array(
        'page' => 'editUser',
        'method' => 'get',
        'aliensName' => 'editUser'
    ),
    '/admin/user/update' => array(
        'page' => 'updateUser',
        'method' => 'post',
        'aliensName' => 'updateUser'
    ),
    '/admin/menu/add' => array(
        'page' => 'addmenu',
        'method' => 'get',
        'aliensName' => 'addmenu'
    ),

    '/test' => array(
        'page' => 'test',
        'method' => 'get',
        'aliensName' => 'test'
    ),

);
