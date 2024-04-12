<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <div class="discipline_all">
        <h1 class="discipline_text">Список дисциплин</h1>
        <div class="discipline_list">
            <p>Веб-разработка и дизайн</p>
            <p>Социальная психология</p>
            <p>Теория и практика дизайна</p>
            <p>Математический анализ</p>
            <p>Финансы и финансовый анализ</p>
        </div>
        <div class="discipline_departments_list">
            <p>Кафедра информационных технологий</p>
            <p>Кафедра психологии и социологии</p>
            <p>Кафедра искусств и культуры</p>
            <p>Кафедра математики и статистики</p>
            <p>Кафедра экономики и управления</p>
        </div>
        <div class="add_discipline_div">
            <a class="add_teacher_button" href="add_discipline">Добавить</a>
        </div>
    </div>
<?php
endif;
?>
