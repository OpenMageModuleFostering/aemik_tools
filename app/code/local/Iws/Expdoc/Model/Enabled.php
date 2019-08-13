<?php
class Iws_Expdoc_Model_Enabled{
public function toOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('Enabled')),array('value'=>0,'label'=>Mage::helper('expdoc')->__('Disabled')),);}
public function getOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('Enabled')),array('value'=>0,'label'=>Mage::helper('expdoc')->__('Disabled')),);}
}