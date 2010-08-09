<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The offer type of the best offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferTypeCodeType.html
 *
 * @property string BuyerBestOffer
 * @property string BuyerCounterOffer
 * @property string SellerCounterOffer
 * @property string CustomCode
 */
class BestOfferTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerBestOffer = 'BuyerBestOffer';
	const CodeType_BuyerCounterOffer = 'BuyerCounterOffer';
	const CodeType_SellerCounterOffer = 'SellerCounterOffer';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BestOfferTypeCodeType = new BestOfferTypeCodeType();

?>
