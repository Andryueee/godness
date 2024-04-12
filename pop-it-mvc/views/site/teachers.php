<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1 class="teachers_text">Список сотрудников</h1>
    <div class="teachers_all">
        <div class="teachers_list">
            <p>Васюков А.В</p>
            <p>Попов П.П</p>
            <p>Кирий К.К</p>
            <p>Иванов И.И</p>
        </div>
        <div class="teachers_birth_date">
            <p>20.06.2004</p>
            <p>02.07.1996</p>
            <p>01.01.1952</p>
            <p>03.06.1998</p>
        </div>
        <div class="teachers_role">
            <p>Декан</p>
            <p>Преподаватель</p>
            <p>Декан</p>
            <p>Преподаватель</p>
        </div>
    </div>
<div class="add_teacher_div">
    <a class="add_teacher_button" href="add">Добавить</a>
</div>
<?php
endif;
?>

