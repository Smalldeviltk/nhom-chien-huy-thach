<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnhController
 *
 * @author Mr
 */
class Admin_AnhController extends Zend_Controller_Action {

    //put your code here
    public function indexAction() {
        define('PATH', APPLICATION_PATH . '/../upload/image'); // Khai báo đường đẫn đến thư mục
        $files = array();
        $dir = opendir(PATH);
        while ($f = readdir($dir)) {
            if (eregi("\.jpg|\.gif|\.png", $f))
                array_push($files, $f);
        }
        closedir($dir);
        $paginator = Zend_Paginator::factory($files);
        $paginator->setItemCountPerPage(20);
        $paginator->setPageRange(10);
        $currentPage = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($currentPage);

        $this->view->files = $paginator;
    }

}
