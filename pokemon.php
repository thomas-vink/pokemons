<?php
abstract class pokemon
{
	protected $name;
	protected $healthPoints;
	protected $hitPoints;

	protected function __construct($name,$healthPoints)
	{
		$this->name = $name;
		$this->healthPoints = $healthPoints;
		$this->hitPoints = $healthPoints;
	}

	public function get($val)
	{
		if($val == 'all'){
			prettyPrint($this);
		}else{
			prettyPrint($this->$val);

		}
	}

	public function set($name,$val){
		$this->$name = $val;
	}

	public function dodmg($pokemon,$dmg){
		$hitpoints = $pokemon->hitPoints - $dmg;
		$pokemon->set('healthPoints',$hitpoints);
		echo $pokemon->healthPoints. 'hp over';
	}


} 

class ahmet extends pokemon
{
	public $type;
	public $attacks = [];
    public $weakness;
	public $resistance;

	public function __construct($name,$healthPoints,$type,$weakness,$resistance,$attacks)
	{
		$this->name = $name;

		$this->type = $type;
		$this->resistance = $resistance;
        $this->weakness = $weakness;
        $this->attacks = $attacks;
	}
}

class dylan extends pokemon
{
	public $type;
	public $attacks = [];
    public $weakness;
	public $resistance;

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

}