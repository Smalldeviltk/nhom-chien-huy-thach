<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadController
 *
 * @author Mr
 */
class Admin_UploadController extends Zend_Controller_Action {

    //put your code here
    public function indexAction() {
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

}
