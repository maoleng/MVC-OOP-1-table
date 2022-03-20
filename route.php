<?php

require 'controller/ClassroomController.php';

if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

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

