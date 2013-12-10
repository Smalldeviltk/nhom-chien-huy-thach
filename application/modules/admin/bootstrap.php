<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bootstrap
 *
 * @author Mr
 */
class Admin_Bootstrap extends Zend_Application_Module_Bootstrap {

    public function _initAutoloader() {
        //new va da dc dang ky trong zend_registry
        
    }
    
    protected function _initAutoload() {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(array(
            'module' => 'error',
            'controller' => 'error',
            'action' => 'error'
        )));
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Default_',
            'basePath' => dirname(__FILE__),
        ));
        return $autoloader;
    }

    protected function _initLoadPlugin() {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new QuocHuy_System_Plugin());
    }


}
