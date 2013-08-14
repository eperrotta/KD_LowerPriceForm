<?php

class Kendesign_Lowerpriceform_Block_Adminhtml_Lowerpriceform_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('lowerpriceform_form', array('legend'=>Mage::helper('lowerpriceform')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('lowerpriceform')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('lowerpriceform')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('lowerpriceform')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('lowerpriceform')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('lowerpriceform')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('lowerpriceform')->__('Content'),
          'title'     => Mage::helper('lowerpriceform')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getLowerpriceformData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getLowerpriceformData());
          Mage::getSingleton('adminhtml/session')->setLowerpriceformData(null);
      } elseif ( Mage::registry('lowerpriceform_data') ) {
          $form->setValues(Mage::registry('lowerpriceform_data')->getData());
      }
      return parent::_prepareForm();
  }
}