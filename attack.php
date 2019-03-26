<?php
//hier de attack class
class Attack
{
	public $attackname;
	public $attackdmg;


	public function __construct($attackname,$attackdmg)
	{
		$this->attackname = $attackname;
		$this->attackdmg = $attackdmg;
	}

	public function attack($attacker,$defender)
	{
		if($attacker->type === $defender->weakness->name ){
			echo "attack deed groote auw";
            echo "<br>";
            $attackdmg = $this->attackdmg * $defender->weakness->multiplier;
            echo $attackdmg.'dmg done';
		}

		else if ($attacker->type === $defender->resistance->name) {
            echo "attack was not verry good";
            echo "<br>";
            $attackdmg = $this->attackdmg - $defender->resistance->resistance;
           	echo $attackdmg.'dmg done';
		}

		else{
            echo "The attack hit him/her.";
            echo "<br>";
            $attackdmg = $this->attackdmg;
           	echo $attackdmg.'dmg done';
        }
        echo "<br>";
       	$defender->dodmg($defender,$attackdmg );

	}

}