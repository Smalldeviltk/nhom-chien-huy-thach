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
        $db = Zend_Db_Table::getDefaultAdapter();
//        $db->query("DROP TABLE toroi");
//        $db->query("DROP TABLE thiep");
//        $db->query("DROP TABLE namecard");
//        $db->query("DROP TABLE catalogue");
//        $db->query("DROP TABLE lich");
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
        $db->query("CREATE TABLE IF NOT EXISTS `lienhe` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `hoten` varchar(100) NOT NULL,
                `email` varchar(100) NOT NULL,
                `sdt` varchar(100) NOT NULL,
                `diachi` varchar(100) NOT NULL,
                `noidung` varchar(100) NOT NULL,
                PRIMARY KEY (`id`)
		)");
        $this->_redirect('/admin');
    }

}
