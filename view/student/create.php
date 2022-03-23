<form action="?action=store&controller=student" method="post">
    Tên học sinh <input type="text" name="name">
    <br>
    Tên lớp

    <select name="classId">
        <?php foreach ($classes as $eachClassroom) { ?>
            <option value="<?php echo $eachClassroom->getId(); ?>">
                <?php echo $eachClassroom->getFirstName() ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button>Thêm</button>

</form>