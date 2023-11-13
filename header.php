<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключаем Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap5/bootstrap.min.css" >
<!-- Подключаем мой CSS -->
<link rel="stylesheet" href="styles.css" >
 <title>Доска</title>
</head>

  <body>
<header>
<div class="container up">
  <div class="row">
        <div class="col-sm">
      <h4><a href="">Доска объявлений</a> <span id="telefon">(тел. 11111111111)</span></h4>
    </div>
    <div class="col-sm welcome">
     <?php echo $welcome; ?>
    
      </div>
     <div class="col-sm">
     <a href="?page=reg">Зарегистрироваться</a>&emsp;<a href="?page=login"> Войти</a>
<?php  $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
 ?>
  &emsp;<a href="<?php echo $root . '?page=look&out=logout' ?>">Выход</a>
    </div> 
  </div>
</div> 

<!-- Навигация  bootstrap5 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $nav1_active ?>" aria-current="page" href="?page=look">Посмотреть объявления</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $nav2_active ?>" href="?page=myadv">Мои объявления</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $nav3_active ?>" href="?page=add">Подать объявление</a>
        </li>

       </ul>
    </div>
  </div>
</nav>
</header>