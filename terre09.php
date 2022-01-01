<?php

if(!array_key_exists(1,$argv) ) {

	echo "Il est nécessaire de passer un argument (nombre entier) \n";
	return;
}

if(!is_numeric($argv[1])){
	echo "L'argument doit être de type entier numerique \n";
	return;
}
if( $argv[1]-intval($argv[1]) != 0 ) {
	echo "Ce n'est pas un entier !! \n";
	return;
}


$nbr  = $argv[1];

// La solution la plus simple est parfois la meilleure ... Même si ce n'est pas du tout optimisé pour les chiffres dépassant la fortune d'Elon Musk !

for($i = 0; $i<=$nbr ; $i++){
	if($i*$i == $nbr){
		echo"La racine carré de $nbr est $i \n";
		return;
	}
}
echo "Ce nombre n'a pas de nombre entier en racine carré \n";
