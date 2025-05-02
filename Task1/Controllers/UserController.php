<?php
require_once __DIR__ . '/../Models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function showUser() {
        return $this->model->getUserData();
    }
}
