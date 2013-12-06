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
        $this->thiepTable = new Application_Model_DbTable_Thiep();
    }

    public function indexAction() {
        if (isset($_GET['ct']) && !empty($_GET['id'])) {//sua
            $thiepSelect = $this->thiepTable->listThiep("id = '" . $_GET['id'] . "'");
        } else {
            $thiepSelect = $this->thiepTable->listThiep();
        }

        $this->view->thieps = $thiepSelect;
    }

}

?>
