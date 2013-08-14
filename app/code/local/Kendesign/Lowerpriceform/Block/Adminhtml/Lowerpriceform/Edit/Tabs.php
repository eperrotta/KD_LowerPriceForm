<?php

class Kendesign_Lowerpriceform_Block_Adminhtml_Lowerpriceform_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('lowerpriceform_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('lowerpriceform')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('lowerpriceform')->__('Item Information'),
          'title'     => Mage::helper('lowerpriceform')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('lowerpriceform/adminhtml_lowerpriceform_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}