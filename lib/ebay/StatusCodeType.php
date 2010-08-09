<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This code identifies the status of a region of origin. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StatusCodeType.html
 *
 * @property string Active
 * @property string Inactive
 * @property string CustomCode
 */
class StatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Inactive = 'Inactive';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StatusCodeType = new StatusCodeType();

?>
