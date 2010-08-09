<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'DescriptionTemplateType.php';
require_once 'ThemeGroupType.php';
require_once 'AbstractResponseType.php';

/**
 * Returned after calling GetDescriptionTemplatesRequest. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetDescriptionTemplatesResponseType.html
 *
 */
class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
	/**
	 * @var DescriptionTemplateType
	 */
	protected $DescriptionTemplate;
	/**
	 * @var int
	 */
	protected $LayoutTotal;
	/**
	 * @var int
	 */
	protected $ObsoleteLayoutID;
	/**
	 * @var int
	 */
	protected $ObsoleteThemeID;
	/**
	 * @var ThemeGroupType
	 */
	protected $ThemeGroup;
	/**
	 * @var int
	 */
	protected $ThemeTotal;

	/**
	 * @return DescriptionTemplateType
	 * @param integer $index 
	 */
	function getDescriptionTemplate($index = null)
	{
		if ($index !== null) {
			return $this->DescriptionTemplate[$index];
		} else {
			return $this->DescriptionTemplate;
		}
	}
	/**
	 * @return void
	 * @param DescriptionTemplateType $value 
	 * @param  $index 
	 */
	function setDescriptionTemplate($value, $index = null)
	{
		if ($index !== null) {
			$this->DescriptionTemplate[$index] = $value;
		} else {
			$this->DescriptionTemplate = $value;
		}
	}
	/**
	 * @return void
	 * @param DescriptionTemplateType $value 
	 */
	function addDescriptionTemplate($value)
	{
		$this->DescriptionTemplate[] = $value;
	}
	/**
	 * @return int
	 */
	function getLayoutTotal()
	{
		return $this->LayoutTotal;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLayoutTotal($value)
	{
		$this->LayoutTotal = $value;
	}
	/**
	 * @return int
	 * @param integer $index 
	 */
	function getObsoleteLayoutID($index = null)
	{
		if ($index !== null) {
			return $this->ObsoleteLayoutID[$index];
		} else {
			return $this->ObsoleteLayoutID;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setObsoleteLayoutID($value, $index = null)
	{
		if ($index !== null) {
			$this->ObsoleteLayoutID[$index] = $value;
		} else {
			$this->ObsoleteLayoutID = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addObsoleteLayoutID($value)
	{
		$this->ObsoleteLayoutID[] = $value;
	}
	/**
	 * @return int
	 * @param integer $index 
	 */
	function getObsoleteThemeID($index = null)
	{
		if ($index !== null) {
			return $this->ObsoleteThemeID[$index];
		} else {
			return $this->ObsoleteThemeID;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setObsoleteThemeID($value, $index = null)
	{
		if ($index !== null) {
			$this->ObsoleteThemeID[$index] = $value;
		} else {
			$this->ObsoleteThemeID = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addObsoleteThemeID($value)
	{
		$this->ObsoleteThemeID[] = $value;
	}
	/**
	 * @return ThemeGroupType
	 * @param integer $index 
	 */
	function getThemeGroup($index = null)
	{
		if ($index !== null) {
			return $this->ThemeGroup[$index];
		} else {
			return $this->ThemeGroup;
		}
	}
	/**
	 * @return void
	 * @param ThemeGroupType $value 
	 * @param  $index 
	 */
	function setThemeGroup($value, $index = null)
	{
		if ($index !== null) {
			$this->ThemeGroup[$index] = $value;
		} else {
			$this->ThemeGroup = $value;
		}
	}
	/**
	 * @return void
	 * @param ThemeGroupType $value 
	 */
	function addThemeGroup($value)
	{
		$this->ThemeGroup[] = $value;
	}
	/**
	 * @return int
	 */
	function getThemeTotal()
	{
		return $this->ThemeTotal;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setThemeTotal($value)
	{
		$this->ThemeTotal = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetDescriptionTemplatesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DescriptionTemplate' =>
					array(
						'required' => false,
						'type' => 'DescriptionTemplateType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'LayoutTotal' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ObsoleteLayoutID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ObsoleteThemeID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ThemeGroup' =>
					array(
						'required' => false,
						'type' => 'ThemeGroupType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ThemeTotal' =>
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
