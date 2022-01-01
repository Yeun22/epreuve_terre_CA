<?php


for($i=1; $i<(count($argv)-1);$i++)
{
	if(!is_numeric($argv[$i])){
		echo " Il ne doit y avoir que des nombres \n";
		return;
	}

	if(($argv[$i]<$argv[$i+1]) == false){
		echo "la liste n'est pas triée \n";
		return;
	}
}

echo "La liste est triée \n";
