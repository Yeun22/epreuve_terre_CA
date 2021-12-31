<?php

$nbr1 = $argv[1];
$nbr2 = $argv[2];

if($nbr2 == 0) {
	echo "Erreur division par zéro";
}else if($nbr2 > $nbr1) {
	echo "Erreur Nombre 2 supérieur au Nombre 1";
}else {
	$resultat = floor($nbr1/$nbr2);
$reste = $nbr1%$nbr2;
	echo  "Resultat : $resultat \n Rest: $reste \n";
}
