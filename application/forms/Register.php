<?php

class Application_Form_Register extends Zend_Form {

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



        $this->setname('customer');
        //id
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');
        //email
        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //pass
        $pass = new Zend_Form_Element_Password('pass');
        $pass->setLabel('Mật khẩu: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);

        //name
        $name = new Zend_Form_Element_Text('name');
        $name->setLabel('Tên: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //sdt
        $phone = new Zend_Form_Element_Text('phone');
        $phone->setLabel('Số điện thoại: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //address
        $address = new Zend_Form_Element_Textarea('address');
        $address->setLabel('Địa chỉ: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
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
        $this->addElements(array($id, $email, $pass, $name, $phone, $address, $submit));
    }

}

