<?php

class Application_Form_LienHe extends Zend_Form {

    public function init() {
        /* Form Elements & Other Definitions Here ... */
        $elementDecoration = array(
            'ViewHelper',
            'Description',
            'Errors',
            array(array('data' => 'HtmlTag'), array('tag' => 'td', 'valign' => 'TOP')),
            array('Label', array('tag' => 'td')),
            array('Errors'),
            array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
        );
        $buttonDecoration = array(
            'ViewHelper',
            array(array('data' => 'HtmlTag'), array('tag' => 'td')),
            array(array('label' => 'HtmlTag'), array('tag' => 'td', 'placement' => 'prepend')),
            array(array('row' => 'HtmlTag'), array('tag' => 'tr')),
        );
        $formDecoration = array(
            'FormElements',
            array(array('data' => 'HtmlTag'), array('tag' => 'table', 'class' => 'forms')),
            'Form'
        );



        $this->setname('lienhe');
        //id
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');
        //email
        $email = new Zend_Form_Element_Text('email');
        $emailValidator = new Zend_Validate_NotEmpty();
        $emailValidator->setMessage('Bạn vui lòng nhập email');
        $email->setLabel('Email ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator($emailValidator)
                ->setDecorators($elementDecoration);
        //hoten
        $hoten = new Zend_Form_Element_Text('hoten');
        $htValidator = new Zend_Validate_NotEmpty();
        $htValidator->setMessage('Bạn vui lòng nhập họ tên');
        $hoten->setLabel('Họ tên ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator($htValidator)
                ->setDecorators($elementDecoration);

        //sdt
        $sdt = new Zend_Form_Element_Text("sdt");
        $dtValidator = new Zend_Validate_NotEmpty();
        $dtValidator->setMessage('Bạn vui lòng nhập số điện thoại');
        $sdt->setLabel('Điện thoại')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator($dtValidator)
                ->setDecorators($elementDecoration);
        //diachi
        $diachi = new Zend_Form_Element_Textarea('diachi');
        $dcValidator = new Zend_Validate_NotEmpty();
        $dcValidator->setMessage('Bạn vui lòng nhập địa chỉ');
        $diachi->setLabel('Địa chỉ ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator($dcValidator)
                ->setOptions(array(
                    'rows' => '5',
                    'cols' => '30',
                ))
                ->setDecorators($elementDecoration);
        //noidung
        $noidung = new Zend_Form_Element_Textarea('noidung');
        $ndValidator = new Zend_Validate_NotEmpty();
        $ndValidator->setMessage('Bạn vui lòng nhập nội dung');
        $noidung->setLabel('Nội dung ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator($ndValidator)
                ->setOptions(array(
                    'rows' => '5',
                    'cols' => '30',
                ))
                ->setDecorators($elementDecoration);
        //submit
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton')
                ->setDecorators($buttonDecoration);
        $this->setDecorators($formDecoration);
        $this->addElements(array($id, $email, $hoten, $sdt, $diachi, $noidung, $submit));
    }

}

