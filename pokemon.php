<?php
// de pokemon class
abstract class Pokemon
{
	protected $name;
	protected $healthPoints;
	protected $hitPoints;
	private $data = array();


	protected function __construct($name, $healthPoints)
	{
		$this->name = $name;
		$this->healthPoints = $healthPoints;
		$this->hitPoints = $healthPoints;
	}

	public function __get($name)
	{
        return $this->$name;
	}

	public function setProperty($proppertyName, $value)
	{
		$this->$proppertyName = $value;
	}

	public function doDmg($pokemon,$dmg)
	{
		$hitpoints = $pokemon->hitPoints - $dmg;
		$pokemon->setProperty('healthPoints',$hitpoints);
		echo $pokemon->healthPoints. 'hp over';
	}


} 

//de pickachu class
class Pikachu extends Pokemon
{
	protected $type;
	protected $attacks = [];
    protected $weakness;
	protected $resistance;

	public function __construct($name, $healthPoints, $type, $weakness, $resistance, $attacks)
	{
		$this->name = $name;
		$this->type = $type;
        $this->weakness = $weakness;
        $this->attacks = $attacks;
	}
}

// de Charmeleon class
class Charmeleon extends Pokemon
{
	protected $type;
	protected $attacks = [];
    protected $weakness;
	protected $resistance;

	public function __construct($name,$healthPoints,$type,$weakness,$resistance,$attacks)
	{
		$this->name = $name;
		$this->type = $type;
        $this->weakness = $weakness;
        $this->attacks = $attacks;
	}
}