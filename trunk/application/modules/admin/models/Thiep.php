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
class Admin_Model_Thiep extends Zend_Db_Table_Abstract {

    //put your code here
    protected $_name = "thiep";
    protected $_primary = "id";

    public function listAllThiep($where = null, $auth = null) {
        $query = $this->select();
        $query->from('thiep');
        return $query;
    }

    public function detailThiep($where = null, $auth = null) {
        $query = $this->select();
        $query->from('thiep');
        if ($where != null)
            $query->where($where);
        $data = $this->fetchall($query);
        return $data->toArray();
    }

    function fetchThiep($id) {
        return $this->fetchRow("id = '" . $id . "'");
    }

    public function addThiep($param) {
        
    }

}
