<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'StatusCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Details about a region. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RegionOfOriginDetailsType.html
 *
 */
class RegionOfOriginDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $RegionOfOrigin;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var StatusCodeType
	 */
	protected $Status;

	/**
	 * @return string
	 */
	function getRegionOfOrigin()
	{
		return $this->RegionOfOrigin;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRegionOfOrigin($value)
	{
		$this->RegionOfOrigin = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return StatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param StatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RegionOfOriginDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RegionOfOrigin' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'StatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
