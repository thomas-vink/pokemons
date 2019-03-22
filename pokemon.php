<?php

class Pokemon
{
	public $name;
	public $healthPoints;
	public $defense;
	public $type;
	public $attacks = [];

	public function __construct($name,$healthPoints,$defense,$type,$attacks)
	{
		$this->name = $name;
		$this->healthPoints = $healthPoints;
		$this->defense = $defense;
		$this->type = $type;
		$this->attacks = $attacks;
	}

	public function doDamage()
	{
		
	}


}