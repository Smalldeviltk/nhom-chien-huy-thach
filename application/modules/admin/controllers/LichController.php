<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThiepController
 *
 * @author Mr
 */
class Admin_LichController extends Zend_Controller_Action {

    //put your code here
    private $thiepTable;
    private $thiepForm;

    public function init() {
        $this->thiepTable = new Application_Model_Lich();
        $this->thiepForm = new Application_Form_ThiepForm();
    }

    public function indexAction() {
        $adapter = new Zend_Paginator_Adapter_DbSelect($this->thiepTable->listAllThiep());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(9);
        $paginator->setPageRange(5);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
    }

    public function detailAction() {
        if (isset($_GET['ctsp']) && !empty($_GET['id'])) {
            $this->view->detail = $this->thiepTable->fetchThiep($_GET['id']);
        }
    }

    public function addAction() {
        if (isset($_GET['edit']) && !empty($_GET['id'])) {//sua
            $form = new Application_Form_ThiepForm();
            $form->submit->setLabel('Update sản phẩm');
            $this->view->form = $form;
            $thiep = $this->thiepTable->fetchThiep($_GET['id']);
            $id = $_GET['id'];
            $this->view->masp = $thiep['masanpham'];
            if ($this->getRequest()->isPost()) {
                $formData = $this->getRequest()->getPost();
                if ($form->isValid($formData)) {
                    $masanpham = $this->getRequest()->getPost('masanpham');
                    $tensanpham = $this->getRequest()->getPost('tensanpham');
                    $thongtin = $this->getRequest()->getPost('thongtin');
                    $gia = $this->getRequest()->getPost('gia');
                    $hinhanh = $this->getRequest()->getPost('hinhanh');
                    $this->thiepTable->updateThiep($masanpham, $tensanpham, $thongtin, $gia, $hinhanh, $id);
                    $this->_forward('index', 'lich', 'admin');
                } else {
                    $form->populate($formData);
                }
            }
        } else {
            $form = new Application_Form_ThiepForm();
            $form->submit->setLabel('Thêm sản phẩm');
            $this->view->form = $form;

            if ($this->getRequest()->isPost()) {
                $formData = $this->getRequest()->getPost();
                if ($form->isValid($formData)) {
                    $masanpham = $this->getRequest()->getPost('masanpham');
                    $tensanpham = $this->getRequest()->getPost('tensanpham');
                    $thongtin = $this->getRequest()->getPost('thongtin');
                    $gia = $this->getRequest()->getPost('gia');
                    $hinhanh = $this->getRequest()->getPost('hinhanh');
                    $this->thiepTable->addThiep($masanpham, $tensanpham, $thongtin, $gia, $hinhanh);
                    $this->_forward('index', 'lich', 'admin');
                } else {
                    $form->populate($formData);
                }
            }
        }
    }

    public function deleteAction() {
        if (isset($_GET['del']) && !empty($_GET['id'])) {
            $this->view->detail = $this->thiepTable->delteteThiep($_GET['id']);
            $this->_redirect('/admin/lich');
        }
    }

}

?>
