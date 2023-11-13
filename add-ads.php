<?php
if( isset($_SESSION['id']) ){
$id_user = $_SESSION['id'];
$sql = "SELECT name, phone FROM reg_users WHERE id = $id_user;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name_to_form = $row['name'];
$phone_to_form = $row['phone'];
}

if( isset($_POST["submit-add"]) ) {
// загрузка файла без проверок
	print_r($_FILES);
$destination = "";
if( $_FILES['image']['size'] != 0 ){
$uniq = uniqid();	
$destination = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" .  $uniq . "_" . $_FILES ['image']['name'];
$destination = htmlspecialchars($destination);
move_uploaded_file($_FILES ['image']['tmp_name'], $destination);
}

// работа с БД объявлений
extract($_POST);
// $name, $phone, $region, $category, $theme, $text, $price, $submit-add
$name = htmlspecialchars($name, ENT_QUOTES);
$phone = htmlspecialchars($phone, ENT_QUOTES);
$theme = htmlspecialchars($theme, ENT_QUOTES);
$text = htmlspecialchars($text, ENT_QUOTES);
$query = "INSERT INTO ads SET name='$name', phone='$phone', title='$theme', text='$text', id_user='$id_user',  photo='$destination', price='$price', id_categories='$category', id_regions='$region'";
mysqli_query($conn, $query);

} // if( isset($_POST["submit-add"]) )





/*$query = "INSERT INTO `reg_users` SET `name`='$name', `password`='$password', `email`='$email', `phone`='$phone'";
$res = mysqli_query($conn, $query);*/