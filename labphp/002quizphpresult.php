
<html>
 
<head>
 <meta charset=UTF-8" />
 <title>PHP Quiz</title>
</head>
 
<body>
 

 
 <h1>Result</h1>
 
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>
 

 <h2>Answers</h2>

<pre>
neu - new
alt - old 
jung - young 
gut - good 
schlecht - bad 
groß - big 
klein - small 
kurz - short 
lang - long 
spät - late 
früh - early 
schwer - difficult, heavy 
leicht - light 
einfach - easy 
schnell - fast 
langsam - slow 
billig - cheap 
teuer - expensive
kalt - cold 
warm - warm 
heißt - hot
glücklich - happy 
traurig - sad 
gesund - healthy 
krank - sick 
arm - poor 
reich - rich 
schön - beautiful 
richtig - right 
falsch - wrong 
wichtig - important 
müde - tired 
langweilig - boring
interessamt - interesting




</pre>   
 
</body>
 
</html>