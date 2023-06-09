<?php
// HomeController.php

class HomeController {
    public function index() {
        $pageTitle = 'Welcome to the Home Page';
        $content = 'This is the content of the home page.';
        require_once 'views/home.php';
    }
}
?>