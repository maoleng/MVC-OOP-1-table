<?php

require 'model/StudentObject.php';
// Khi làm chức năng sửa sinh viên, phải require 2 lần class Connect nên sẽ lỗi -> Dùng hàm require_once
require_once 'model/Connect.php';

class Student {

    public function all() :array {
        $sql = "SELECT students.*, classes.firstName as 'className' FROM students JOIN classes ON students.classId = classes.id";
        $query = (new Connect())->select($sql);

        $array = [];
        // Lúc truyền dữ liệu vào phải truyền dữ liệu thô từ câu truy vấn
        foreach ($query as $eachStudent) {
            // Dùng cách này sẽ không phải set từng giá trị khi khởi tạo đối tượng
            $object = new StudentObject($eachStudent);
            $array[] = $object;
        }
        // Trả về 1 mảng, mỗi phần tử mảng là 1 đối tượng
        return $array;
    }

    public function create($params) :void {
//      Lúc này $params sẽ là mảng $_POST
        $object = new StudentObject($params);

        $sql = "INSERT INTO students (name, classId) 
            VALUES ('{$object->getName()}','{$object->getClassId()}')
        ";
        (new Connect())->execute($sql);
    }

    public function find($id) :object {
        $sql = "SELECT * FROM students WHERE id ='$id'";
        $query = (new Connect())->select($sql);
        $array = mysqli_fetch_array($query);
        // Lúc này $array là 1 mảng chứa thông tin của 1 lớp
        // Ta khởi tạo object, truyền vào $array, object này lưu những thông tin của lớp đó
        $object = new StudentObject($array);
        return $object;

    }

    public function update(array $params) :void {
        $object = new StudentObject($params);

        $sql = "UPDATE students SET
            name = '{$object->getName()}', 
            classId = '{$object->getClassId()}'
            WHERE id = '{$object->getId()}'
        ";

        (new Connect())->execute($sql);
    }

    public function delete($id) :void {
        $sql = "DELETE FROM students WHERE id = '$id'";
        (new Connect())->execute($sql);
    }

}