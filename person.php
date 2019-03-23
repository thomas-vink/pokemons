<?php
//hier de person class
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
//het ophalen van de personen 
	public function getperson()
	{
		//prettyPrint functie thanks toe mister snoek
		prettyPrint($this);
	}
//hier die attack function
	public function attack($attack, $attacker, $defender)
	{

		// hier kijk ik of de weakness van de defender gelijk is aan de type van de atacker zijn type
		if($attacker->type == $defender->weakness->name ){
			echo "attack deed groote auw";
            echo "<br>";
            $attackdmg = $attack->attackdmg * $defender->weakness->multiplier;
		}

		// hier kijk ik of de resistance van de defender gelijk is aan de type van de atacker zijn type
		else if ($attacker->type === $defender->resistance->name) {
            echo "bitch attack";
            echo "<br>";
            $attackdmg = $attack->attackdmg - $defender->resistance->resistance;
		}
		//dit is als er geen van het bovenste van toepasing is 
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