<?php
// AboutController.php

class AboutController {
    public function index() {
        $pageTitle = 'About Us';
        $content = 'This is the content of the about page.';
        require_once 'views/about.php';
    }
}
?>