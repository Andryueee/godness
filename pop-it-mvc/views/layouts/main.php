<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/style.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <a class="main_button" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <div class="nav_buttons">
            <a class="teachers_button" href="<?= app()->route->getUrl('/teachers') ?>">Преподаватели</a>
            <a class="departments_button" href="<?= app()->route->getUrl('/departments') ?>">Кафедры</a>
            <a class="discipline_button" href="<?= app()->route->getUrl('/discipline') ?>">Дисциплины</a>

        </div>
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="login_button" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        <?php
        else:
            ?>
            <a class="logout_button" href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <div class="content">
    <?= $content ?? '' ?>
    </div>
</main>

</body>
</html>
