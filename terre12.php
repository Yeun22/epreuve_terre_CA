<?php

if(!array_key_exists(1,$argv)) {

	echo "Il est nécessaire de passer un argument (exemple: 11:54 PM) \n";
	return;
}

$time = explode(":",$argv[1]);

$hour = $time[0];
$minAndPm = explode(" ",$time[1]);
$min = $minAndPm[0];
if(array_key_exists(1,$minAndPm)){
	$pm = $minAndPm[1];
}else{
	$pm = null;
}

if($hour>=0 && $hour<=12 && $min>=00 && $min<60 && $pm === null) {
	echo "$hour:$min \n";
}elseif(0<$hour && $hour<12 && 00<=$min && $min<60 && $pm != null){
	$newHour = $hour+12;	
echo"$newHour:$min \n";
}else{

	echo "Merci de donner une heure valide (heure entre 0 et 12, minute entre 00 et 59 ainsi que PM si l'heure est compris entre midi et 11h59 du soir)";
}
