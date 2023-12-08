<?php


function view($name, $model = '1'){
    global $view_bag;
    require("views/layout.view.php");
}

function redirect($url){
    header("Location:$url");
    die();
}

