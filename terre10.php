<?php

// Pour déterminer si un nombre entier naturel n supérieur ou égal 2 est un nombre premier, on doit chercher un diviseur de n parmi les nombres premiers successifs (2, 3, 5, 7, 11 …) jusqu'à la valeur n−−√.

if(!array_key_exists(1,$argv)) {

	echo "Il est nécessaire de passer un argument (nombre entier) \n";
	return;
}

if(!is_numeric($argv[1])){
	echo "Il doit être de type entier numerique \n";
	return;
}
if( $argv[1]-intval($argv[1]) != 0) {
	echo "Ce n'est pas un entier !! \n";
	return;
}

$nbr = $argv[1];

if($nbr ==1 || $nbr == 0) {
	echo "0 et 1 ne sont pas des nombres premiers. \n";
}

for($i = 2; $i<= intval(sqrt($nbr)); $i++){
	if($nbr % $i == 0){
		echo  "Ce nombre n'est pas premier ! Il est divisible par $i \n";
		return;
	}
}

echo" Ce nombre est un entier divisible par 1 ou par lui même \n";
return;
