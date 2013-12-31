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
        $this->muser = new Application_Model_User;
    }

    public function indexAction() {
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
    
    public function addAction() {
        if (isset($_GET['edit']) && !empty($_GET['id'])) {//sua
            $form = new Application_Form_UserForm();
            $form->submit->setLabel('Update');
            $this->view->form = $form;
            $thiep = $this->muser->fetchThiep($_GET['id']);
            $id = $_GET['id'];
            $this->view->masp = $thiep['username'];
            if ($this->getRequest()->isPost()) {
                $formData = $this->getRequest()->getPost();
                if ($form->isValid($formData)) {
                    $username = $this->getRequest()->getPost('username');
                    $password = $this->getRequest()->getPost('password');
                    $level = $this->getRequest()->getPost('level');
                    $this->muser->updateThiep($username, $password, $level, $id);
                    $this->_forward('index', 'user', 'admin');
                } else {
                    $form->populate($formData);
                }
            }
        } else {
            $form = new Application_Form_UserForm();
            $form->submit->setLabel('Add');
            $this->view->form = $form;

            if ($this->getRequest()->isPost()) {
                $formData = $this->getRequest()->getPost();
                if ($form->isValid($formData)) {
                    $username = $this->getRequest()->getPost('username');
                    $password = $this->getRequest()->getPost('password');
                    $level = $this->getRequest()->getPost('level');
                    $this->muser->updateThiep($username, $password, $level);
                    $this->_forward('index', 'user', 'admin');
                } else {
                    $form->populate($formData);
                }
            }
        }
    }

    public function deleteAction() {
        if (isset($_GET['del']) && !empty($_GET['id'])) {
            $this->view->detail = $this->muser->delteteThiep($_GET['id']);
            $this->_redirect('/admin/user');
        }
    }

}

?>
