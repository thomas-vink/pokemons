<?php

class Pokemon
{
	public $name;
	public $healthPoints;
	public $currentHP;
	public $defense;
	public $type;
	public $attacks = [];

	public function __construct($name,$healthPoints,$defense,$type,$attacks)
	{
		$this->name = $name;
		$this->healthPoints = $healthPoints;
		$this->currentHP = $healthPoints;
		$this->defense = $defense;
		$this->type = $type;
		$this->attacks = $attacks;
	}

	public function getPokemon($pokemon2)
	{
		prettyPrint($this);
		prettyPrint($pokemon2);
	}

	public function doDamage($pokemon2)
	{
		$currentHP = $this->healthPoints - $pokemon2->attacks['1']->attackDmg;
		echo $pokemon2->name. ' heeft '. $this->name.' '. $pokemon2->attacks['1']->attackName;
		echo "<br>";
		echo $this->name.' heeft '.$currentHP.'hp over';
	}


} 