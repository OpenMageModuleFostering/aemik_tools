<?php
/**
 * AEMIK TOOLSET - 1.0 
 *
 * @Authors    Mickael Chen
 * @Contact    chenmickael@yahoo.com
 * @copyright  Copyright (c) 2013 AEMIK (http://www.voguemonde.com)
 * @license    http://opensource.org/licenses/gpl-license.php (GPL)
 */
class Iws_Expdoc_Model_Category{
public function toOptionArray(){
$category = Mage::getModel('catalog/category')->getCollection();
$i=0;
foreach ($category as $ct){
$ct->load($ct->getId());
if($ct->getId()!='1' && $ct->getId()!= '2'){
$cts[$i]['value']=$ct->getId();
$cts[$i]['label']=$ct->getName();
$i++;
}
}
return $cts;
}
}