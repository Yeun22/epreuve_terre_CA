<?php

//Pour un pgrm parfait on verifiera les arguments d'entrés (nombre type etc)

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];

if(($a<$b && $b<$c && $a<$c) || ($a>$b && $b>$c && $a>$c))
{
	echo "$b est le milieu \n";
	return;
}else if(($b<$a && $a<$c && $b<$c) || ($c<$a && $a<$b && $c<$b)){
	echo "$a est au milieu \n";
}else if(($a<$c && $c<$b &&$a<$b) || ($a>$c && $c>$b && $a>$b)) {
	echo "$c est au milieu \n";
	return;
}else {
	echo "Erreur";
	return;
}




