<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returned after calling SetStoreRequest. This serves as confirmation that the 
 * Store configuration was successfully submitted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreResponseType.html
 *
 */
class SetStoreResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array();
		}
	}
}
?>
