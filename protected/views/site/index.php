<div class="window login" onclick="openWindow($(this))">Вход</div>
<div class="obert_window" onclick="stopPrepagination(event)">
  <div class="login-window">
    <h1>Вход</h1>
    <form name="login">
      <label>E-mail</label>
      <input type="text"><br/>
      <label>Пароль</label>
      <input type="password"><br/>
    </form>
    <a href="/site/profile"><input type="button" value="Войти" class="login-button"/></a>
    <!--<input type="button" value="Регистрация"/>-->
    <a href="/site/registration">Регистрация</a>
    <input type="button" onclick="closeWindow($(this))" value="Закрыть"/><br/>
  </div>
</div>
<a href="/site/information" class="window">Информация</a>
<a href="/site/population" class="window">Жителям</a>
<a href="/site/reestr" class="window">Реестр</a>