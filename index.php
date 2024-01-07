<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once './controller/controllerbus.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            createAction();
            break;
        case 'list':
            indexAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            deleteAction();
            break;
    }
}