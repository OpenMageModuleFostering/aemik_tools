<?php
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