<?php
//hier de attack class
class Attack
{
	public $attackName;
	public $attackDmg;

	public function __construct($attackName, $attackDmg)
	{
		$this->attackName = $attackName;
		$this->attackDmg = $attackDmg;
	}

	public function attack($attacker, $defender)
	{

		// hier kijk ik of de weakness van de defender gelijk is aan de type van de atacker zijn type
		if($attacker->type === $defender->weakness->name ){
            $attackDmg = $this->attackDmg * $defender->weakness->multiplier;
            $attackMessage = $attacker->name.' attacked '.$defender->name.' and it was very effective did '.$attackDmg.'dmg';
		}

		// hier kijk ik of de resistance van de defender gelijk is aan de type van de atacker zijn type
		else if ($attacker->type === $defender->resistance->name) {
            $attackDmg = $this->attackDmg - $defender->resistance->resistance;
            $attackMessage = $attacker->name.' attacked '.$defender->name.' and it was not very effective did '.$attackDmg.'dmg';
		}

		//dit is als er geen van het bovenste van toepasing is 
		else{
            $attackDmg = $this->attackDmg;
            $attackMessage = $attacker->name.' attacked '.$defender->name.' and did '.$attackDmg.'dmg';
        }
        return($attackMessage);
       	$defender->doDmg($defender, $attackDmg);

	}

}