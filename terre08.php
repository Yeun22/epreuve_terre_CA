<?php

if(!array_key_exists(1,$argv) || !array_key_exists(2,$argv) ) {

	echo "Il est nécessaire de passer deux arguments (nombres entiers) \n";
	return;
}

if(!is_numeric($argv[1]) || !is_numeric($argv[2])){
	echo "Les arguments doivent être de type entier numeriques \n";
	return;
}
if( $argv[1]-intval($argv[1]) != 0 || $argv[2]-intval($argv[2]) !=0) {
	echo "Ce ne sont pas des entiers !! \n";
	return;
}


$nbr  = $argv[1];
$exposant = $argv[2];

if($exposant == 0){
	echo "$nbr exposant $exposant donne un total de 1 comme tous les nombres exposants zéro \n";
return;
}

$total = $nbr;
for($i = 1; $i < $exposant; $i++){
	$total =  $total * $nbr;
}
echo "$nbr exposant $exposant donne un total de $total \n";
return;
