<?php 

$alphabet ="abcdefghijklmnopqrstuvwxyz";
$lengthAlpha = strlen($alphabet);
//Find letter
$letter = $argv[1];
//Find index of letter
for($index=0; $index<$lengthAlpha; $index++){
	if($alphabet[$index] === $letter){
		$indexLetter = $index;
	}
}

//start algo at index of letter
for($i=$indexLetter; $i<$lengthAlpha;$i++)
{
	echo $alphabet[$i];
}
echo "\n";
