
 <?php
session_start();
$isValidForm = false;

if (!empty($_POST)) {
   $isValidForm = true;
}

if ($isValidForm) {
 $numberOne = $_POST["firstNum"];
 $numberTwo = $_POST["secondNum"];
 $result = $_POST["result"];
 $operation = $_POST["operation"];
   
  if ($operation === "+") {
  	$result = $numberOne + $numberTwo;
  }
  if ($operation === '-') {
  	$result = $numberOne- $numberTwo;
  }
  if ($operation === "*") {
  	$result = $numberOne * $numberTwo;
  }
  if ($operation === "/") {
  	$result = $number / $numberTwo;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task1</title>
<style>
label {
 display: block;
}
</style>
</head>
<body>
 <form action = "" method = "post">
    <label>Input First Number</label>
    <input type = "text"/ name="firstNum">
    <label>Input Second Number</label>
    <input type = "text" name = "secondNum"/>
    <label>Input operation </label>
    <input type ="text"  name = "operation"/>
    <label>Result is :</label>
    <input type ="result" name = "result"  value = "<?php echo "$result" ?>"/>
    <input type="submit" value="Calculate"/>
 </form>
</body>
</html>