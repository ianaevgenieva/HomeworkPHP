<?php

session_start();
$array = [];
$str = null;

if (!empty($_POST["numbers"])) {
	$str = $_POST["numbers"];
}
$str2 = split(",",$str);
 
for ($j= 0;$j < count($str2);$j++) {
	$array[]= (int)$str2[$j];
}
sort($array);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-16">
<title>Task 4</title>
</head>
<body>
<form method = "post">
	 <label>Enter Number: example: 1,2,3,4,5,6,7,8,9,10</label>
	 <input type = "text" name = "numbers">
	 <input type = "submit" value = "submit">
 </form>
 <?php for ($i = 0; $i <count($array);$i++):?>
 <p><?php  echo "$array[$i]";?></p>
 <?php endfor;?>
 <p> <?php  echo "min number is : $array[0]";?>
  <p> <?php  echo "max number is : $array[9]";?>

</body>
</html>