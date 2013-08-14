<?php

class Kendesign_Lowerpriceform_Model_Storeaddresses extends Mage_Core_Model_Abstract
{
	public function toOptionArray()
	{
		$arrayEmail = Mage::getStoreConfig('trans_email');
		$arrayList = array();
		foreach($arrayEmail as $email_id => $emailobj)
		{
			$arrayList[] = array('value' => $email_id, 'label' => $emailobj["name"]);
		}
		return $arrayList;
	}
}