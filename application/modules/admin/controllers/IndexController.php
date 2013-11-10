<?php

class Admin_IndexController extends Zend_Controller_Action {

    public function init() {
        $this->view->headTitle("Admin");
    }

    public function indexAction() {
        echo "<h1>Admin - Smalldevil";
    }

}