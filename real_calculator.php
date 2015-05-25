<?php include 'connecting_real.php'; ?>
<html>
<head>
<title> Calculator </title>
</head>
<body>
<form action = "real_calculator.php" method = "post">
<p>Enter number's: <input type = "text" name = "first" size="30" value = <?php echo "$result";?>> </input></p><br>
Select an operator: 
<select name = "oper">
<option value = 'add' <?php if(isset($_POST['oper']) && ($_POST['oper']=="add")) echo'selected="selected"'; ?>> Addition </option>
<option value = 'sub' <?php if(isset($_POST['oper']) && ($_POST['oper'] == "sub")) echo'selected="selected"'; ?>> Subtraction </option>
<option value = 'mul' <?php if(isset($_POST['oper']) && ($_POST['oper']== "mul")) echo 'selected="selected"';?>> Multiplication </option>
</select>
<input type ="submit" name = "submit" value = "Result" />
</body>
</html>