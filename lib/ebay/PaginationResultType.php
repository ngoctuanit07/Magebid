<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Shows the pagination of data returned by requests.Pagination of returned data is 
 * not needed in and notsupported for every call. See the documentation 
 * forindividual calls to determine whether pagination issupported, required, or 
 * desirable. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaginationResultType.html
 *
 */
class PaginationResultType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $TotalNumberOfPages;
	/**
	 * @var int
	 */
	protected $TotalNumberOfEntries;

	/**
	 * @return int
	 */
	function getTotalNumberOfPages()
	{
		return $this->TotalNumberOfPages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalNumberOfPages($value)
	{
		$this->TotalNumberOfPages = $value;
	}
	/**
	 * @return int
	 */
	function getTotalNumberOfEntries()
	{
		return $this->TotalNumberOfEntries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalNumberOfEntries($value)
	{
		$this->TotalNumberOfEntries = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaginationResultType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TotalNumberOfPages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalNumberOfEntries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
