<?php
require_once 'model/bus.php';
function indexAction(){
$buses = listbus();
return $buses;
require_once 'view/buslist.php';
}
function createAction(){
    
    require_once 'view/create.php';
    }
function storeAction(){
    createbus();
    header('location:index.php?action=list');
    }
function editAction(){
    $ID=$_GET['id'];
    $buses = view($ID);
require_once 'view/edit.php';
}
function deleteAction(){
    $ID=$_GET['id'];
require_once 'view/delete.php';
}
function destroyAction(){
    destorybus($_GET['id']);

    header('location:index.php?action=list');
}
function updateAction(){
    extract($_POST);
    editbus($ID, $bus_name, $license, $company, $capacity,$fk);
}