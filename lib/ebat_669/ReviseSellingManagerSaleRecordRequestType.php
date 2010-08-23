<?php
// autogenerated file 18.05.2010 12:34
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerSoldOrderType.php';
require_once 'OrderIDType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Revises a Selling Manager sale record when you specifyone of the following: an 
 * ItemID, a TransactionID, or an OrderID.This call is subject to change without 
 * notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerSaleRecordRequestType.html
 *
 */
class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var OrderIDType
	 */
	protected $OrderID;
	/**
	 * @var SellingManagerSoldOrderType
	 */
	protected $SellingManagerSoldOrder;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return OrderIDType
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param OrderIDType $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return SellingManagerSoldOrderType
	 */
	function getSellingManagerSoldOrder()
	{
		return $this->SellingManagerSoldOrder;
	}
	/**
	 * @return void
	 * @param SellingManagerSoldOrderType $value 
	 */
	function setSellingManagerSoldOrder($value)
	{
		$this->SellingManagerSoldOrder = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerSaleRecordRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'OrderIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerSoldOrder' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSoldOrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>