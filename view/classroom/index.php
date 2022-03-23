<a href="?action=create&controller=class">Thêm lớp</a>

<table border="1px solid black">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    <?php foreach ( $array as $eachClassroom ) { ?>
    <tr>
<!--    Lúc này $array đã là một mảng, mỗi phần tử là 1 đối tượng-->
<!--    Nên ta không thể echo $eachClassroom['id'] được-->
<!--    Vì nó là một đối tượng nên ta có thể dùng các phương thức và thuộc tính của nó-->
        <td><?php echo $eachClassroom->getId() ?></td>
        <td><?php echo $eachClassroom->showFullName() ?></td>
        <td>
            <a href="?action=edit&controller=class&id=<?php echo $eachClassroom->getId() ?>">Sửa</a>
        </td>
        <td>
            <a href="?action=delete&controller=class&id=<?php echo $eachClassroom->getId() ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>