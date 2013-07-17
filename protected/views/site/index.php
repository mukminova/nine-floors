<div class="window login" onclick="openWindow($(this))">Вход</div>
<div class="obert_window" onclick="stopPrepagination(event)">
  <div class="login-window">
    <h1>Вход</h1>
    <form name="login">
      <label>E-mail</label>
      <input type="text"><br/>
      <label>Пароль</label>
      <input type="password"><br/>
      <label>Повторите пароль</label>
      <input type="password"><br/>
    </form>
    <input type="button" value="Войти"/>
    <!--<input type="button" value="Регистрация"/>-->
    <a href="/site/registration">Регистрация</a>
    <input type="button" onclick="closeWindow($(this))" value="Закрыть"/>
  </div>
</div>
<a href="/site/information" class="window">Информация</a>
<a href="/site/population" class="window">Жителям</a>
<a href="/site/faq" class="window">FAQ</a>
<a href="/site/reestr" class="window">Реестр</a>