<?php

$error = [];
$degree = 0;
$choice = 0;
$result = 0;

if (!isset($_POST["degree"])) {
	$error[] = "enter degree";
} else {
	$degree = $_POST["degree"];
	$choice = $_POST["choice"];
}

if ($choice == "C") {
	$result = $degree * (5 / 9) + 32;
} 
if ($choice == "F") {
	$result = ($degree - 32) * (5 / 9); 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-16">
<title>Task 3</title>
<style>

input {
		display: block;
		margin-bottom: 20px;
}
p {
		color: red;
}
</style>
</head>
<body>
 <form method= "post" >
	 <label>degree:</label>
	 <input type ="text" name = "degree">
	 <labe>Choice: </label>
	 <select name = "choice">
		  <option value= "C">C </option>
		  <option value = "F">F</option>
	 </select>
	 <input type="submit" value=Click>
 </form>
 <?php if(empty($error) != true):?>
 <?php for ($i = 0; $i < count($error);$i++):?>
 <p> <?php  echo "$error[$i]";?></p>
 <?php endfor;?>
 <?php endif;?>
 
 <?php if (empty($error)):?>
 <p><?php  echo "result is:"."$result";?></p>
 <?php endif;?>
 
</body>
</html>