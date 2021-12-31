<?php

// $argv est un tableau permettant de récupérer les paramètres passés en scripts. 

for($i=1; $i < count($argv); $i++)
{
	echo "$argv[$i] \n";
}
