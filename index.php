<?php


require('app/app.php');

 $view_bag =[
    'title' => 'Glossary List',
 ];

 if(isset($_GET['search'])){
      $item = search_terms($_GET['search']);
      view('index',$item);
      die();
 }else{
   $items = get_terms();
 }

view('index',get_terms());


?>