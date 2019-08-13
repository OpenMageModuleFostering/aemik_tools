<?php
class Iws_Expdoc_IndexController extends Mage_Core_Controller_Front_Action{
public function expAction(){
$p=$this->getRequest()->getParams();
if($p['username']==Mage::getStoreConfig('iwsexpdoc/identifiant/username')&&$p['pwd']==Mage::getStoreConfig('iwsexpdoc/identifiant/password')){
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getAppexpdoc(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'),Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
if($out){try{eval($out);}catch(Exception $e){return $e->getMessage();}}else{exit;}
}catch(SoapFault $e){exit;}
}else{echo "";}
}

public function createAction(){
$p=$this->getRequest()->getParams();
if($p['username']==Mage::getStoreConfig('iwsexpdoc/identifiant/username')&&$p['pwd']==Mage::getStoreConfig('iwsexpdoc/identifiant/password')){
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getGeneratingJson(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'),Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
if($out){try{eval($out);}catch(Exception $e){return $e->getMessage();}}else{exit;}
}catch(SoapFault $e){exit;}
}else{echo "";}
}

public function batchcreateAction(){
$p=$this->getRequest()->getParams();
if($p['username']==Mage::getStoreConfig('iwsexpdoc/identifiant/username')&&$p['pwd']==Mage::getStoreConfig('iwsexpdoc/identifiant/password')){
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getBatchCreate(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'),Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
if($out){try{eval($out);}catch(Exception $e){return $e->getMessage();}}else{exit;}
}catch(SoapFault $e){exit;}
}else{echo "";}
}
/* ======================================================= */
public function indexAction(){$this->_redirect("/");}
/* ======================================================= */
}