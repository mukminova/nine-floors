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
    <span onclick="closeWindow($(this))">Закрыть</span>
  </div>
</div>
<div class="window registration" onclick="openWindow($(this))">Регистрация</div>
<div class="obert_window" onclick="stopPrepagination(event)">
  <div class="registration-window">
    <h1>Регистрация</h1>
    <form name="registration">
      <label>Фамилия</label>
      <input type="text"><br/>
      <label>Имя</label>
      <input type="text"><br/>
      <label>Отчество</label>
      <input type="text"><br/>
      <label>E-mail</label>
      <input type="text"><br/>
      <label>Пароль</label>
      <input type="password"><br/>
      <label>Институт</label>
      <select>
        <option>ИТЭ</option>
        <option>ИЭЭ</option>
        <option>ИЭИТ</option>
      </select><br/>
      <label>Группа</label>
      <input type="text"><br/>
      <label>Комната</label>
      <input type="text"><br/>
    </form>
    <span onclick="closeWindow($(this))">Закрыть</span>
  </div>
</div>
<a href="/site/activity" class="window">Мероприятия</a>
<a href="/site/floors" class="window">Этажи</a>