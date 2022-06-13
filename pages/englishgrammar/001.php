<?php 
//creating the template of the questions
//id,pregunta,alternativaCorrecta,opciones
$arrayPreguntas = array
(
array(1,"Traducir Explicit 	/ɪkˈsplɪsət/ ","A",array("Explícito", "Específico", "Exponencial")),

array(2,"Traducir Exponential 	/ˌɛkspoʊˈnɛnʧəl/","B",array("Específico", "Exponencial", "Explícito")),

array(3,"Traducir Specific 	/spəˈsɪfɪk/ ","C",array("Explícito", "Exponencial", "Específico")),

array(4,"Traducir Colloquial /kəˈloʊkwiəl/","C",array("Exquisito", "Coherente", "Colloquial")),

array(5,"Traducir Delicate 	/ˈdɛləkət/","B",array("Explícito", "Delicado", "Coherente"))
); 


/* 
Explicit
Exponential
Specific
Colloquial
Delicate
Coherent
Eloquent
Exquisite
Insatiable
Mischievous


Explicit 	/ɪkˈsplɪsət/
Exponential 	/ˌɛkspoʊˈnɛnʧəl/
Specific 	/spəˈsɪfɪk/
Colloquial 	/kəˈloʊkwiəl/
Delicate 	/ˈdɛləkət/
Coherent 	/koʊˈhɪrənt/
Eloquent 	/ˈɛləkwənt/
Exquisite 	/ˈɛkskwəzət/
Insatiable 	/ɪnˈseɪʃəbəl/
Mischievous	/ˈmɪsʧəvəs/

Explícito
Exponencial
Específico
Coloquial
Delicado
Coherente
Elocuente
Exquisito
Insaciable
Travieso


https://www.mmmenglish.com/2019/12/07/10-advanced-english-adjectives/

*/





$totalOfQuestions = count($arrayPreguntas);
?>



<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<!--new article -------------------------------------------------------->

<div class="article_flex_container" >


<H1>ADJETIVOS EN INGLES 1</H1>
<HR>


<?php if(!$_POST): ?>
<form method="post" id="quiz">


<?php

for($NumberOfQuestion = 0; $NumberOfQuestion < $totalOfQuestions; $NumberOfQuestion++)
{
echo "<B>";
echo $arrayPreguntas[$NumberOfQuestion][0]; 
echo ") "; 

echo $arrayPreguntas[$NumberOfQuestion][1];
echo "</B>";
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
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];


    $totalCorrect = 0;
    
    if ($answer1 == $arrayPreguntas[0][2]) { $totalCorrect++; }
    if ($answer2 == $arrayPreguntas[1][2]) { $totalCorrect++; }
    if ($answer3 == $arrayPreguntas[2][2]) { $totalCorrect++; }
    if ($answer4 == $arrayPreguntas[3][2]) { $totalCorrect++; }
    if ($answer5 == $arrayPreguntas[4][2]) { $totalCorrect++; }

    
    

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
</LI>
<LI>
<?php echo $arrayPreguntas[3][2]; ?>
</LI>
<LI>
<?php echo $arrayPreguntas[4][2]; ?>
</LI>
</OL>





<?php endif ?>





<!--end article flex container-------------------------------------------------------->
</div>



<!--

<B>1) Traducir Explicit 	/ɪkˈsplɪsət/ </B></BR>
<div><input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />A) <label for="question-1-answers-A">Explícito</label></div>
<div><input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />B) <label for="question-1-answers-B">Específico</label></div>
<div><input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />C) <label for="question-1-answers-C">Exponencial</label></div>

</BR></BR>

<B>2) Traducir Exponential 	/ˌɛkspoʊˈnɛnʧəl/</B></BR>
<div><input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />A) <label for="question-2-answers-A">Específico</label></div>
<div><input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />B) <label for="question-2-answers-B">Exponencial</label></div>
<div><input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />C) <label for="question-2-answers-C">Explícito</label></div>

</BR></BR>

<B>3) Traducir Specific 	/spəˈsɪfɪk/ </B></BR>
<div><input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />A) <label for="question-3-answers-A">Explícito</label></div>
<div><input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />B) <label for="question-3-answers-B">Exponencial</label></div>
<div><input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />C) <label for="question-3-answers-C">Específico</label></div>


</BR></BR>
<B>4) Traducir Colloquial /kəˈloʊkwiəl/</B></BR>
<div><input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />A) <label for="question-4-answers-A">Exquisito</label></div>
<div><input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />B) <label for="question-4-answers-B">Coherente</label></div>
<div><input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />C) <label for="question-4-answers-C">Colloquial</label></div>

</BR></BR>
<B>5) Traducir Delicate 	/ˈdɛləkət/</B></BR>
<div><input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />A) <label for="question-5-answers-A">Explícito</label></div>
<div><input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />B) <label for="question-5-answers-B">Delicado</label></div>
<div><input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />C) <label for="question-5-answers-C">Coherente</label></div>

</BR></BR>

<input type="submit" value="CORREJIR" class="submitbtn" />


-->