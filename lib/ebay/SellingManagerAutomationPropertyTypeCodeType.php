<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the filters for Selling Manager automation listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutomationPropertyTypeCodeType.html
 *
 * @property string ItemListFailedAutomationRules
 * @property string ItemRelistFailedAutomationRules
 * @property string ItemListFailedSecondChanceOfferAutoRules
 * @property string CustomCode
 */
class SellingManagerAutomationPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemListFailedAutomationRules = 'ItemListFailedAutomationRules';
	const CodeType_ItemRelistFailedAutomationRules = 'ItemRelistFailedAutomationRules';
	const CodeType_ItemListFailedSecondChanceOfferAutoRules = 'ItemListFailedSecondChanceOfferAutoRules';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerAutomationPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerAutomationPropertyTypeCodeType = new SellingManagerAutomationPropertyTypeCodeType();

?>
