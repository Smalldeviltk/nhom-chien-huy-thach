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
    //private $userTbl;

    public function init() {
        //$this->loadLayout('admin', 'layout');
        //$this->loadCss('admin', 'user');
        //$this->userTbl = new Application_Model_DbTable_User();
        //$this->studentTbl = new Admin_Model_Student();
        //$this->userForm = new Admin_Form_UserForm();
        //$this->auth = Zend_Auth::getInstance();
        //$this->storage = $this->auth->getStorage()->read();
    }

    public function indexAction() {
//        if (isset($_GET['ct']) && !empty($_GET['id'])) {//sua
//            $userSelect = $this->userTbl->listUser("id = '" . $_GET['id'] . "'");
//        } else {
//            $userSelect = $this->userTbl->listUser();
//        }
        //xu ly phan trang
//        $paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbSelect($userSelect));
////        if ($paginator->getTotalItemCount() == 0) {
////            $this->jDialogMessage('Thông báo', 'Không tìm thấy (!_!) :( ');
////        }
//
//        $paginator->setItemCountPerPage(3);
//        $paginator->setCurrentPageNumber($this->_getParam('page', 1));



        //$this->view->paginator = $paginator;

//        $this->view->user = $userSelect;
        $muser = new Admin_Model_User;
//        if (isset($_GET['ct']) && !empty($_GET['id'])) {//sua
//            $userSelect = $this->$muser->listUser("id = '" . $_GET['id'] . "'");
//        } else {
//            $userSelect = $this->$muser->listUser();
//        }
        $adapter = new Zend_Paginator_Adapter_DbSelect($muser->listUser());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(3);
        $paginator->setPageRange(3);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
        //xu ly tim kiem
//        if (isset($_GET['search_box_sumit']) && isset($_GET['student'])) {
//            if (empty($_GET['search_box_text'])) {
//                $this->jDialogMessage('Thông báo', 'Hãy nhập vào tên sinh viên hoặc mã sinh viên (username) trước!!!');
//            } else {
//                $userSelect = $this->userTbl->listUser(
//                        "quyen ='sinhvien' and (
//    					u.ten like '%" . $_GET['search_box_text'] . "%' or
//    					u.username like '%" . $_GET['search_box_text'] . "%')"
//                );
//            }
//        }
        //
        //xu ly loc
//        if (isset($_GET['tbn_filter']) && $_GET['tbn_cate'] != "0" && isset($_GET['student'])) {
//            $userSelect = $this->userTbl->listUser("quyen ='sinhvien' and lop.tenLop = '" . $_GET['tbn_cate'] . "'");
//        }
        //
        
        //$this->view->tenLop = $this->userTbl->getAllLop();
        //
        // === Forware when del
//        if (isset($_GET['del'])) {
//            $this->_forward('delete', 'user', 'admin');
//        }
    }

}

?>
