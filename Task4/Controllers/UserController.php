<?php

namespace Controllers;

use Models\UserModel;

/**
 * Class UserController
 * 
 * Отримує дані з моделі.
 */
class UserController {
    private UserModel $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function showUser(): string {
        return $this->model->getUserData();
    }
}
