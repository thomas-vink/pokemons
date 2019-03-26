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
		
		// hier kijk ik of de weakness van de defender gelijk is aan de type van de atacker zijn type
		if($attacker->type === $defender->weakness->name ){
			echo "attack deed groote auw";
            echo "<br>";
            $attackdmg = $this->attackdmg * $defender->weakness->multiplier;
            echo $attackdmg.'dmg done';
		}

		// hier kijk ik of de resistance van de defender gelijk is aan de type van de atacker zijn type
		else if ($attacker->type === $defender->resistance->name) {
            echo "attack was not verry good";
            echo "<br>";
            $attackdmg = $this->attackdmg - $defender->resistance->resistance;
           	echo $attackdmg.'dmg done';
		}

		//dit is als er geen van het bovenste van toepasing is 
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