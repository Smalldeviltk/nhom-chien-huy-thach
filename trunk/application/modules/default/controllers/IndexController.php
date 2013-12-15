<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
//        $thiep = new Application_Model_DbTable_Thiep();
//        $this->view->thiep = $thiep->fetchAll();
        $this->_redirect('/thiep');
    }

}
