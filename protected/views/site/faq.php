<h1>Часто задаваемые вопросы</h1>
<div class="askme" onclick="openWindow($(this))">задать свой вопрос</div>
<div class="obert_window" onclick="stopPrepagination(event)">
  <div class="askme-window">
    <h1>Задать вопрос</h1>
    <form>
      <label>Имя Фамилия</label>
      <input type="text"><br/>
      <label>Вопрос</label>
      <textarea>asdasd</textarea>
    </form>
    <input type="button" value="Отправить"/>
    <input type="button" onclick="closeWindow($(this))" value="Закрыть"/><br/>
  </div>
</div>