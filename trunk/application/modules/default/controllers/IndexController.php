<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        $this->view->headTitle("Default");
    }

    public function indexAction() {
        echo "<h1>Default - Smalldevil";
    }

}