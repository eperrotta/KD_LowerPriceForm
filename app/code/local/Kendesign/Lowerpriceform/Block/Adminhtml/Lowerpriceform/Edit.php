<?php

class Kendesign_Lowerpriceform_Block_Adminhtml_Lowerpriceform_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'lowerpriceform';
        $this->_controller = 'adminhtml_lowerpriceform';
        
        $this->_updateButton('save', 'label', Mage::helper('lowerpriceform')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('lowerpriceform')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('lowerpriceform_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'lowerpriceform_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'lowerpriceform_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('lowerpriceform_data') && Mage::registry('lowerpriceform_data')->getId() ) {
            return Mage::helper('lowerpriceform')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('lowerpriceform_data')->getTitle()));
        } else {
            return Mage::helper('lowerpriceform')->__('Add Item');
        }
    }
}