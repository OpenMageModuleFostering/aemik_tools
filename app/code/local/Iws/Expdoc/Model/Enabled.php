<?php
/**
 * AEMIK TOOLSET - 1.0 
 *
 * @Authors    Mickael Chen
 * @Contact    chenmickael@yahoo.com
 * @copyright  Copyright (c) 2013 AEMIK (http://www.voguemonde.com)
 * @license    http://opensource.org/licenses/gpl-license.php (GPL)
 */
class Iws_Expdoc_Model_Enabled{
public function toOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('Enabled')),array('value'=>0,'label'=>Mage::helper('expdoc')->__('Disabled')),);}
public function getOptionArray(){return array(array('value'=>1,'label'=>Mage::helper('expdoc')->__('Enabled')),array('value'=>0,'label'=>Mage::helper('expdoc')->__('Disabled')),);}
}