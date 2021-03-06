<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether the parts compatibility feature is enabled for a 
 * category.<br><br> Parts Compatibility is supported in limited Parts & 
 * Accessoriescategories for the eBay Motors (US) site (site ID 100) only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemCompatibilityEnabledCodeType.html
 *
 * @property string Disabled
 * @property string ByApplication
 * @property string BySpecification
 * @property string CustomCode
 */
class ItemCompatibilityEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_ByApplication = 'ByApplication';
	const CodeType_BySpecification = 'BySpecification';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemCompatibilityEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemCompatibilityEnabledCodeType = new ItemCompatibilityEnabledCodeType();

?>
