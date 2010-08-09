<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellingManagerProductSpecificsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerProductInventoryStatusType.php';
require_once 'SellingManagerTemplateDetailsArrayType.php';

/**
 * Describes a Selling Manager Product 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerProductType.html
 *
 */
class SellingManagerProductType extends EbatNs_ComplexType
{
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;
	/**
	 * @var SellingManagerTemplateDetailsArrayType
	 */
	protected $SellingManagerTemplateDetailsArray;
	/**
	 * @var SellingManagerProductInventoryStatusType
	 */
	protected $SellingManagerProductInventoryStatus;
	/**
	 * @var SellingManagerProductSpecificsType
	 */
	protected $SellingManagerProductSpecifics;

	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
	/**
	 * @return SellingManagerTemplateDetailsArrayType
	 */
	function getSellingManagerTemplateDetailsArray()
	{
		return $this->SellingManagerTemplateDetailsArray;
	}
	/**
	 * @return void
	 * @param SellingManagerTemplateDetailsArrayType $value 
	 */
	function setSellingManagerTemplateDetailsArray($value)
	{
		$this->SellingManagerTemplateDetailsArray = $value;
	}
	/**
	 * @return SellingManagerProductInventoryStatusType
	 */
	function getSellingManagerProductInventoryStatus()
	{
		return $this->SellingManagerProductInventoryStatus;
	}
	/**
	 * @return void
	 * @param SellingManagerProductInventoryStatusType $value 
	 */
	function setSellingManagerProductInventoryStatus($value)
	{
		$this->SellingManagerProductInventoryStatus = $value;
	}
	/**
	 * @return SellingManagerProductSpecificsType
	 */
	function getSellingManagerProductSpecifics()
	{
		return $this->SellingManagerProductSpecifics;
	}
	/**
	 * @return void
	 * @param SellingManagerProductSpecificsType $value 
	 */
	function setSellingManagerProductSpecifics($value)
	{
		$this->SellingManagerProductSpecifics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerProductType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellingManagerProductDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerTemplateDetailsArray' =>
					array(
						'required' => false,
						'type' => 'SellingManagerTemplateDetailsArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerProductInventoryStatus' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductInventoryStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerProductSpecifics' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductSpecificsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
