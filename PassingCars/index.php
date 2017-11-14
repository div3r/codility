<?php
$A = array(0,1,0,1);

function solution($A) {
	$passes = 0;
	$goingRight = 0;
	
	for($i=0;$i<count($A);$i++){
		if($A[$i]==0){ 
			$goingRight++;
		}
		if($A[$i]==1){
			$passes += $goingRight;
		}
		if($passes > 1000000000) return -1;
	}
	return $passes;
}

echo solution($A);
?>