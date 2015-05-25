<?php
include 'calci.php';
?>

<html>
<head>
<title> Calculator </title>
</head>
<body>
<form action = "index.php" method = "POST">
<p>Enter number's : 
<input type = "text" name = "Entered_String" size="30" value = <?php echo "$result";?>> </input></p>

<?php
echo '<p>Select An Operator :  
<select name = "operation">';
foreach($all_files as $values){
	echo '<option value ='.$values;
    //if(isset($_POST['operation']) && ($_POST['operation'] == $values))
		//echo 'selected = '."selected";
		echo ' >'.$values.'</option>';
}
echo '</select></p>';
?>

<input type ="submit" name = "submit" value = "Result" />
</body>
</html>