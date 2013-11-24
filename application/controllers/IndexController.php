<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        
    }

    public function registerAction()
    {
        // action body
        $form = new Application_Form_Register();
        $form->submit->setLabel('Đăng kí');
        $this->view->form = $form;





        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $email = $form->getValue('email');
                $pass = $form->getValue('pass');
                $name = $form->getValue('name');
                $phone = $form->getValue('phone');
                $address = $form->getValue('address');
                $customer = new Application_Model_DbTable_Customer();
                $customer->Register($email, $pass, $name, $phone, $address);
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
     
    }

    public function loginAction()
    {
        // action body
                $form = new Application_Form_Login();
        $form->submit->setLabel('Đăng nhập');
        $this->view->form = $form;
    }


}





