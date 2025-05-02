<?php
require_once 'autoload.php';

use Controllers\UserController;
use Views\UserView;

$controller = new UserController();
$data = $controller->showUser();

$view = new UserView();
$view->display($data);
