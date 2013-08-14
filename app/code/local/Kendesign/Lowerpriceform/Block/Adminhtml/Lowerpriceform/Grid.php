<?php

class Kendesign_Lowerpriceform_Block_Adminhtml_Lowerpriceform_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('lowerpriceformGrid');
      $this->setDefaultSort('lowerpriceform_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('lowerpriceform/lowerpriceform')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('lowerpriceform_id', array(
          'header'    => Mage::helper('lowerpriceform')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'lowerpriceform_id',
      ));
      
      $this->addColumn('lower_price_sku', array(
          'header'    => Mage::helper('lowerpriceform')->__('SKU'),
          'align'     =>'left',
          'index'     => 'lower_price_sku',
      ));

      $this->addColumn('lower_price_my_price', array(
          'header'    => Mage::helper('lowerpriceform')->__('My price'),
          'align'     =>'left',
          'index'     => 'lower_price_my_price',
      ));

      $this->addColumn('lower_price_price', array(
          'header'    => Mage::helper('lowerpriceform')->__('Competitor price'),
          'align'     =>'left',
          'index'     => 'lower_price_price',
      ));

      $this->addColumn('lower_price_url', array(
          'header'    => Mage::helper('lowerpriceform')->__('Competitor Url'),
          'align'     =>'left',
          'index'     => 'lower_price_url',
      ));

      $this->addColumn('lower_price_shipping', array(
          'header'    => Mage::helper('lowerpriceform')->__('Competitor shipping cost'),
          'align'     =>'left',
          'index'     => 'lower_price_shipping',
      ));

      $this->addColumn('lower_price_date', array(
          'header'    => Mage::helper('lowerpriceform')->__('Date of the price'),
          'align'     =>'left',
          'index'     => 'lower_price_date',
      ));

	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('lowerpriceform')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('lowerpriceform')->__('Delete'),
                        'url'       => array('base'=> '*/*/delete'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));

      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('lowerpriceform_id');
        $this->getMassactionBlock()->setFormFieldName('lowerpriceform');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('lowerpriceform')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('lowerpriceform')->__('Are you sure?')
        ));
        return $this;
    }

  public function getRowUrl($row)
  {
      //return $this->getUrl('*/*/edit', array('id' => $row->getId()));
      return;
  }

}