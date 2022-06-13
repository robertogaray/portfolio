<?php 
//creating the template of the questions
//id,pregunta,alternativaCorrecta,opciones
$arrayPreguntas = array
(
array(1,"Traducir RED en ingles","A",array("ROJO", "AZUL", "AMARILLO")),
array(2,"Traducir BLUE en ingles","B",array("NEGRO", "AZUL", "VIOLETA")),
array(3,"Traducir YELLO en ingles","C",array("ROJO", "BLANCO", "AMARILLO"))
); 


$totalOfQuestions = count($arrayPreguntas);
?>



<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<!--new article -------------------------------------------------------->

<div class="article_flex_container" >


<H1>COLORES EN INGLES</H1>
<HR>


<?php if(!$_POST): ?>
<form method="post" id="quiz">


<?php

for($NumberOfQuestion = 0; $NumberOfQuestion < $totalOfQuestions; $NumberOfQuestion++)
{
echo $arrayPreguntas[$NumberOfQuestion][0]; 
echo ") "; 
echo $arrayPreguntas[$NumberOfQuestion][1];
echo "</BR>";



    echo "<div>";
    echo '<input type="radio" name="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers" id="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-A" value="A" />';
    echo 'A) <label for="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-A">'. $arrayPreguntas[$NumberOfQuestion][3][0]. '</label>';
    echo "</div>";
    
    echo "<div>";
    echo '<input type="radio" name="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers" id="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-B" value="B" />';
    echo 'B) <label for="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-B">'. $arrayPreguntas[$NumberOfQuestion][3][1]. '</label>';
    echo "</div>";

    echo "<div>";
    echo '<input type="radio" name="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers" id="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-C" value="C" />';
    echo 'C) <label for="question-' . $arrayPreguntas[$NumberOfQuestion][0] .'-answers-C">'. $arrayPreguntas[$NumberOfQuestion][3][2]. '</label>';
    echo "</div>";

    echo "</BR>";
    echo "</BR>";

}
?>

<input type="submit" value="CORREJIR" class="submitbtn" />
 
 </form>

 <BR>
 <BR>



<?php endif ?>
<!------------------------------------------------------------------------------------------------------------------------>
<!--CHECKING THE RIGHT ANSWERS----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->





<?php

if($_POST)
{


    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];


    $totalCorrect = 0;
    
    if ($answer1 == $arrayPreguntas[0][2]) { $totalCorrect++; }
    if ($answer2 == $arrayPreguntas[1][2]) { $totalCorrect++; }
    if ($answer3 == $arrayPreguntas[2][2]) { $totalCorrect++; }

    
    

 }
     

 ?>



<?php if($_POST): ?>

<div id='results'> 
<h1>RESULTADO</h1>
<?php echo "TOTAL: $totalCorrect / $totalOfQuestions"; ?>
<BR>
<?php echo "RESPUESTAS CORRECTAS:  $totalCorrect"; ?>
<BR>
<?php echo "TOTAL DE PREGUNTAS:  $totalOfQuestions"; ?>
</div>

<h1>RESPUESTAS</h1>
<OL>
<LI>
<?php echo $arrayPreguntas[0][2]; ?>
</LI>
<LI>
<?php echo $arrayPreguntas[1][2]; ?>
</LI>
<LI>
<?php echo $arrayPreguntas[2][2]; ?>
</OL>





<?php endif ?>





<!--end article flex container-------------------------------------------------------->
</div>