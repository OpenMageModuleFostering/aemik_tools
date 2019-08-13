<?php
class Iws_Expdoc_Model_Doc{
public function toOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('XML')),array('value'=>2,'label'=>Mage::helper('expdoc')->__('CSV')),);}
public function getOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('XML')),array('value'=>2,'label'=>Mage::helper('expdoc')->__('CSV')),);}
}