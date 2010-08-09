<?php
// autogenerated file 05.05.2008 16:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_ValType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_ValueListType extends EbatNs_ComplexType
{
	/**
	 * @var EbatNsCsSetExt_ValType
	 */
	protected $Value;

	/**
	 * @return EbatNsCsSetExt_ValType
	 * @param integer $index 
	 */
	function getValue($index = null)
	{
		if ($index !== null) {
			return $this->Value[$index];
		} else {
			return $this->Value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 * @param  $index 
	 */
	function setValue($value, $index = null)
	{
		if ($index !== null) {
			$this->Value[$index] = $value;
		} else {
			$this->Value = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 */
	function addValue($value)
	{
		$this->Value[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_ValueListType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Value' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'count' =>
			array(
				'name' => 'count',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
