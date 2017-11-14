<?php
$num = 1041;


if($num < 2147483647){

	$binary = decbin($num);

	$gap = 0;
	$max = 0;

	$lenght = strlen($binary);
	$bin = str_split($binary);

	for($x=0; $x < $lenght; $x++){

		if($bin[$x] == 1){

			if($gap > $max){
				
				$max = $gap;
				
			}
			$gap=0;

		}else{

			$gap++;

		}

	}

	return $max;

}else{

	return 0;

}
?>