<?php

class ContactController extends Zend_Controller_Action {

    //put your code here

    public function init() {
        
    }

    public function indexAction() {
        $formLienHe = new Application_Form_LienHe();
        $this->view->formLienHe = $formLienHe;
        $formLienHe->submit->setLabel('Liên hệ');
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($formLienHe->isValid($formData)) {
                $email = $formLienHe->getValue('email');
                $hoten = $formLienHe->getValue('hoten');
                $sdt = $formLienHe->getValue('sdt');
                $diachi = $formLienHe->getValue('diachi');
                $noidung = $formLienHe->getValue('noidung');
                $lienhe=new Application_Model_LienHe();
                $lienhe->Them($email, $hoten, $sdt, $diachi, $noidung);
                header ("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
            } else {
                $formLienHe->populate($formData);
            }
        }
       
    }

}

?>
