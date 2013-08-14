<?php

$installer = $this;

$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS {$this->getTable('lowerpriceform')};
CREATE TABLE {$this->getTable('lowerpriceform')} (
  `lowerpriceform_id` int(11) unsigned NOT NULL auto_increment,
  `lower_price_url` varchar(255) NOT NULL default '',
  `lower_price_my_price` decimal(7,2) NOT NULL default 0,
  `lower_price_price` decimal(7,2) NOT NULL default 0,
  `lower_price_shipping` decimal(7,2) NOT NULL default 0,
  `lower_price_date` date NOT NULL,
  `lower_price_sku` varchar(32) NOT NULL default '',
  PRIMARY KEY (`lowerpriceform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup(); 