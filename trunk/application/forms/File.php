<?php

class Application_Form_File extends Zend_Form {

    public function init() {
        $this->setAction('')->setMethod('post');
        $this->setAttrib('enctype', 'multipart/form-data');
        $file = $this->createElement('file', 'file', array(
            'label' => 'Choose a file',
        ));
        $submit = $this->createElement('submit', 'Upload');

        $this->addElement($file)
                ->addElement($submit);
    }

}
