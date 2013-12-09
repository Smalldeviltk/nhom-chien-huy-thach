<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
//        $thiep = new Application_Model_DbTable_Thiep();
//        $this->view->thiep = $thiep->fetchAll();
        $form = new Admin_Form_File;

        if ($this->_request->isPost()) {
            $upload = new Admin_Form_UploadFile_UploadFile;
            $files = $upload->_upload->getFileInfo();
            foreach ($files as $file => $info) {
                if (!$upload->_upload->isUploaded($file)) {
                    echo "Chua chon file";
                }
            }
            $upload->_upload->receive();
        }
        $this->view->form = $form;
    }

    public function registerAction() {
        // action body
        $form = new Application_Form_Register();
        $form->submit->setLabel('Đăng kí');
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $email = $form->getValue('email');
                $pass = $form->getValue('pass');
                $name = $form->getValue('name');
                $phone = $form->getValue('phone');
                $address = $form->getValue('address');
                $customer = new Application_Model_DbTable_Customer();
                $customer->Register($email, $pass, $name, $phone, $address);
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function loginAction() {
        // action body
        $form = new Application_Form_Login();
        $form->submit->setLabel('Đăng nhập');
        $this->view->form = $form;
    }

    public function viewAction() {
        // action body
        $id = $this->_getParam('id');
        $chitiet = new Application_Model_DbTable_Thiep();
        $this->view->chitiet = $chitiet->laySanPham($id);
    }

    public function uploadAction() {
        $form = new Form_File;
        if ($this->_request->isPost()) {
            $upload = new Form_UploadFile_UploadFile;
            $files = $upload->_upload->getFileInfo();
            foreach ($files as $file => $info) {
                if (!$upload->_upload->isUploaded($file)) {
                    echo "Chua chon file";
                }
            }
            $upload->_upload->receive();
        }
        $this->view->form = $form;
    }

}
