<?php
// index.php

require_once 'controllers/DrugController.php';

$controller = new DrugController();

// اکشن رو از آدرس میگیریم (مثلا index.php?action=create)
// اگه اکشن نبود، پیش فرض میشه 'index'
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
  case 'create':
    $controller->create();
    break;
  case 'store':
    $controller->store();
    break;
  case 'edit':
    $controller->edit($id);
    break;
  case 'update':
    $controller->update($id);
    break;
  case 'delete':
    $controller->delete($id);
    break;
  default:
    $controller->index();
    break;
}
