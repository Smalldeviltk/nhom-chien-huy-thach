<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Mr
 */
class Admin_UserController extends Zend_Controller_Action {

    //put your code here
    private $muser;

    public function init() {
        $this->muser = new Admin_Model_User;
    }

    public function indexAction() {
//        if (isset($_GET['ct']) && !empty($_GET['id'])) {//sua
//            $userSelect = $this->userTbl->listUser("id = '" . $_GET['id'] . "'");
//        } else {
//            $userSelect = $this->userTbl->listUser();
//        }
//        $this->view->data = $userSelect;
        //xu ly phan trang
        $adapter = new Zend_Paginator_Adapter_DbSelect($this->muser->listUser());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(10);
        $paginator->setPageRange(5);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
        
    }

    public function detailAction() {
        if (isset($_GET['ctsp']) && !empty($_GET['id'])) {
            $this->view->detail = $this->muser->detailUser("id = '" . $_GET['id'] . "'");
        }
    }

}

?>
