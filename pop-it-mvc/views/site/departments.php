<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <div class="discipline_all">
        <h1 class="discipline_text">Список Кафедр</h1>

        <div class="departments_list">
            <p>Кафедра информационных технологий</p>
            <p>Кафедра психологии и социологии</p>
            <p>Кафедра искусств и культуры</p>
            <p>Кафедра математики и статистики</p>
            <p>Кафедра экономики и управления</p>
        </div>
    </div>
    <div class="add_departments_div">
        <a class="add_teacher_button" href="add_departments">Добавить</a>
    </div>
<?php
endif;
?>


