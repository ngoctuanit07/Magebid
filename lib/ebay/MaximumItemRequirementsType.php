<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container for items bid. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumItemRequirementsType.html
 *
 */
class MaximumItemRequirementsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaximumItemCount;
	/**
	 * @var int
	 */
	protected $MinimumFeedbackScore;

	/**
	 * @return int
	 */
	function getMaximumItemCount()
	{
		return $this->MaximumItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaximumItemCount($value)
	{
		$this->MaximumItemCount = $value;
	}
	/**
	 * @return int
	 */
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumItemRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MaximumItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumFeedbackScore' =>
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
