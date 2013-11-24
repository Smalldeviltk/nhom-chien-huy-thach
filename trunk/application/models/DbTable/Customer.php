<?php

class Application_Model_DbTable_Customer extends Zend_Db_Table_Abstract {

    protected $_name = 'customer';

    public function getCustomer($id) {
        $id = (int) $id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row $id");
        }
        return $row->toArray();
    }

    public function Register($email, $pass, $name, $phone, $adddress) {
        $data = array(
            'email' => $email,
            'pass' => $pass,
            'name' => $name,
            'phone' => $phone,
            'address' =>$adddress,            
        );
        $this->insert($data);
    }

}



