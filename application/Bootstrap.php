<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initDb() {
        $db = $this->getPluginResource('db')->getDbAdapter();
        Zend_Registry::set('db', $db);

//        $dbOption = $this->getOption('resources');
//        $dbOption = $dbOption['db'];
//
//        // Setup database
//        $db = Zend_Db::factory($dbOption['adapter'], $dbOption['params']);
//
//        $db->setFetchMode(Zend_Db::FETCH_ASSOC);
//        $db->query("SET NAMES 'utf8'");
//        $db->query("SET CHARACTER SET 'utf8'");
//
//        Zend_Registry::set('connectDB', $db);

        $db->query("CREATE TABLE IF NOT EXISTS `usersss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
)");

        //Khi thiet lap che do nay model moi co the su dung duoc
//        Zend_Db_Table::setDefaultAdapter($db);
//        // Return it, so that it can be stored by the bootstrap
//        return $db;
    }

    function _initSession() {
        Zend_Session::start();
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
