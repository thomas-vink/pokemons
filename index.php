<?php
//hier vis ik all php bestanden op
	require 'person.php';
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
$person1 = new person(
	"Ahmet",
	150,
	$types[0],
	new Weakness($types[1], 1.5),
	new Resistance($types[3], 20),
	[
		new attack('1000 volt up his ass gepopt', 100),
		new attack('tantoe hard slaan', 50)
	]
);
//pokemon 2
$person2 = new person(
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

//get person1 functie
//$person1->getperson();

//get person2 functie
//$person2->getperson();

//$result1 = $person2->attack($person2->attacks[1], $person2, $person1);
$result1 = $person1->attack($person1->attacks[1], $person1, $person2);

//mooi textje met dmg laten zien
	echo $person2->name . " attacks " . $person1->name . " with " . $person2->attacks[1]->attackname . " and deals " . $result1[0] . " damage.";
	echo "<br>";
	echo $person1->name . " has " . $result1[1] . " hitpoints of the " . $person2->healthPoints . " left.";


//prettyPrint functie thanks toe mister snoek
function prettyPrint($var) 
{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
}


