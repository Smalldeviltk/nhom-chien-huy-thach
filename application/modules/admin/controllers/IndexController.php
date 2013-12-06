<?php

class Admin_IndexController extends Zend_Controller_Action {

    private $userTbl;
    public function init() {
        $this->view->headTitle("Admin");        
        $this->userTbl = new Application_Model_DbTable_User();
    }

    public function indexAction() {
//        if (isset($_GET['ct']) && !empty($_GET['id'])) {//sua
//            $userSelect = $this->userTbl->listUser("id = '" . $_GET['id'] . "'");
//        } else {
//            $userSelect = $this->userTbl->listUser();
//        }
//
//        $this->view->user = $userSelect;
        $muser = new Admin_Model_User;
        $adapter = new Zend_Paginator_Adapter_DbSelect($muser->listall());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(3);
        $paginator->setPageRange(3);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
    }

}