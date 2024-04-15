<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
?>
<h1>Список преподавателей</h1>
    <a class="add_teacher_button" href="add">Добавить преподавателя</a>
<ul class="list_items">
    <?php foreach ($teachers as $teacher): ?>
        <li>
            <span class="teacher_info"><?php echo $teacher->lastname . ' ' . $teacher->firstname . ' ' . $teacher->patronymic . ' ' . $teacher->age . ' ' . $teacher->place . ' ' . $teacher->job; ?></span>
            <a href="add_lecturer" class="lecturers_btn"><?php echo 'Изм'; ?></a>
            <a href="#" class="lecturers_btn"><?php echo 'Удал'; ?></a>
        </li>

    <?php endforeach; ?>
</ul>

<?php
endif;
?>