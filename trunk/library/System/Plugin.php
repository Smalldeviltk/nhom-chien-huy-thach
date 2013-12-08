<?php

class System_Plugin extends Zend_Controller_Plugin_Abstract {

    public function preDispatch(Zend_Controller_Request_Abstract $request) {

        /*
         * Kiem tra xem co phai dang truy phan Admin hay khong
         */
        $controllerName = $request->getControllerName();
        $flagAdmin = false;
        if ($controllerName == 'admin') {
            $flagAdmin = true;
        } else {
            $tmp = explode('-', $controllerName);
            if (current($tmp) == 'admin') {
                $flagAdmin = true;
            }
        }


        if ($flagAdmin) {
            $request->setModuleName('default');
            $request->setControllerName('public');
            $request->setActionName('login');
        }
    }

}