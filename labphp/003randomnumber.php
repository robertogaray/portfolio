<html>
<head>
 <meta charset="utf-8">
 <title>Die Zufallszahl</title>
</head>


 <body>
 
<h1>Die Zufallszahl</h1>
<hr>

 
<form method="get" action="003randomnumber.php">
Die erste Zahl: <input type="number" name="num1" required>
<br>
Die zweite Zahl: <input type="number" name="num2" required>
<br>
<input name="clickRandom" type="submit" value="Sehen Sie das mal an" />
</form>

<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$clickRandom = $_GET["clickRandom"];

if(isset($clickRandom)){
 $result = rand($num1, $num2);
 echo "Die Zufallszahl = $result"; 
}
 ?>



 </body> 
</html>