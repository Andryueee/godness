<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <ul class="list_items">
        <?php foreach ($departments as $department): ?>
            <li>
                <span class="teacher_info"><?php echo $department->name; ?></span>
                <a href="add_lecturer" class="lecturers_btn"><?php echo 'Изм'; ?></a>
                <a href="#" class="lecturers_btn"><?php echo 'Удал'; ?></a>
            </li>

        <?php endforeach; ?>
    </ul>
    <div class="add_departments_div">
        <a class="add_teacher_button" href="add_departments">Добавить</a>
    </div>
<?php
endif;
?>


