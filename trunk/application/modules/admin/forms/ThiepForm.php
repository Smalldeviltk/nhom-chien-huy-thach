<?php

class Admin_Form_ThiepForm extends Zend_Form {

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



        $this->setname('thiep');
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
        $masanpham = $this->createElement("text", "masanpham", array(
            "label" => "Mã sản phẩm (*) ",
        ));
        $masanpham->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);


        $tensanpham = new Zend_Form_Element_Text('tensanpham');
        $tensanpham->setLabel('Tên sản phẩm: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);

        //name
        $thongtin = new Zend_Form_Element_Textarea('thongtin');
        $thongtin->setLabel('Thông tin: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setOptions(array(
                    'rows' => '3',
                    'cols' => '30',
                ))
                ->setDecorators($elementDecoration);
        //sdt
        $gia = new Zend_Form_Element_Text('gia');
        $gia->setLabel('Giá: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //address
        $hinhanh = new Zend_Form_Element_Text('hinhanh');
        $hinhanh->setLabel('Hình ảnh: ')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty')
                ->setDecorators($elementDecoration);
        //submit
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton')
                ->setDecorators($buttonDecoration);
        $this->setDecorators($formDecoration);
        $this->addElements(array($masanpham, $tensanpham, $thongtin, $gia, $hinhanh, $submit));
    }

}
