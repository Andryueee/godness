<?php
echo $message;
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Только для деканатов!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление дисциплины</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post">

            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <label>Введите название дисциплины</label>
            <input class="add_input" type="text" name="name">
            <label for="b">Укажите кафедру</label>


            <select id="b">
                <?php foreach ($departments as $department): ?>
                <option value="id"><?php echo $department->name; ?></option>
                <?php endforeach; ?>
            </select>



            <button type="submit" class="add_button">Добавить</button>
        </form>

    </div>
<?php
endif;
?>










