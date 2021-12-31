<?php

if(array_key_exists(1,$argv)){
  $nbr = $argv[1];
}else{
 $nbr = "nope ca ne marchera pas !";
}
function evenOrOdd($entry)
{
	//si intval(nbr) - nbr !=0 ce n'est pas un entier
    if (!is_numeric($entry) || (is_numeric($entry) && intval($entry) - $entry !== 0)) {
        return "Ne me prenez pas pour une bête machine j'ai besoin de  NOMBRE ENTIER POUR FONCTIONNER !!! Screugneugneu ";
    }
    if ($entry  % 2 === 0) {
        return "$entry  est pair";
    } else {
        return  "$entry n'est pas pair";
    }
}

echo evenOrOdd($nbr)  "\n";
