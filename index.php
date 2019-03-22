<?php
	require 'Pokemon.php';
	require 'attack.php';


//pokemon 1
$pokemon1 = new pokemon(
	"pickachu",
	150,
	20,
	"electric",
	[
		new attack('1000 volt up yo ass', 100),
		new attack('mommy slap', 50)
	]
);

//pokemon 2
$pokemon2 = new pokemon(
	"dylan",
	200,
	0,
	"bitchboi",
	[
		new attack('schelden', 25),
		new attack('slap', 150)
	]
);


prettyPrint($pokemon1);
prettyPrint($pokemon2);





function prettyPrint($var) 
{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
}


