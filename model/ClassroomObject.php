<?php

class ClassroomObject {
    // Có bao nhiêu cột thì khai báo bấy nhiêu ở đây
    private $id;
    private $firstName;
    private $lastName;

    // Dùng hàm __construct; Hàm này sẽ được gọi khi tạo mới đối tượng
    public function __construct ($eachClassroom) {
        $this->id = $eachClassroom['id'] ?? '';
        $this->firstName = $eachClassroom['firstName'];
        $this->lastName = $eachClassroom['lastName'];
    }

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

    public function showFullName() {
        return $this->lastName . ' ' . $this->firstName;
    }
}