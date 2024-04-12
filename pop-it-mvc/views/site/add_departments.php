<?php
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Только для деканатов!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление кафедры</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post">
            <label>Введите название кафедры</label>
            <input class="add_input" type="text" name="name">


            <a class="add_departments_button" href="departments">Добавить</a>
        </form>

    </div>
<?php
endif;
?>
