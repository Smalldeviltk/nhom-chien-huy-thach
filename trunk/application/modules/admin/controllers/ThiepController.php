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
class Admin_ThiepController extends Zend_Controller_Action {

    //put your code here
    private $thiepTable;

    public function init() {
        $this->thiepTable = new Admin_Model_Thiep();
    }

    public function indexAction() {
        $adapter = new Zend_Paginator_Adapter_DbSelect($this->thiepTable->listAllThiep());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(3);
        $paginator->setPageRange(3);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
    }
    
    public function detailAction() {
        if (isset($_GET['ctsp']) && !empty($_GET['id'])) {
            $this->view->detail = $this->thiepTable->detailThiep("id = '" . $_GET['id'] . "'");
        }
    }

}

?>
