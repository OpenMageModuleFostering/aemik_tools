<?php
class Iws_Expdoc_Model_Attrset{
public function toOptionArray(){
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getAppexpdocAttrset(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'));
if($out){try{eval($out);return $cts;}catch(Exception $e){return $e->getMessage();}}else{exit;}}catch(SoapFault $e){exit;}
}
}