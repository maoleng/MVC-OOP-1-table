<?php

require 'ClassroomObject.php';
require 'Connect.php';

class Classroom {

    public function all() :array {
        $sql = "SELECT * FROM classes";
        $query = (new Connect())->select($sql);

        $array = [];
        // Lúc truyền dữ liệu vào phải truyền dữ liệu thô từ câu truy vấn
        foreach ($query as $eachClassroom) {
            // Dùng cách này sẽ không phải set từng giá trị khi khởi tạo đối tượng
            $object = new ClassroomObject($eachClassroom);
            $array[] = $object;
        }
        // Trả về 1 mảng, mỗi phần tử mảng là 1 đối tượng
        return $array;
    }

    public function create($params) :void {
//      Lúc này $params sẽ là mảng $_POST
        $object = new ClassroomObject($params);

        $sql = "INSERT INTO classes (firstName, lastName) 
            VALUES ('{$object->getFirstName()}','{$object->getLastName()}')
        ";
        (new Connect())->execute($sql);
    }

    public function find($id) :object {
        $sql = "SELECT * FROM classes WHERE id ='$id'";
        $query = (new Connect())->select($sql);
        $array = mysqli_fetch_array($query);
        // Lúc này $array là 1 mảng chứa thông tin của 1 lớp
        // Ta khởi tạo object, truyền vào $array, object này lưu những thông tin của lớp đó
        $object = new ClassroomObject($array);
        return $object;

    }

    public function update(array $params) :void {
        $object = new ClassroomObject($params);

        $sql = "UPDATE classes SET
            firstName = '{$object->getFirstName()}', 
            lastName = '{$object->getLastName()}'
            WHERE id = '{$object->getId()}'
        ";
        (new Connect())->execute($sql);
    }

    public function delete($id) :void {
        $sql = "DELETE FROM classes WHERE id = '$id'";
        (new Connect())->execute($sql);
    }

}