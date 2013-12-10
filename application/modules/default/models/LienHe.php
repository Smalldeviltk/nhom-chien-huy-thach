<?php

class Default_Model_LienHe extends Zend_Db_Table_Abstract
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
    


}

