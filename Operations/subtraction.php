<?php
$count = 0;
function subtraction($String){
	foreach($String as $key => $values){
		$count++;
	}
	if($count == 2){
		$diff = $String[0]-$String[1];
			return $diff;
	}
	else if($count >2){
		$diff = $String[0]-$String[1];
		for($i=2; $count!=$i; $i++){
			$diff = $diff - $String[$i];
			//echo "$String[$i]<br />";
		}
		return $diff;
	}
}
?>