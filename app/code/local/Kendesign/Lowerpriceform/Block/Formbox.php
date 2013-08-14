<?php
class Kendesign_Lowerpriceform_Block_Formbox extends Mage_Core_Block_Template
{
   public function getFormAction()
    {
        return Mage::getUrl('lowerpriceform/index/sendfeedback');
    } 
}