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
class Admin_LienheController extends Zend_Controller_Action {

    //put your code here
    private $thiepTable;
    private $thiepForm;

    public function init() {
        $this->thiepTable = new Application_Model_LienHe();
    }

    public function indexAction() {
        $adapter = new Zend_Paginator_Adapter_DbSelect($this->thiepTable->listAll());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(9);
        $paginator->setPageRange(5);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
    }

    public function deleteAction() {
        if (isset($_GET['del']) && !empty($_GET['id'])) {
            $this->view->detail = $this->thiepTable->delteteThiep($_GET['id']);
            $this->_redirect('/admin/lienhe');
        }
    }

}

?>
