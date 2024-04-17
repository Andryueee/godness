<?php
echo $message;
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Отказано в доступе!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление сотрудника</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post" enctype="multipart/form-data">

            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <label>Введите имя</label>
            <input class="add_input" type="text" name="lastname">
            <label>Введите фамилию</label>
            <input class="add_input" type="text" name="firstname">
            <label>Введите отчество</label>
            <input class="add_input" type="text" name="patronymic">
            <label>Введите пол</label>
            <input class="add_input" type="text" placeholder="М/Ж" name="gender">
            <label>Введите дату рождения</label>
            <input class="add_input" type="date" name="age">
            <label>Введите город</label>
            <input class="add_input" type="text" name="place">
            <label>Введите должность</label>
            <input class="add_input" type="text" name="job">
            <label>Введите фото</label>
            <input class="add_input" type="file" name="img">


            <button type="submit" class="add_button">Добавить</button>
        </form>
    </div>
<?php
endif;
?>
