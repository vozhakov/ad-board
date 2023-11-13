<?php
// Обработка формы регистрации
$name = ''; $email = ''; $phone = ''; $pass_err = ''; $reg_successfully='';

if( isset($_POST['submit-reg']) ){
extract($_POST);
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
if( empty($_POST['phone']) ) $phone = '';
else $phone = htmlspecialchars($phone);

 if($password1 != $password2){
    $pass_err = 'Не совпадоют пароли';
 }else{
$password = password_hash($password1, PASSWORD_DEFAULT);
$password = mysqli_real_escape_string($conn, $password); 
// Запись в БД 
$query = "INSERT INTO `reg_users` SET `name`='$name', `password`='$password', `email`='$email', `phone`='$phone'";
$res = mysqli_query($conn, $query);
$reg_successfully = 'Вы успешно зарегистрированы!';
   }   
} // if( isset($_POST['submit-reg']) )