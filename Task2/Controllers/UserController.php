<?php

/**
 * Class UserController
 *
 * Контролює логіку взаємодії між моделлю та представленням.
 */
class UserController {
    /**
     * @var UserModel
     */
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    /**
     * Отримати дані користувача з моделі.
     *
     * @return string
     */
    public function showUser() {
        return $this->model->getUserData();
    }
}
