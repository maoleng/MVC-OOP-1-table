<?php

class ClassroomController {
    public function index() :void {
        require 'model/Classroom.php';
        $array = (new Classroom())->all();
        require 'view/classroom/index.php';
    }

    public function create() :void {
        require 'view/classroom/create.php';
    }
    public function store() :void {
        require 'model/Classroom.php';
        // Truyền thằng cái array $_POST vào
        (new Classroom())->create($_POST);
        header('location:index.php?controller=class');
    }

    public function edit() :void {
        $id = $_GET['id'];
        require 'model/Classroom.php';
        $object = (new Classroom())->find($id);
        require 'view/classroom/edit.php';
    }

    public function update() :void {
        require 'model/Classroom.php';
        (new Classroom())->update($_POST);
        header('location:index.php?controller=class');
    }

    public function delete() :void {
        $id = $_GET['id'];
        require 'model/Classroom.php';
        (new Classroom())->delete($id);
        header('location:index.php?controller=class');
    }


}