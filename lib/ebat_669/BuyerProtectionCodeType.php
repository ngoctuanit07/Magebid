<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the status of the item's eligibility for the BuyerProtection Program. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerProtectionCodeType.html
 *
 * @property string ItemIneligible
 * @property string ItemEligible
 * @property string ItemMarkedIneligible
 * @property string ItemMarkedEligible
 * @property string NoCoverage
 * @property string CustomCode
 */
class BuyerProtectionCodeType extends EbatNs_FacetType
{
	const CodeType_ItemIneligible = 'ItemIneligible';
	const CodeType_ItemEligible = 'ItemEligible';
	const CodeType_ItemMarkedIneligible = 'ItemMarkedIneligible';
	const CodeType_ItemMarkedEligible = 'ItemMarkedEligible';
	const CodeType_NoCoverage = 'NoCoverage';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerProtectionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BuyerProtectionCodeType = new BuyerProtectionCodeType();

?>
