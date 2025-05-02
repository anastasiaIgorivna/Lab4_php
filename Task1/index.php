<?php
require_once './Controllers/UserController.php';
require_once './Views/UserView.php';

$controller = new UserController();
$data = $controller->showUser();

$view = new UserView();
$view->display($data);
