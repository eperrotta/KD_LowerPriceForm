<?php
class Kendesign_Lowerpriceform_Block_Adminhtml_Lowerpriceform extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_lowerpriceform';
    $this->_blockGroup = 'lowerpriceform';
    $this->_headerText = Mage::helper('lowerpriceform')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('lowerpriceform')->__('Add Item');
    parent::__construct();
  }
}