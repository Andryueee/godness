<?php
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Только для деканатов!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление дисциплины</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post">
            <label>Введите название дисциплины</label>
            <input class="add_input" type="text" name="name">
            <label for="b">Укажите кафедру</label>
            <select id="b">
                <option>Кафедра информационных технологий</option>
                <option>Кафедра психологии и социологии</option>
                <option>Кафедра искусств и культуры</option>
                <option>Кафедра математики и статистики</option>
                <option>Кафедра экономики и управления</option>
            </select>

            <a class="add_discipline_button" href="discipline">Добавить</a>
        </form>

    </div>
<?php
endif;
?>
