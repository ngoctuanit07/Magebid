<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of payment holds. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentHoldStatusCodeType.html
 *
 * @property string PaymentReview
 * @property string MerchantHold
 * @property string Released
 * @property string None
 * @property string CustomCode
 */
class PaymentHoldStatusCodeType extends EbatNs_FacetType
{
	const CodeType_PaymentReview = 'PaymentReview';
	const CodeType_MerchantHold = 'MerchantHold';
	const CodeType_Released = 'Released';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentHoldStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaymentHoldStatusCodeType = new PaymentHoldStatusCodeType();

?>
