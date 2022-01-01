<?php

if(!array_key_exists(1,$argv)) {

	echo "Il est nécessaire de passer un argument (exemple: 13:54) \n";
	return;
}

$time = explode(":",$argv[1]);

$hour = $time[0];
$min = $time[1];

if(0<=$hour && $hour<=12 && 00<=$min && $min<60) {
	echo "$hour:$min AM \n";
}elseif(12<$hour && $hour<24 && 00<=$min && $min<60){
	$newHour = $hour-12;	
echo"$newHour:$min PM \n";
}else{

	echo "Merci de donner une heure valide (heure entre 0 et23, minute entre 00 et 59)";
}
