<form action = "test.php" method="POST">
<?php
echo $_POST['tt'];
?>
<?php
$test = array(1 => 'mon','tue');
echo '<select name = "tt">';
foreach($test as $key => $values)
	echo '<option value = "$values">'. $values .'</option>';
echo '</select>';
?><br /><br />
<input type = "submit" name = "submit" value = "submit">
