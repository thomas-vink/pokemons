<?php

class Attack
{
	public $attackname;
	public $attackdmg;


	public function __construct($attackname,$attackdmg)
	{
		$this->attackname = $attackname;
		$this->attackdmg = $attackdmg;
	}

}