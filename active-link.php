<?php
if( $_GET['page'] == "look" or  $_GET['page'] == "logout" ){
$nav1_active = "active-link";}
else{$nav1_active = "";}
if($_GET['page'] == "myadv" ){ $nav2_active = "active-link";}
else{$nav2_active = "";}
if($_GET['page'] == "add" ){ $nav3_active = "active-link";}
else{$nav3_active = "";}