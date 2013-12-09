<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Thiep
 *
 * @author Mr
 */
class Admin_Model_Catalogue extends Zend_Db_Table_Abstract {

    //put your code here
    protected $_name = "catalogue";
    protected $_primary = "id";

    public function listAllThiep($where = null, $auth = null) {
        $query = $this->select();
        $query->from('catalogue');
        return $query;
    }

    public function detailThiep($where = null, $auth = null) {
        $query = $this->select();
        $query->from('catalogue');
        if ($where != null)
            $query->where($where);
        $data = $this->fetchall($query);
        return $data->toArray();
    }

    function fetchThiep($id) {
        return $this->fetchRow("id = '" . $id . "'");
    }

    public function addThiep($masanpham, $tensanpham, $thongtin, $gia, $hinhanh) {
        $this->insert(array(
            'masanpham' => $masanpham,
            'tensanpham' => $tensanpham,
            'thongtin' => $thongtin,
            'gia' => $gia,
            'hinhanh' => $hinhanh
        ));
    }

    public function delteteThiep($id) {
        $where = "id=" . $id;
        $this->delete($where);
    }

    public function updateThiep($masanpham, $tensanpham, $thongtin, $gia, $hinhanh, $id) {
        $where = "id=" . $id;
        $data = array(
            'masanpham' => $masanpham,
            'tensanpham' => $tensanpham,
            'thongtin' => $thongtin,
            'gia' => $gia,
            'hinhanh' => $hinhanh
        );
        $this->update($data, $where);
    }

}
