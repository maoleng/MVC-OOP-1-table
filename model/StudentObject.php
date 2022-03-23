<?php

class StudentObject {
    // Có bao nhiêu cột thì khai báo bấy nhiêu ở đây
    private $id;
    private $name;
    private $classId;
    private $className;

    // Dùng hàm __construct; Hàm này sẽ được gọi khi tạo mới đối tượng
    public function __construct ($eachStudent) {
        $this->id = $eachStudent['id'] ?? '';
        $this->name = $eachStudent['name'];
        $this->classId = $eachStudent['classId'];
        $this->className = $eachStudent['className'] ?? '';
    }

    public function getId() {
    	return $this->id;
    }
    public function setId ($var) {
    	$this->id = $var;
    }

    public function getName() {
    	return $this->name;
    }
    public function setName ($var) {
    	$this->name = $var;
    }

    public function getClassId() {
    	return $this->classId;
    }
    public function setClassId ($var) {
    	$this->classId = $var;
    }

    public function getClassName () {
        return $this->className;
    }
}