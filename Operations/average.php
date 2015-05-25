<?php
$count = 0;
function average($String){
	foreach($String as $values){
		$sum += $values;
		$count++;
	}
	$avg = $sum/$count;
	return $avg;
}
?>