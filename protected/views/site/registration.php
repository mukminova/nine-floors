<div class="registration" onclick="openWindow($(this))">
  <h1>Регистрация</h1>
  <!--  <form name="registration">
      <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
      </p>
      <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
      </p>
  
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
      <label>Повторите пароль</label>
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
      <input type="submit" name="submit" value="Зарегистрироваться"/>
    </form>-->


  <!--<h2>Регистрация</h2>
  <form action="/site/saveuser" method="post">
    **** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** 
    <p>
      <label>Ваш логин:<br></label>
      <input name="login" type="text" size="15" maxlength="15">
    </p>
    **** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** 
    <p>
      <label>Ваш пароль:<br></label>
      <input name="password" type="password" size="15" maxlength="15">
    </p>
    **** В поле для паролей (name="password" type="password") пользователь вводит свой пароль *****  
    <p>
      <input type="submit" name="submit" value="Зарегистрироваться">
      **** Кнопочка (type="submit") отправляет данные на страничку save_user.php *****  
    </p></form>-->
die('werwe');

  <!-- Открываем форму !-->
  <?= CHtml::form(); ?>
  <!-- То самое место где будут выводиться ошибки
      если они будут при валидации !-->
  <?= CHtml::errorSummary($form); ?><br>

  <table id="form2" border="0" width="400" cellpadding="10" cellspacing="10">
    <tr>
      <!-- Выводим поле для логина !-->
      <td width="150"><?= CHtml::activeLabel($form, 'login'); ?></td>
      <td><?= CHtml::activeTextField($form, 'login') ?></td>
    </tr>
    <tr>
      <!-- Выводим поле для пароля !-->
      <td><?= CHtml::activeLabel($form, 'passwd'); ?></td>
      <td><?= CHtml::activePasswordField($form, 'passwd') ?></td>
    </tr>
    <tr>
      <!-- Выводим капчу !-->
      <td><?php $this->widget('CCaptcha', array('buttonLabel' => '<br>[новый код]')); ?></td>
      <td><?= CHtml::activeTextField($form, 'verifyCode'); ?></td>
    </tr>
    <tr>
      <td></td>
      <!-- Кнопка "регистрация" !-->
      <td><?= CHtml::submitButton('Регистрация', array('id' => "submit")); ?></td>
    </tr>
  </table>

  <!-- Закрываем форму !-->
  <?= CHtml::endForm(); ?>