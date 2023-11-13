<?php
if( empty($_GET) ) $page = "look";
else $page = $_GET['page'];

include 'functions.php';
include 'connect-create-table.php';
include 'registration.php';
include 'auth.php';
if( !empty($_GET) and $_GET['out'] == 'logout'){
 include 'logout.php'; 
}
include 'add-ads.php';
include 'active-link.php';
if( $page == "look" ) include 'output-all-ads-pagin.php';
if( $page == "myadv" ) include 'output-my-ads-pagin.php';

include 'header.php';
 
if( empty($_GET) ){
$page = "look"; // неавторизованный
if( !empty($_SESSION['auth']) and $_SESSION['auth'] ) $page = "myadv"; // авторизованный
}
else{
  $page = $_GET['page'];
}

switch ($page) {
    case "reg":
       include 'templates/reg.php';
        break;
 case "login":
       include 'templates/login.php';
        break;
case "look":
       include 'templates/look.php';
        break;
 case "myadv":
      if( !empty($_SESSION['auth']) and $_SESSION['auth'] ){
       include 'templates/myadv.php';
     }
     else {include 'templates/login.php';} // неавторизованный
      break;

case "add":
       if( !empty($_SESSION['auth']) and $_SESSION['auth'] ){
       include 'templates/add.php';
     }
     else {include 'templates/login.php';} // неавторизованный
        break;
 }

include 'footer.php'; 