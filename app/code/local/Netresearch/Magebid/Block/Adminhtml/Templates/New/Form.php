<?php
class Netresearch_Magebid_Block_Adminhtml_Templates_New_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();

        $fieldset = $form->addFieldset('new_magebid', array('legend' => Mage::helper('magebid')->__('Item Details')));
		
        $fieldset->addField('content_name', 'text', array(
            'name'      => 'content_name',
            'title'     => Mage::helper('magebid')->__('Title'),
            'label'     => Mage::helper('magebid')->__('Title'),
            'maxlength' => '50',
			'style'		=> 'width:98%;',			
            'required'  => true,
        ));		

        $fieldset->addField('content_type', 'select', array(
            'name'      => 'content_type',
            'title'     => Mage::helper('magebid')->__('Type'),
            'label'     => Mage::helper('magebid')->__('Type'),
			'style'		=> 'width:100%;',	
			'values'	=> Mage::getModel('magebid/templates')->getTemplateTypes(),		
            'required'  => true,
        ));		

        $fieldset->addField('content', 'textarea', array(
            'name'      => 'content',
            'title'     => Mage::helper('magebid')->__('Content'),
            'label'     => Mage::helper('magebid')->__('Content'),
            'style'     => 'width: 700px; height: 400px;',
            'required'  => true,
        ));


        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');
        $form->setAction($this->getUrl('*/*/post'));

        $this->setForm($form);
    }
}
