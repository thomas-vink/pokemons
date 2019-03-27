<?php
//hier vis ik all php bestanden op
	require 'pokemon.php';
	require 'attack.php';
	require 'type.php';
	include 'resistance.php';
	include 'weakness.php';


//declare the types
$types = [
        new Type("Electric"),
        new Type("Water"),
        new Type("Fire"),
        new Type("Toxic")
];
//pokemon 1
$Pikachu = new Pikachu(
	"pikachu",
	150,
	$types[3],
	new Weakness($types[1], 1.5),
	new Resistance($types[3], 20),
	[
		new attack('Pika Punch', 50),
		new attack('Electric Ring', 100)
	]
);
$Charmeleon = new Charmeleon(
	"Charmeleon",
	200,
	$types[1],
	new Weakness($types[2], 1.5),
	new Resistance($types[3], 20),
	[
		new attack('Pika Punch', 50),
		new attack('Electric Ring', 100)
	]
);

//$person1->get('attacks');

//$person2->get('name');

echo $Pikachu->attacks[0]->attack($Pikachu,$Charmeleon);




function prettyPrint($var) 
{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
}


