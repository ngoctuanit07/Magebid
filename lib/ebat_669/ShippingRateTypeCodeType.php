<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A shipping rate scale for shipping through UPS thataffects the shipping cost 
 * calculated for UPS (lower ifShippingRateType is DailyPickup). For calculated 
 * shipping only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingRateTypeCodeType.html
 *
 * @property string OnDemand
 * @property string DailyPickup
 * @property string CustomCode
 */
class ShippingRateTypeCodeType extends EbatNs_FacetType
{
	const CodeType_OnDemand = 'OnDemand';
	const CodeType_DailyPickup = 'DailyPickup';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingRateTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingRateTypeCodeType = new ShippingRateTypeCodeType();

?>
