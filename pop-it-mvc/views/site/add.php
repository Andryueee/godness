<?php
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Отказано в доступе!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление сотрудника</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post">
            <label>Введите имя</label>
            <input class="add_input" type="text" name="name">
            <label>Введите фамилию</label>
            <input class="add_input" type="text" name="name">
            <label>Введите отчество</label>
            <input class="add_input" type="text" name="name">
            <label>Введите дату рождения</label>
            <input class="add_input" type="date" name="name">
            <label>Введите роль для сотрудника</label>
            <input class="add_input" type="text" name="name">

            <button class="add_button">Добавить</button>
        </form>
    </div>
<?php
endif;
?>
