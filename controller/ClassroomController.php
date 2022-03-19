<?php

class ClassroomController {
    public function index() {
        require 'model/Classroom.php';
        $array = (new Classroom())->all();
        require 'view/classroom/index.php';
    }

    public function create() {
        require 'view/classroom/create.php';
    }

    public function store() {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        require 'model/Classroom.php';
        (new Classroom())->create($firstName, $lastName);
    }

    public function edit() {
        $id = $_GET['id'];
        require 'model/Classroom.php';
        $result = (new Classroom)->find($id);
        require 'view/classroom/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        require 'model/Classroom.php';
        (new Classroom())->update($id, $firstName, $lastName);
    }

    public function delete() {
        $id = $_GET['id'];
        require 'model/Classroom.php';
        (new Classroom())->destroy($id);
    }

}