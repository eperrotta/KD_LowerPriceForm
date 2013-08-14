<?php

class Kendesign_Lowerpriceform_Model_Mysql4_Lowerpriceform_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('lowerpriceform/lowerpriceform');
    }
}