<form action="?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $result->getId(); ?>" />
    Tên lớp
    <input type="text" name="firstName" value="<?php echo $result->getFirstName(); ?>">
    <br>
    Họ lớp
    <input type="text" name="lastName" value="<?php echo $result->getLastName(); ?>">
    <br>
    <button>Sửa</button>

</form>