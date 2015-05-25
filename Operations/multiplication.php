<?php
function multiplication($String){
	$mul = 1;
	foreach($String as $key => $values){
		$mul*=$values;
	}
	return $mul;
}
?>