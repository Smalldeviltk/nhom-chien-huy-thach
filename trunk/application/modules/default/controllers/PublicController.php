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
            //check validate error tu form
            $validator = new Default_Form_ValidateLogin($this->_arrParam);
            if ($validator->isVaild()) {
                $this->view->errors = $validator->getMessageErrors();
                $this->view->Item = $validator->getData();
            } else {
                $auth = new System_Auth();

                if ($auth->login($this->_arrParam) == true) {
                    //dang nhap thanh cong
                }
            }
        }
    }

    public function logoutAction() {
        $auth = new System_Auth();
        $auth->logout();
        $this->_redirect('/default');
    }

}