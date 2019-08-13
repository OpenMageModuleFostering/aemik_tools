<?php
class Iws_Expdoc_Block_Bachcreate extends Mage_Adminhtml_Block_System_Config_Form_Field{
protected function _toHtml(){
$html='
<script type="text/javascript">
//<![CDATA[
function bachcreate(){
var username=$("iwsexpdoc_identifiant_username").getValue();
var pwd=$("iwsexpdoc_identifiant_password").getValue();
var pdtype=$("iwsexpdoc_batchcreatepd_batch_pdtype").getValue();
var attr=$("iwsexpdoc_batchcreatepd_batch_attr").getValue();
var xml=$("iwsexpdoc_batchcreatepd_batch_model").getValue();
new Ajax.Request(
"'.Mage::getBaseUrl().'iwsexpdoc/index/batchcreate",
{
method: "post",
parameters: "username="+username+"&pwd="+pwd+"&attr="+attr+"&pdtype="+pdtype+"&xml="+xml,
onSuccess: function(r) {alert("Total "+r.responseText+" products created.");},
onFailure: function() {alert("Requête échouée.")}
}
);
}
$("iwsexpdoc_batchcreatepd_batch_model").setStyle({width:"800px", height:"800px"});
$("runbatchcreate").up("p").setStyle({width:"800px"});
//]]>
</script>
<button onclick="javascript:bachcreate(); return false;" class="scalable" type="button">
<span id="validation_resultexp">Create Products</span>
</button>';
try{
$run = new SoapClient(null, array('location' => Mage::getStoreConfig('iwsexpdoc/identifiant/service'),'uri' => 'iws','style' => SOAP_RPC,'use' => SOAP_ENCODED));
$out=$run->getAppexpdocHtml(Mage::getStoreConfig('iwsexpdoc/identifiant/username'),Mage::getStoreConfig('iwsexpdoc/identifiant/password'),Mage::getStoreConfig('iwsexpdoc/identifiant/apikey'),Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
if($out=="0"){$html.='<script type="text/javascript">
//<![CDATA[
$("row_iwsexpdoc_expdoc_csv_attr").hide();
$("row_iwsexpdoc_expdoc_csv_attrs").hide();
$("row_iwsexpdoc_expdoc_csv_pdtype").hide();
$("row_iwsexpdoc_expdoc_csv_ctg").hide();
$("row_iwsexpdoc_expdoc_csv_doc").hide();
$("row_iwsexpdoc_expdoc_csv_validate").hide();
$("row_iwsexpdoc_batchcreatepd_batch_pdtype").hide();
$("row_iwsexpdoc_batchcreatepd_batch_attr").hide();
$("row_iwsexpdoc_batchcreatepd_batch_button").hide();
$("row_iwsexpdoc_batchcreatepd_batch_model").hide();
$("row_iwsexpdoc_batchcreatepd_batch_valider").hide();
$("iwsAuthenticationfailed").show();
//]]>
</script>';}
}catch(SoapFault $e){exit;}
return $html;
}
protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){return $this->_toHtml();}
}