<!-- Регистрация -->
<div class="container">
<h3>Регистрация</h3>
<form method="post" name="registration" action="">

<div class="row">
  <div class="col-md-3">
  <label for="name">Ваше имя</label>
  </div>
  <div class="col-md-9">
  <input type="text" name="name" id="name" placeholder="Обязательно" value="<?= $name ?>" required>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  <label for="email">Ваш e-mail</label>
  </div>
  <div class="col-md-9">
  <input type="email" name="email" id="email" placeholder="Обязательно" value="<?= $email ?>" required>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  <label for="phone">Телефон</label>
  </div>
  <div class="col-md-9">
  <input type="tel" name="phone" id="phone" placeholder="Обязательно" value="<?= $phone ?>"required>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  <label for="password1">Пароль</label>
  </div>
  <div class="col-md-9">
  <input type="password" name="password1" id="password1" placeholder="Обязательно" value="" required>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  <label for="password2">Повторите пароль</label>
  </div>
  <div class="col-md-9">
  <input type="password" name="password2" id="password2" placeholder="Обязательно" value="" required>
  <p id="pass-err"><?= $pass_err; ?></p>
  </div>
</div>

<div class="row last"> 
  <div class="col-md-3">
   </div>
  <div class="col-md-9">
  <input type="submit" name="submit-reg" value="Зарегистрироваться"> 
  <?= $reg_successfully; ?> 
  </div>
</div>
<br>
</form>
</div> 
