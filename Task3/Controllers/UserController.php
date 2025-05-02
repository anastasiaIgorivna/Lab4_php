<?php

namespace Controllers;

use Models\UserModel;

/**
 * Class UserController
 *
 * Контролює логіку взаємодії між моделлю та представленням.
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
