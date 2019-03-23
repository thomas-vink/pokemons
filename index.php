<?php
	require 'Pokemon.php';
	require 'attack.php';


//pokemon 1
$pokemon1 = new pokemon(
	"Ahmet",
	150,
	20,
	"electric",
	[
		new attack('1000 volt up his ass gepopt', 100),
		new attack('mommy geslapt', 50)
	]
);

//pokemon 2
$pokemon2 = new pokemon(
	"Dylan",
	200,
	0,
	"bitchboi",
	[
		new attack('uitgescholden', 25),
		new attack('geslapt', 150)
	]
);



$pokemon1->getPokemon($pokemon2);
$pokemon1->doDamage($pokemon2);




function prettyPrint($var) 
{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
}


