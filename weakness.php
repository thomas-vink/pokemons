<?php
//hier de weakness class
class weakness
{
	public $name;
	public $multiplier;

	public function __construct($weakness, $multiplier)
	{
		$this->name = $weakness;
		$this->multiplier =  $multiplier;
	}
}
