<a href="?action=create">Tạo lớp mới</a>

<table border="1px solid black">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($array as $eachClass) { ?>
    <tr>
        <td><?php echo $eachClass->getId() ?></td>
        <td><?php echo $eachClass->getFullName() ?></td>
        <td>
            <a href="?action=edit&id=<?php echo $eachClass->getId() ?>">
                Sửa
            </a>
        </td>
        <td>
            <a href="?action=delete&id=<?php echo $eachClass->getId() ?>">
                Xóa
            </a>
        </td>
    </tr>
    <?php } ?>
</table>