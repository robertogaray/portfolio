<html>
<head>
 <meta charset="utf-8">
 <title>Random Cat Name Generator</title>
</head>


<body>
 
<h1>Random Cat Name Generator</h1>
<hr>
<P><a href="phpprojects.php">go back</a></P>

<form method="GET" action="004randomname.php">
        <input name="clickRandom" type="submit" value="Drop a name!"/>

        <br>
        <br>

<marquee>
        <button name="clickRandom" type="submit">
        <img src="images/cat.jpg" alt="cat" width="100"/>
        </button>
</marquee>
      
        
</form>

<?php
$clickRandom = $_GET["clickRandom"];

if(isset($clickRandom)){

$randomVar = rand(0,11);
$catNamesArray = array ("minchi","lokito","michifuz","luna","milo","oliver","leo","loki","bella","kitty","lucy","willow","princess","mushu","ren");
$numberElementsInArray = count($catNamesArray); 
$result = $catNamesArray[$randomVar];
$resultUppercase = strtoupper($result);
$numberLetters = strlen($result); 

echo "The chosen name is $resultUppercase which has $numberLetters letters." ; 
echo "<br>"; 
echo "Chosen from $numberElementsInArray options" ;



}

 ?>



 </body> 
</html>