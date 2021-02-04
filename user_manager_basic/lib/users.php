<?php

function check_login($username, $password){
    global $list_users;
    show_array($list_users);
    foreach ($list_users as $user){
        if ($username == $user['username'] and md5($password ) == $user['password']){
            return TRUE;
        }
    }
    return False;
}

//tra ve true neu da login
function is_login(){
    if (isset($_SESSION['is_login']))
        return true;
    return false;
}

//tra ve username
function user_login(){
    if (!empty($_SESSION['user_login'])){
        return $_SESSION['user_login'];
    }
    return false;
}
//
function info_user($field = 'id'){
    global $list_users;
    if (isset($_SESSION['is_login'])){
        foreach ($list_users as $user){
            if ($_SESSION['user_login'] == $user['username']){
                if (array_key_exists($field, $user)){
                    //show_array($user);
                    return $user[$field];
                }

            }
        }
    }
    return false;

}


