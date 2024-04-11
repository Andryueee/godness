<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
<div class="login_div">
    <h1>Авторизация</h1>
    <form class="login_page" method="post">
        <label>Введите Логин</label>
        <input type="text" name="login">
        <label>Введите Пароль</label>
        <input type="password" name="password">
        <button class="button_login" >Войти</button>
    </form>
</div>
<?php endif;