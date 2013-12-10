<?php

class Application_Form_UserForm extends Zend_Form {

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



        $this->setname('user');
        //id
        //email
//        $masanpham = new Zend_Form_Element_Text('masanpham');
//        $masanpham->setLabel('Mã sản phẩm: ')
//                ->setRequired(true)
//                ->addFilter('StripTags')
//                ->addFilter('StringTrim')
//                ->addValidator('NotEmpty')
//                ->setDecorators($elementDecoration);
//        //pass
        $username = $this->createElement("text", "username", array(
            "label" => "User name (*) ",
        ));
        $username->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);


        $password = new Zend_Form_Element_Password('password');
        $password->setLabel('Mật khẩu (*) ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);

        //name
        $level = new Zend_Form_Element_Text('level');
        $level->setLabel('Cấp độ (*) ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //sdt
        //submit
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton')
                ->setDecorators($buttonDecoration);
        $this->setDecorators($formDecoration);
        $this->addElements(array($username, $password, $level, $submit));
    }

}
