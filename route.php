<?php
require 'controller/ClassroomController.php';

if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

switch ($action) {
    case 'index':
    case 'create':
    case 'store':
    case 'edit':
    case 'update':
    case 'delete':
        (new ClassroomController())->$action();
        break;


    default:
        echo 'Nhập sai action rồi';
}

