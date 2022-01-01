<?php

if (!array_key_exists(1,$argv) || is_numeric($argv[1]) || array_key_exists(2,$argv) ){
	echo "erreur dans l'utilisation du script \n";
	return;
}
$str = $argv[1];
$i=0;
$counter= 0;
while($str[$i] != null){
	$counter++;	
	$i++;
}

echo "La chaine fais $counter de long \n";
return;

