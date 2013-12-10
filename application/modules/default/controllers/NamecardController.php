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
class NamecardController extends Zend_Controller_Action {

    //put your code here
    private $Table;

    public function init() {
        $this->Table = new Application_Model_Namecard();
    }

    public function indexAction() {
        $adapter = new Zend_Paginator_Adapter_DbSelect($this->Table->listAllThiep());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(9);
        $paginator->setPageRange(5);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data = $paginator;
    }
    
    public function detailAction() {
        if (isset($_GET['ctsp']) && !empty($_GET['id'])) {
            $this->view->detail = $this->Table->fetchThiep($_GET['id'] );
        }
    }

}

?>
