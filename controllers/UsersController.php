<?php
// UsersController.php

require_once 'models/UserModel.php';

class UsersController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel('https://jsonplaceholder.typicode.com');
    }

    public function index() {
        $users = $this->userModel->fetchAllUsers();
        require_once 'views/users.php';
    }

    public function show() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $user = $this->userModel->fetchUserById($id);

            if ($user) {
                require_once 'views/user.php';
            } else {
                echo 'User not found';
            }
        } else {
            echo 'Invalid user ID';
        }
    }
}
?>
