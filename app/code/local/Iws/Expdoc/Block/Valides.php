<?php
class Iws_Expdoc_Block_Valides extends Mage_Adminhtml_Block_System_Config_Form_Field{
protected function _toHtml(){
$html='
<script type="text/javascript">
//<![CDATA[
function icoolexp() {
$("iwsdownloaderback").innerHTML="";$("iwsdownloaderback").href="";
var username=$("iwsexpdoc_identifiant_username").getValue();
var pwd=$("iwsexpdoc_identifiant_password").getValue();
var attr=$("iwsexpdoc_expdoc_csv_attr").getValue();
var attrs=$("iwsexpdoc_expdoc_csv_attrs").getValue();
var pdtype=$("iwsexpdoc_expdoc_csv_pdtype").getValue();
var ctg=$("iwsexpdoc_expdoc_csv_ctg").getValue();
var doc=$("iwsexpdoc_expdoc_csv_doc").getValue();
new Ajax.Request(
"'.Mage::getBaseUrl().'iwsexpdoc/index/exp",
{
method: "get",
parameters: "username="+username+"&pwd="+pwd+"&attr="+attr+"&attrs="+attrs+"&pdtype="+pdtype+"&ctg="+ctg+"&doc="+doc,
onSuccess: function(r) {if(r.responseText=="Connextion failed!" || r.responseText==""){$("iwsdownloaderback").innerHTML="";alert("Connextion failed!")}else{$("iwsdownloaderback").innerHTML="Here s to download! "+r.responseText;$("iwsdownloaderback").href="'.Mage::getBaseUrl('media').'"+r.responseText;}},
onFailure: function() {alert("Requête échouée.")}
}
);
}
$("iwsAuthenticationfailed").hide();
$("row_iwsexpdoc_identifiant_service").hide();
//]]>
</script>
<button onclick="javascript:icoolexp(); return false;" class="scalable" type="button">
<span id="validation_resultexp">Export Document</span>
</button>
<a id="iwsdownloaderback" style="color:#00F" target="_new"></a>';
return $html;
}
protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){return $this->_toHtml();}
}