<?php


function view($name, $model = '1'){
    global $view_bag ;
    require(APP_NAME . "views/layout.view.php");
}

function redirect($url){
    header("Location:$url");
    die();
}

function is_post(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
function is_get(){
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function sanitize($value){
    $temp = htmlspecialchars(trim($value));
    if( trim($value) == $temp){
        return $temp;
    }else{
        return '';
    }
}

function authenticate_user($email,$password){

    $users = CONFIG['users'];

    if(!isset($users[$email])){
        return false;
    }

    $user_password = $users[$email];

    return $password == $user_password;
    
}

function is_user_authenticated(){
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated(){
    if(!is_user_authenticated()){
        redirect('../login.php');
    }
}