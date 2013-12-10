<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Mr
 */
class Application_Model_User extends Zend_Db_Table_Abstract {

    protected $_name = "user";
    protected $_primary = "id";

    public function listall() {
        $query = $this->select();
        $query->from($this->_name, array('id', 'username', 'level'));
        return $query;
    }

    public function listUser($where = null, $auth = null) {
        $query = $this->select();
        $query->from('user');
        if ($where != null)
            $query->where($where);
        $data = $this->fetchall($query);
        return $query;
    }
    
       function fetchThiep($id) {
        return $this->fetchRow("id = '" . $id . "'");
    }

    public function detailUser($where = null, $auth = null) {
        $query = $this->select();
        $query->from('user');
        if ($where != null)
            $query->where($where);
        $data = $this->fetchall($query);
        return $data->toArray();
    }

    public function addUser($username, $password, $level) {
        $this->insert(array(
            'username' => $username,
            'password' => $password,
            'level' => $level
        ));
    }

    public function delteteUser($id) {
        $where = "id=" . $id;
        $this->delete($where);
    }

    public function updateThiep($username, $password, $level, $id) {
        $where = "id=" . $id;
        $data = array(
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        $this->update($data, $where);
    }

}

?>
