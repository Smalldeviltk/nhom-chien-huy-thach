<?php

class PublicController extends Zend_Controller_Action {

    private $_arrParam;

    public function init() {
        parent::init();
        $this->_arrParam = $this->_request->getParams();
        $this->view->arrParam = $this->_arrParam;
    }

    public function loginAction() {

        if ($this->_request->isPost()) {
            $auth = new QuocHuy_System_Auth();
            if ($auth->login($this->_arrParam) == true) {
                    //dang nhap thanh cong
                    
                    $this->_redirect('/admin');
                } else {
                    $this->_redirect('/default');
                }
        }
    }

    public function logoutAction() {
        $auth = new Qhuyonline_System_Auth();
        $auth->logout();
        $this->_redirect('/default');
    }

}
