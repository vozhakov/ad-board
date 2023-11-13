<div class="container">
  <h3>Вход</h3>
  <p>Если вы зарегистрированы, то авторизуйтесь, если вы не зарегистрированы, то сначала зарегистрируйтесь</p>
 
<form method="post" name="login" action="http://phptr/?page=myadv">

<div class="row">
  <div class="col-md-3">
  <label for="email">Ваш e-mail</label>
  </div>
  <div class="col-md-9">
  <input type="email" name="email" id="email" value="">
  </div>
</div>

<div class="row">
  <div class="col-md-3">
  <label for="pass">Пароль</label>
  </div>
  <div class="col-md-9">
  <input type="password" name="password" id="pass"  value="">
  </div>
</div>

<div class="row last"> 
  <div class="col-md-3">
    <!--
  <input type="checkbox" name="remember" value="checkbox1" checked> Запомнить
-->
  </div>
  <div class="col-md-9">
  <input type="submit" name="submit-login" value="Войти">
  <p id="auth_err"><?= $auth_err; ?></p>  
  </div>
</div>

</form>
</div>