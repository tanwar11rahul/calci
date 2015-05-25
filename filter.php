<?php
$all_files = array();
foreach(glob("Operations/*.php") as $filename){
	$file = pathinfo($filename);
	$temp = $file['filename'];
	$temp1 = $temp.'.php';
	$temp2 = "$temp1";
	include "$filename";
	if(function_exists("$temp")){
		$all_files[] = $file['filename'];
	}
}
?>