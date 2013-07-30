<h1>Регистрация</h1>
<form name="registration" method="POST">
  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" >
  </p>
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" >
  </p>
  <p>
    <label>Повторите пароль:<br></label>
    <input name="repeat_password" type="password" >
  </p>
  <?php if (!empty($errors)): ?>
    <div class = "errors">
      <?php echo $errors;
      ?>
    </div>
  <?php endif; ?>
  <input type="submit" name="submit" value="Зарегистрироваться"/>
</form>
