<?php
class Kendesign_Lowerpriceform_Block_Lowerpriceform extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getLowerpriceform()     
     { 
        if (!$this->hasData('lowerpriceform')) {
            $this->setData('lowerpriceform', Mage::registry('lowerpriceform'));
        }
        return $this->getData('lowerpriceform');
        
    }
}