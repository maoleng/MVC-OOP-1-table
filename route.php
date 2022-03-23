<?php

require 'controller/ClassroomController.php';
require 'controller/StudentController.php';
require 'controller/Controller.php';

$action = $_GET['action'] ?? 'index';

$controller = $_GET['controller'] ?? 'base';

switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'class':
        switch ($action) {
            case 'index':
                (new ClassroomController())->index();
                break;
            case 'create':
                (new ClassroomController())->create();
                break;
            case 'store':
                (new ClassroomController())->store();
                break;
            case 'edit':
                (new ClassroomController())->edit();
                break;
            case 'update':
                (new ClassroomController())->update();
                break;
            case 'delete':
                (new ClassroomController())->delete();
                break;
            default:
                echo 'Nhập sai action';
        }
        break;
    case 'student':
        switch ($action) {
            case 'index':
                (new StudentController())->index();
                break;
            case 'create':
                (new StudentController())->create();
                break;
            case 'store':
                (new StudentController())->store();
                break;
            case 'edit':
                (new StudentController())->edit();
                break;
            case 'update':
                (new StudentController())->update();
                break;
            case 'delete':
                (new StudentController())->delete();
                break;
            default:
                echo 'Nhập sai action';
        }
        break;
    default:
        echo 'Nhập sai controller';
}




