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
class Application_Model_DbTable_User extends Zend_Db_Table_Abstract {

    //put your code here
    protected $_name = 'user';

    public function listUser($where=null,$auth=null) {
        $query = $this->select();
        $query->from('user');
        if($where !=null)$query->where($where);
        $data = $this->fetchall($query);
        return $data->toArray();
    }

}

?>
