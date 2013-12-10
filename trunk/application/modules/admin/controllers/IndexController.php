<?php

class Admin_IndexController extends Zend_Controller_Action {

    public function indexAction() {
        $auth = Zend_Auth::getInstance();
        $infoUser = $auth->getIdentity();
        $this->view->fullName = $infoUser->username;
    }

    public function logoutAction() {
        Zend_Auth::getInstance()->clearIdentity();
    }
    
    public function installAction() {
//        $thiep = new Application_Model_DbTable_Thiep();
//        $this->view->thiep = $thiep->fetchAll();
		$db = Zend_Db_Table::getDefaultAdapter();
		$db->query("CREATE TABLE IF NOT EXISTS `user` (
		`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		`username` varchar(50) NOT NULL,
		`password` char(32) NOT NULL,
		`level` int(1) NOT NULL DEFAULT '1',
		PRIMARY KEY (`id`)
		)");
		$db->query("CREATE TABLE IF NOT EXISTS `toroi` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`hinhanh` text,
		`masanpham` text NOT NULL,
		`tensanpham` text NOT NULL,
		`thongtin` text,
		`gia` text,
		PRIMARY KEY (`id`)
		)");
		$db->query("CREATE TABLE IF NOT EXISTS `thiep` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`hinhanh` text,
		`masanpham` text NOT NULL,
		`tensanpham` text NOT NULL,
		`thongtin` text,
		`gia` text,
		PRIMARY KEY (`id`)
		)");
                $db->query("INSERT INTO `thiep` ( `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
		('MAU_1.jpg', 'SP 01', 'Mau thiep so 1', 'thong tin chi day', '5000'),
		('MAU_1.jpg', 'Sp02', 'sáº£n pháº©m sá»‘ 2', 'cai cc', '10000'),
		('MAU_1.jpg', 'sp03', 'San pham so 3', 'cai con cat', '100000'),
		('MAU_1.jpg', 'sp04', 'san pham so 4', 'tÃ¢sfdas', '12312321'),
		('MAU_1.jpg', 'Sp05', 'Sáº£n pháº©m sá»‘ 5', 'tttt', '5000');");
		$db->query("CREATE TABLE IF NOT EXISTS `namecard` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`hinhanh` text,
		`masanpham` text NOT NULL,
		`tensanpham` text NOT NULL,
		`thongtin` text,
		`gia` text,
		PRIMARY KEY (`id`)
		)");
		$db->query("CREATE TABLE IF NOT EXISTS `lich` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`hinhanh` text,
		`masanpham` text NOT NULL,
		`tensanpham` text NOT NULL,
		`thongtin` text,
		`gia` text,
		PRIMARY KEY (`id`)
		)");
		$db->query("CREATE TABLE IF NOT EXISTS `catalogue` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`hinhanh` text,
		`masanpham` text NOT NULL,
		`tensanpham` text NOT NULL,
		`thongtin` text,
		`gia` text,
		PRIMARY KEY (`id`)
		)");
		$this->_redirect('/admin');
    }

}
