<form action="?action=update&controller=class" method="post">
    <input type="hidden" name="id" value="<?php echo $object->getId(); ?>" />
    Tên lớp <input type="text" name="firstName" value="<?php echo $object->getFirstName(); ?>">
    <br>
    Họ lớp <input type="text" name="lastName" value="<?php echo $object->getLastName(); ?>">
    <br>
    <button>Thêm</button>

</form>