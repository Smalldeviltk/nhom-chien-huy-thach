<?php

class QuocHuy_System_Plugin extends Zend_Controller_Plugin_Abstract {

    public function preDispatch(Zend_Controller_Request_Abstract $request) {
        /*
         * Kiem tra xem co phai dang truy phan Admin hay khong
         */
        $controllerName = $request->getModuleName();
        $flagAdmin = false;
        $auth = Zend_Auth::getInstance();
        if (!$auth->hasIdentity()) {
            if ($controllerName == 'admin') {
                $flagAdmin = true;
            }
            if ($flagAdmin) {

                $request->setModuleName('default');
                $request->setControllerName('public');
                $request->setActionName('login');
            }
        }
    }

}
