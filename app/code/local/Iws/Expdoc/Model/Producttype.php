<?php
class Iws_Expdoc_Model_Producttype{
public function toOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('Configurable Product')),array('value'=>0,'label'=>Mage::helper('expdoc')->__('Simple Product')),);}
}