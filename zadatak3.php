<?php

$A = array(2,1,1,2,3,1);

function solution($x){
	return count(array_unique ($x));
}

echo solution($A);
?>