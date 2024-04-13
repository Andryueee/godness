<h1>Список статей</h1>
<ol>
    <?php
    foreach ($teachers as $teacher) {
        echo '<li style="color: red">' . $teacher->lastname . '</li>';
    }
    ?>
</ol>