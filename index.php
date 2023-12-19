<?php


require('app/app.php');

 $view_bag =[
    'title' => 'Glossary List',
    'heading' => 'Glosssary',

 ];

 

 if(isset($_GET['search'])){
      $item = Data::search_terms($_GET['search']);
      $view_bag['heading'] = 'Search Results for: ' . $_GET['search'];
      view('index',$item);
      die();
 }else{
   $items = Data::get_terms();
 }

view('index',Data::get_terms());


?>