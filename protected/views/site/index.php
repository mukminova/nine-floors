<div class="window login" onclick="openWindow($(this))">Вход</div>
<div class="obert_window" onclick="stopPrepagination(event)">
  <div class="login-window">
    <h1>Вход</h1>
    <form action="" method="">
      <label>Логин</label>
      <input name="login" type="text" size="15" maxlength="15"><br/>
      <label>Пароль</label>
      <input name="password" type="password" size="15" maxlength="15"><br/>
      <input type="submit" name="submit" value="Войти">
      <a href="/site/registration">Регистрация</a>
    </form>
<!--    <a href="/site/profile"><input type="button" value="Войти" class="login-button"/></a>
    <input type="button" value="Регистрация"/>-->

    <input type="button" onclick="closeWindow($(this))" value="Закрыть"/><br/>
  </div>
</div>
<a href="/site/information" class="window">Информация</a>
<a href="/site/population" class="window">Жителям</a>
<a href="/site/reestr" class="window">Реестр</a>
<div class="clear"></div>

