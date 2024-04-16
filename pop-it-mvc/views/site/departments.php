<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1>Список Кафедр</h1>
<!--    <div class="add_departments_div">-->
        <a class="add_teacher_button" href="add_departments">Добавить</a>
<!--    </div>-->
    <ul class="list_items">
        <?php foreach ($departments as $department): ?>
            <li>
                <span class="teacher_info"><?php echo $department->name; ?></span>
            </li>

        <?php endforeach; ?>
    </ul>
<?php
endif;
?>


