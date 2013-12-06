<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Thiep
 *
 * @author Mr
 */
class Application_Model_DbTable_Thiep extends Zend_Db_Table_Abstract {

    //put your code here
    protected $_name = 'thiep';

    public function listThiep($where=null,$auth=null) {
        $query = $this->select();
        $query->from('thiep');
        if($where !=null)$query->where($where);
        $data = $this->fetchall($query);
        return $data->toArray();
    }

}

?>
