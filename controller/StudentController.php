<?php

class StudentController {
    public function index() :void {
        require 'model/Student.php';
        $array = (new Student())->all();
        require 'view/student/index.php';
    }

    public function create() :void {
        require 'model/Classroom.php';
        $classes = (new Classroom())->all();
        require 'view/student/create.php';
    }
    public function store() :void {
        require 'model/Student.php';
        // Truyền thằng cái array $_POST vào
        (new Student())->create($_POST);
        header('location:index.php?controller=student');
    }

    public function edit() :void {
        $id = $_GET['id'];
        require 'model/Student.php';
        $object = (new Student())->find($id);
        require 'model/Classroom.php';
        $classes = (new Classroom())->all();
        require 'view/student/edit.php';
    }

    public function update() :void {
        require 'model/Student.php';
        (new Student())->update($_POST);
        header('location:index.php?controller=student');
    }

    public function delete() :void {
        $id = $_GET['id'];
        require 'model/Student.php';
        (new Student())->delete($id);
        header('location:index.php?controller=student');
    }


}