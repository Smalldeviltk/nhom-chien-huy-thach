<?php

class Application_Model_LienHe extends Zend_Db_Table_Abstract
{

    protected $_name = 'lienhe';
    public function Them($email, $hoten, $sdt, $diachi, $noidung) {
        $data = array(
            'email' => $email,
            'hoten' => $hoten,
            'sdt' => $sdt,
            'diachi' => $diachi,
            'noidung' =>$noidung,            
        );
        $this->insert($data);
    }
    
    public function listAll($where = null, $auth = null) {
        $query = $this->select();
        $query->from('lienhe');
        return $query;
    }
    
    public function delteteThiep($id) {
        $where = "id=" . $id;
        $this->delete($where);
    }


}

