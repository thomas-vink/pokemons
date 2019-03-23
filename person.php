<?php

class person
{
	public $name;
	public $healthPoints;
	public $hitPoints;
	public $type;
	public $attacks = [];
	public $resistance;
    public $weakness;

	public function __construct($name,$healthPoints,$type,$weakness,$resistance,$attacks)
	{
		$this->name = $name;
		$this->healthPoints = $healthPoints;
		$this->hitPoints = $healthPoints;
		$this->type = $type;
		$this->resistance = $resistance;
        $this->weakness = $weakness;
        $this->attacks = $attacks;

	}

	public function getperson()
	{
		prettyPrint($this);
	}

	public function attack($attack, $attacker, $defender)
	{
		if($attacker->type == $defender->weakness->name ){
			echo "attack deed groote auw";
            echo "<br>";
            $attackdmg = $attack->attackdmg * $defender->weakness->multiplier;
		}
		else if ($attacker->type === $defender->resistance->name) {
            echo "bitch attack";
            echo "<br>";
            $attackdmg = $attack->attackdmg - $defender->resistance->resistance;
		}
		else{
            echo "The attack hit them.";
            echo "<br>";
            $attackdmg = $attack->attackdmg;
        }

        $attack_result = $defender->hitPoints - $attackdmg;

        $result = [$attackdmg, $attack_result];

        $defender->hitPoints = $attack_result;

        return $result;
	}


} 