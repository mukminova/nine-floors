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
<div class="clear"></div>
<div class="shape">
    <a href="#" class="overlay hexagon"></a>
    <div class="details">
        <span class="heading">Вход</span>
        <hr />
        <p>{DESCRIPTION}</p>        
        <a href="#" class="button">VIEW</a>
    </div>    
    <div class="bg"></div>    
    <div class="base">
        <img src="../../../img/house.png" alt="" />
    </div>    
</div>