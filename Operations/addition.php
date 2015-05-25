<?php
$sum = 0;
function addition($String){
	foreach($String as $key => $values){
		//echo $key;
		$sum += $values;
	}
	return $sum;
}
?>