<a href="?action=create&controller=student">Thêm học sinh</a>

<table border="1px solid black">
    <tr>
        <th>Mã học sinh</th>
        <th>Tên học sinh</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    <?php foreach ( $array as $eachStudent ) { ?>
    <tr>
<!--    Lúc này $array đã là một mảng, mỗi phần tử là 1 đối tượng-->
<!--    Nên ta không thể echo $eachStudent['id'] được-->
<!--    Vì nó là một đối tượng nên ta có thể dùng các phương thức và thuộc tính của nó-->
        <td><?php echo $eachStudent->getId() ?></td>
        <td><?php echo $eachStudent->getName() ?></td>
        <td><?php echo $eachStudent->getClassName() ?></td>
        <td>
            <a href="?action=edit&controller=student&id=<?php echo $eachStudent->getId() ?>">Sửa</a>
        </td>
        <td>
            <a href="?action=delete&controller=student&id=<?php echo $eachStudent->getId() ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>