<?php

class Admin_IndexController extends Zend_Controller_Action {

    public function indexAction() {
        $auth = Zend_Auth::getInstance();
        $infoUser = $auth->getIdentity();
        $this->view->fullName = $infoUser->username;
    }

    public function logoutAction() {
        Zend_Auth::getInstance()->clearIdentity();
    }

}
