<?php

if(!array_key_exists(1,$argv)){
	echo "il y a un problème : aucun argument de passé";
	return;
}


for($a=1; $a<count($argv); $a++){
	if($a>1){
		$str.=" ";
	}
	$str .= $argv[$a];
}


$newString ="";
for ($i = strlen($str); $i >= 0; $i--) {
    $newString .= $str[$i];
}
echo $newString . "\n";
