<?php
/**
 * AEMIK TOOLSET - 1.0 
 *
 * @Authors    Mickael Chen
 * @Contact    chenmickael@yahoo.com
 * @copyright  Copyright (c) 2013 AEMIK (http://www.voguemonde.com)
 * @license    http://opensource.org/licenses/gpl-license.php (GPL)
 */
class Iws_Expdoc_Block_Batch extends Mage_Adminhtml_Block_System_Config_Form_Field{
protected function _toHtml(){
$html='
<script type="text/javascript">
//<![CDATA[
function generatingxml(){
var username=$("iwsexpdoc_identifiant_username").getValue();
var pwd=$("iwsexpdoc_identifiant_password").getValue();
var pdtype=$("iwsexpdoc_batchcreatepd_batch_pdtype").getValue();
var attr=$("iwsexpdoc_batchcreatepd_batch_attr").getValue();
new Ajax.Request(
"'.Mage::getBaseUrl().'iwsexpdoc/index/create",
{
method: "get",
parameters: "username="+username+"&pwd="+pwd+"&attr="+attr+"&pdtype="+pdtype,
onSuccess: function(r) {$("iwsexpdoc_batchcreatepd_batch_model").update(r.responseText)},
onFailure: function() {alert("Requête échouée.")}
}
);
}
//]]>
</script>
<button onclick="javascript:generatingxml(); return false;" class="scalable" type="button">
<span id="validation_resultexp">Generating Sample Json</span>
</button>';
return $html;
}
protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){return $this->_toHtml();}
}