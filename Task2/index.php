<?php
require_once 'autoload.php';

$controller = new UserController();
$data = $controller->showUser();

$view = new UserView();
$view->display($data);
