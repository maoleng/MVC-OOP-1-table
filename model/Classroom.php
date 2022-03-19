<?php

require 'model/Connect.php';

class Classroom {

    private $id;
    private $firstName;
    private $lastName;

    public function getId() {
        return $this->id;
    }
    public function setId ($var) {
        $this->id = $var;
    }

    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName ($var) {
        $this->firstName = $var;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function setLastName ($var) {
        $this->lastName = $var;
    }

    public function getFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }
//---------------

    public function all() {
        $sql = "SELECT * FROM classes";
        $query = (new Connect())->select($sql);

        //Khởi tạo mảng
        $array = [];
        // Bắt đầu setter
        foreach ( $query as $eachRow ) {
            // Mỗi lần duyệt mảng là tạo 1 đối tượng
            $object = new self();
            $object->setId($eachRow['id']);
            $object->setFirstName($eachRow['firstName']);
            $object->setLastName($eachRow['lastName']);
            // Lưu từng đối tượng vào từng index trong mảng
            $array[] = $object;
        }
        return $array;
    }

    public function create ($firstName, $lastName) {
        $object = new self();
        $object->setFirstName($firstName);
        $object->setLastName($lastName);

        $sql = "
            INSERT INTO classes (firstName, lastName) 
            VALUES ('{$object->firstName}', '{$object->lastName}') 
        ";
        (new Connect())->execute($sql);
        
    }

    public function find($id) {
        $sql = "SELECT * FROM classes WHERE id = '$id'";
        $query = (new Connect())->select($sql);
        $result = mysqli_fetch_array($query);

        $object = new self();
        $object->setId($result['id']);
        $object->setFirstName($result['firstName']);
        $object->setLastName($result['lastName']);

        return $object;
    }

    public function update($id, $firstName, $lastName) {

        $object = new self();
        $object->setFirstName($firstName);
        $object->setLastName($lastName);
        $object->setId($id);

        $sql = "UPDATE classes 
            SET firstName = '{$object->firstName}', lastName = '{$object->lastName}' 
            WHERE id = '$id'
        ";
        (new Connect())->execute($sql);

    }

    public function destroy($id) {
        $sql = "DELETE FROM classes WHERE id = '$id'";
        (new Connect())->execute($sql);
    }

}