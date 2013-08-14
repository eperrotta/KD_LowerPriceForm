<?php

class Kendesign_Lowerpriceform_Model_Dateformat extends Mage_Core_Model_Abstract
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'d/m/Y', 'label'=>'d/m/Y'),
			array('value'=>'m/d/Y', 'label'=>'m/d/Y'),
			array('value'=>'Y-m-d', 'label'=>'Y-m-d'),
		);
	}

}