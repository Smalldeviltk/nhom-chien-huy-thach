<?php

class QuocHuy_System_Auth {

    private $_messages;

    public function login($arrParam = null, $options = null) {
        //1. Lay ket noi voi database
        $db = Zend_Db_Table::getDefaultAdapter();

        //2. 
        $authAdapter = new Zend_Auth_Adapter_DbTable($db);
        $authAdapter->setTableName('user')
                ->setIdentityColumn('username')
                ->setCredentialColumn('password');

        //3.
        $authAdapter->setIdentity($arrParam['username']);
        $authAdapter->setCredential($arrParam['password']);

        //4.
        $select = $authAdapter->getDbSelect();

        //5.
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($authAdapter);
        $flag = false;

        if ($result->isValid()) {
            $returnColumns = array('id', 'username', 'level', 'password');
            $omitColumns = array('password');
            $data = $authAdapter->getResultRowObject(null, $omitColumns);
            $auth->getStorage()->write($data);
            $flag = true;
        } else {
            $this->_messages = $result->getMessages();
        }
        return $flag;
    }

    public function getMessages() {
        return $this->_messages;
    }

    public function logout() {
        $auth = Zend_Auth::getInstance();
        $auth->clearIdentity();
    }

}
