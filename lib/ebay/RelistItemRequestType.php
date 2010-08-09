<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to take a single item (or a single multi-itemlisting) that 
 * ended without bidders or buyers and re-list it on aspecified eBay site. The 
 * listing may be re-listed with the same itemproperties as the original or the 
 * seller may change a number of theitem's defining properties at re-listing time. 
 * The new listing willhave a different item ID than the original one. RelistItem 
 * re-lists asingle item (or a single multi-item listing) that has already ended.To 
 * re-list multiple items (multiple listings) that have ended,execute RelistItem 
 * once for each ended listing.<br><span class="tablenote"><b>Tip:</b> Relist ended 
 * fixed-price items quickly to prevent search rankings from dropping. Best Match 
 * search ranking is based on buyer activity, and one of the factors affecting 
 * search ranking for fixed price listings is Recent Sales. Fixed price items that 
 * are selling the fastest are given a relative lift in search results. Recent 
 * Sales history is tracked with a moving window to ensure it reflects the most 
 * recent activity. Due to the moving window, it is advantageous to relist as 
 * quickly as possible when an item ends, because recent sales scores can be 
 * transferred to the relisted item. Refer to <a 
 * href="http://ebaydeveloper.typepad.com/dev/2008/10/how-the-moving.html">How the 
 * Moving Window Affects Recent Sales</a> in the Developers Program Community Blog 
 * for more information. </span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RelistItemRequestType.html
 *
 */
class RelistItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var string
	 */
	protected $DeletedField;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getDeletedField($index = null)
	{
		if ($index !== null) {
			return $this->DeletedField[$index];
		} else {
			return $this->DeletedField;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setDeletedField($value, $index = null)
	{
		if ($index !== null) {
			$this->DeletedField[$index] = $value;
		} else {
			$this->DeletedField = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addDeletedField($value)
	{
		$this->DeletedField[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RelistItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeletedField' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
