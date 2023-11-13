<?php
// Обработка формы авторизации
$auth_err = '';
if( isset($_POST['submit-login']) ){
extract($_POST); // $email, $password, $remember, $submit-login
$query = "SELECT * FROM reg_users WHERE email ='$email'"; 
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if (!empty($user)) {
      $hash = $user['password']; // пароль из БД
}

if (password_verify($password, $hash)) {
 session_start();
 $_SESSION['auth'] = true; // авторизовались
 $_SESSION['id'] = $user['id']; // из БД
 $_SESSION['email'] = $user['email'];

//Запоминаем в куки
$random_str = vva_random(); // случайная строка
setcookie('email', $email, time()+60*60*24*30); 
setcookie('random_str', $random_str, time()+60*60*24*30); //случайная строка
$query = "UPDATE reg_users SET rendKey='$random_str' WHERE password='$hash'";
   mysqli_query($conn, $query);
} //if (password_verify($password, $hash))
else {
      $auth_err = 'Не правильный e-mail или пароль';
      }
      
} // if( isset($_POST['submit-login']) )

/////////////////////////////////////////////////////

if (empty($_SESSION['auth']) or $_SESSION['auth'] == false) {
     if ( !empty($_COOKIE['email']) and !empty($_COOKIE['random_str']) ) {
  
      $email_from_cookie = $_COOKIE['email']; 
      $random_str_from_cookie = $_COOKIE['random_str']; //ключ из кук 
      $query = "SELECT * FROM reg_users WHERE email='$email_from_cookie' AND rendKey ='$random_str_from_cookie'";
      $record = mysqli_fetch_assoc( mysqli_query($conn, $query) );
            if (!empty( $record)) {
             session_start(); 
            $_SESSION['auth'] = true; 
            $_SESSION['id'] = $record['id']; 
            $_SESSION['email'] = $record['email']; 
            }
      }
}

if (!empty($_SESSION['auth']) and $_SESSION['auth']){
      $welcome = "Вы авторизованы: {$_SESSION['email']}";
}
else {$welcome ="";}

if(isset($_GET['out']) and $_GET['out'] == "logout") $welcome ="";

if( !empty($_GET) and $_GET['page'] == 'logout'){
$welcome =""; 
}


