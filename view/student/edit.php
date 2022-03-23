<form action="?action=update&controller=student" method="post">
    <input type="hidden" name="id" value="<?php echo $object->getId(); ?>" />
    Tên học sinh <input type="text" name="name" value="<?php echo $object->getName(); ?>">
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
    <button>Sửa</button>

</form>