<html>
<HEAD>
</HEAD>
<BODY>


<H1>Der Taschenrechner</H1>
<form action="001calculatorphp.php" method="get">
die erste Zahl: <input type="number" name="num1">
    <br>
die zweite Zahl: <input type="number" name="num2">
    <br>

  <button type="submit" name="mathOperation" value="addition">+ (die Addition)</button>
  <br>
  <button type="submit" name="mathOperation" value="substraction">- (die Subtraktion)</button>
  <br>
  <button type="submit" name="mathOperation" value="multiplication">x (die Multiplikation)</button>
  <br>
  <button type="submit" name="mathOperation" value="division">/ (die Division)</button>
  <br>


</form>

<HR>

<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$mathOperation = $_GET["mathOperation"];

if($mathOperation == "addition"){

    $addition = $num1 + $num2;

    echo "$num1 + $num2 = $addition";
    echo "<br>";
    echo "$num1 und $num2 sind $addition";
    echo "<br>";
    echo "$num1 plus $num2 sind $addition";
    echo "<br>";
    echo "$num1 plus $num2 gleich $addition";

   

}

elseif($mathOperation == "substraction"){
 
    $substraction = $num1 - $num2;

    echo "$num1 - $num2 = $substraction";
    echo "<br>";
    echo "$num1 weniger $num2 ist $substraction";
    echo "<br>";
    echo "$num1 minus $num2 gleich $substraction";

}

elseif($mathOperation == "multiplication"){
    $multiplication = $num1 * $num2;
    echo "$num1 x $num2 = $multiplication";
    echo "<br>";
    echo "$num1 mal $num2 sind $multiplication";
    echo "<br>";
    echo "$num1 multipliziert mit $num2 ist gleich $multiplication";


}

elseif($mathOperation == "division"){
    $division = $num1 / $num2;
    echo "$num1 / $num2 = $division";
    echo "<br>";
    echo "$num1 (geteilt) durch $num2 sind $division";

} else {
    echo "invalid operator";
}
?>








<HR>





</BODY>