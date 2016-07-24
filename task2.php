<?php

 $error = [];
 $name = null;
 $passOne= null;
 $passTwo = null;
 $crypt = null;
 
 if(empty($_POST["name"])) {
 	$error []= "enter valid name";
 } else {
 	$name = $_POST["name"];
 }
 if (empty($_POST["pass"])) {
 	$error [] = "enter valid password";
 } else {
 	$passOne = $_POST["pass"];
 }
 if (empty($_POST["passTwo"])) {
 	$error[] = "enter valid password";
 } else {
 	$passTwo = $_POST["passTwo"];
 }
 if (strlen($name) < 6) {
 	$error[] = "enter name with min 6 symbols";
 } 
 if ($passOne != $passTwo || strlen($passOne)<6) {
 	$error [] = "password one and  password two must me equal";
 } else {
 	$crypt = md5($passOne);
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-16">
<title>Task 2</title>
<style>
label {

	display: block;
}


p { 
    color:red;
}
</style>
</head>
<body>
<form method = "post">
		<label>Name</label>
		<input type = text name = "name">
		<label>Password</label>
		<input type = "password" name= "pass">
		<label>Password again </label>
		<input type = "password" name = passTwo >
		<input type= submit value=submit>
</form>
 <?php if(empty($error)):?>
 <p><?php  echo "name: "."$name";?> </p>
 <p> <?php echo "cripting passwond: "."$crypt";?></p>
 <?php endif;?>
 <?php if(empty($error) == false):?>
 <?php for($i = 0; $i <count($error);$i++):?>
 <p><?php echo "$error[$i]";?></p>
 <?php endfor;?>
 <?php endif;?>


</body>
</html>