<?php
//hier vis ik all php bestanden op
	require 'pokemon.php';
	require 'attack.php';
	require 'type.php';
	include 'resistance.php';
	include 'weakness.php';


//declare the types
$types = [
        new Type("Turk"),
        new Type("tokkie"),
        new Type("kakker"),
        new Type("mokro")
];
//pokemon 1
$person1 = new ahmet(
	"Ahmet",
	150,
	$types[3],
	new Weakness($types[1], 1.5),
	new Resistance($types[3], 20),
	[
		new attack('1000 volt up his ass gepopt', 100),
		new attack('tantoe hard slaan', 50)
	]
);
//pokemon 2
$person2 = new dylan(
	"Dylan",
	125,
	$types[1],
	new Weakness($types[2], 2),
	new Resistance($types[0], 25),
	[
		new attack('schelden', 25),
		new attack('slaan met stok', 100)
	]
);


//$person1->get('all');
//$person2->get('all');
$person1->attacks[0]->attack($person1,$person2);





function prettyPrint($var) 
{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
}


