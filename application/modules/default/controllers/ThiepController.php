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
class ThiepController extends Zend_Controller_Action {

    //put your code here
    private $thiepTable;

    public function init() {
        $this->thiepTable = new Application_Model_Thiep();
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
        $this->_arrParam = $this->_request->getParams();
        $id = $this->_arrParam['id'];
        if($id === null) $id = 1;
        $this->view->detail = $this->thiepTable->fetchThiep($id);
    }

}

?>
