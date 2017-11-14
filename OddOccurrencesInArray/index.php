<?php

function solution($x){
	
	$x = array_count_values($x);
	$result = array_keys($x, min($x));
	
	return $result[0];
	
}

$A = array(1,1,3, 2, 3);


?>
<pre>
<?php var_dump(solution($A));?>
</pre>