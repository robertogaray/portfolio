<?php
//getting data

$docente = $_GET["NAME_docente"];
$institucionEducativa = $_GET["NAME_institucionEducativa"];
$lugar = $_GET["NAME_lugar"];
$grado = $_GET["NAME_grado"];
$area = $_GET["NAME_area"];
$ARRAY_fechas = $_GET["NAME_fecha"];
$experienciaDeAprendizaje = $_GET["NAME_experienciaDeAprendizaje"];


/*
echo "---------DEBUGGING";
echo "<BR>";
echo $docente;
echo "<BR>";
echo $institucionEducativa;
echo "<BR>";
echo $lugar;
echo "<BR>";
echo $grado;
echo "<BR>";
echo $area;
echo "<BR>";
echo $ARRAY_fechas[0];
echo "<BR>";
echo $ARRAY_fechas[3];
echo "<BR>";
echo $experienciaDeAprendizaje;
*/
//---------------------------------------------------------------------------------------

$ExperienciaDeAprendizaje = array
(
"Let’s Exchange Personal Information",
"Let’s Create Local and Global Ads",
"Let’s Reduce Stress",
"People Who Make a Difference",
"Let’s Celebrate Diversity!",
"Let’s Go Green!",
"Inventions and Technology in our Lives!",
"Let’s change our lifestyle",
"This is Peru!"
);
//---------------------------------------------------------------------------------------

$propositoDeExperienciaDeAprendizaje = array
(
"AL finalizar el estudiante debe explicar y comprender conversaciones escritas breves y sencillas en inglés identificando información personal, deduciendo el léxico y las estructuras para elaborar una conversación para presentarse y conocer otras personas",
"AL finalizar el estudiante debe explicar y comprender textos publicitarios breves y sencillos en inglés identificando vocabulario y estructuras que te ayudarán a completar un anuncio publicitario en inglés para promocionar un emprendimiento familiar.",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés, deduciendo el léxico y las estructuras para elaborar un testimonio, sobre las actividades que realizas para reducir el estrés",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés deduciendo el vocabulario y las estructuras simples para elaborar un fanzine o una infografía sobre una peruana o peruano y las acciones que realiza en beneficio de su comunidad",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés identificando palabras y frases simples, para elaborar un párrafo en inglés describiendo las acciones que tú y tu familia pueden realizar y que expresen nuestra diversidad cultural.",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés sobre rutinas eco-amigables, para elaborar un texto sencillo en inglés sobre tu rutina.",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés sobre objetos tecnoló gicos y/o inventos que nos ayudan a realizar diferentes actividades de nuestra vida diaria para llenar una ficha sobre los mismos.",
"AL finalizar el estudiante debe explicar y comprender información específica de textos en inglés sobre actividades deportivas, a fin de elaborar una infografía utilizando el vocabulario y estructuras adecuadas en inglés.",
"AL finalizar el estudiante debe explicar y comprender textos breves y sencillos en inglés que nos ayudarán a elaborar un póster para redes sociales, a fin de dar a conocer los motivos por los que sentimos orgullo de ser peruanas y peruanos."
);
//---------------------------------------------------------------------------------------
// INSTRUMENTOS DE EVALUACION
$instrumentoDeEvaluacion = array(
  "Lista de cotejo", // lista de cotejo para evaluar durante las actividades
  "Rubrica" // rubrica es para evaluar la experiencia
);

//---------------------------------------------------------------------------------------
$competenciasMasSusDesenpenosIngles = array(
  array(
      "1. SE COMUNICA ORALMENTE EN INGLÉS COMO LENGUA EXTRANJERA",
      "1.1 Obtiene información de textos orales.",
      "1.2 Infiere e interpreta información de textos orales.",
      "1.3 Adecúa, organiza y desarrolla las ideas de forma coherente y cohesionada",
      "1.4 Utiliza recursos no verbales y paraverbales de forma estratégica.",
      "1.5 Interactúa estratégicamente con distintos interlocutores.",
      "1.6 Reflexiona y evalúa la forma, el contenido y el contexto del texto oral."
  ),
  array(
      "2. LEE DIVERSOS TIPOS DE TEXTOS EN INGLÉS COMO LENGUA EXTRANJERA",
      "2.1 Obtiene información del texto escrito.",
      "2.2 Infiere e interpreta información del texto escrito.",
      "2.3 Reflexiona y evalúa la forma, el contenido y el contexto del texto escrito."
  ),
  array(
      "3. ESCRIBE DIVERSOS TIPOS DE TEXTOS EN INGLÉS COMO LENGUA EXTRANJERA",
      "3.1 Adecúa el texto a la situación comunicativa.",
      "3.2 Organiza y desarrolla las ideas de forma coherente y cohesionada",
      "3.3 Utiliza convenciones del lenguaje escrito de forma pertinente.",
      "3.4 Reflexiona y evalúa la forma, el contenido y el contexto del texto escrito"
      )
  
  );
//---------------------------------------------------------------------------------------

$productoDeExperienciaDeAprendizaje = array
(
array(
    "Elaborar una conversación en línea intercambiando información personal básica con otra persona que habla inglés",
    //RESUMEN SOBRE EL PRODUCTO
    "Como resultado del trabajo de las actividades vamos a elaborar una conversación en línea intercambiando información personal básica con otra persona que habla inglés en el que:",
    //DESEMPEÑOS
    "Adecuas una conversación en línea escrita para intercambiar información con otro estudiante.",
    "Organizas y desarrollas tus ideas para intercambiar información personal en el contexto de una conversación en línea.",
    "Relacionas tus ideas para responder y completar preguntas utilizando el vocabulario adecuado para intercambiar información personal.",
    "Empleas el signo de interrogación al final de las preguntas y elaboras o completas oraciones breves y sencillas para dar respuesta a preguntas sobre información personal.",
    "Revisas el texto escrito para mejorar algunos aspectos de tu propia producción"
),
array(
    "Elaborar un anuncio publicitario",
    "Como resultado de las actividades vamos a elaborar un anuncio publicitario y llenar un ficha de evaluación en inglés en los que:",
    "Adecuas un anuncio publicitario para promocionar un producto de un negocio familiar.",
    "Organizas y desarrollas tus ideas para promocionar un producto.",
    "Relacionas tus ideas utilizando adjetivos para describir el producto y frases de acción para promocionarlo.",
    "Empleas el signo de admiración al final de las frases de acción y elaboras oraciones breves y sencillas para dar información del producto.",
    "Revisas el texto de tu anuncio publicitario para mejorarlo.",
    "Obtienes información relevante del texto que evalúas.",
    "Realizas inferencias para evaluar la creatividad y eficiencia del anuncio.",
    "Brindas tu opinión sobre si el anuncio te gustó o no."
),
array(
    "Elaborarán un testimonio escrito en inglés sobre las acciones que pueden ayudar a manejar el estrés",
    "Como resultado de tu trabajo elaborarán un testimonio escrito en inglés sobre las acciones que pueden ayudar a manejar el estrés en el que:",
    "Adecuas el texto para dar a conocer las acciones que realizas para manejar el estrés en el contexto de la pandemia.",
    "Organizas y desarrollas tus ideas para dar a conocer las acciones que realizas para manejar el estrés en el contexto de la pandemia",
    "Relacionas tus ideas utilizando el conector de adición “and” para unir las acciones que realiza para manejar el estrés en el contexto de la pandemia.",
    "Empleas el vocabulario y estructura adecuadas para elaborar oraciones breves y sencillas que describen las actividades que realizas para manejar el estrés; y utilizas la coma y el punto final para separar las acciones.",
    "Revisas el texto elaborado para mejorarlo."
),
array(
    "Elaborar un texto en inglés para un fanzine o infografía",
    "Como resultado del trabajo en las actividades vamos a elaborar un texto en inglés para un fanzine o infografía en el que:",
    "Adecuas el texto para describir estas acciones que realiza una peruana o peruano en beneficio de su comunidad.",
    "Organizas tus ideas para brindar información básica personal de una peruana o peruano y describes las acciones que realiza en beneficio de su comunidad.",
    "Usas el conector AND, vocabulario adecuado y oraciones sencillas en presente simple para describir las acciones que una peruana o peruano realiza en beneficio de su comunidad",
    "Revisas si el texto en inglés describe las acciones que una peruana o peruano realiza en beneficio de su comunidad, si es coherente y si utilizas AND y el presente simple correctamente."
),
array(
    "Elaborar un párrafo sobre tus habilidades y las de los miembros de tu familia en inglés",
    "Como resultado del trabajo en las actividades vamos a elaborar un párrafo sobre tus habilidades y las de los miembros de tu familia en inglés en el que:",
    "Adecuas el texto sobre tus habilidades y las habilidades de algunos miembros de tu familia y tu familia para completar un correo electrónico.",
    "Organizas tus ideas en un párrafo que aborde la temática sobre tus habilidades y las habilidades de algunos miembros de tu familia.",
    "Utilizas el verbo CAN para expresar habilidades de manera coherente.",
    "Revisas si el párrafo comunica tus habilidades y las habilidades de los miembros de tu familia y si has utilizado correctamente el verbo CAN."
),
array(
    "Elaborar un texto breve sobre tu rutina diaria y actividades eco-amigables en inglés",
    "Resultado del trabajo de las actividades en los tramos vamos a elaborar un texto breve sobre tu rutina diaria y actividades eco-amigables en inglés en el que:",
    "Adaptas el texto para completar un correo electrónico y describes tu rutina diaria, indicando si es eco-amigable.",
    "Organizas tus ideas en oraciones sencillas para describir tu rutina indicando si esta es eco- amigable.",
    "Usas el presente simple en primera persona para describir tu rutina diaria y acciones que son eco-amigables",
    "Revisas el texto elaborado para reflexionar, si las actividades descritas sobre tu rutina diaria son eco-amigables y si el vocabulario y la estructura del presente simple son utilizados correctamente."
),
array(
    "Llenar una ficha informativa en inglés con información específica, extraída de textos escritos sobre inventos",
    "Vamos a llenar una ficha informativa en inglés con información específica, extraída de textos escritos sobre inventos, evidenciando que:",
    "Obtienes información explícita de un texto, para completar una ficha informativa sobre el invento favorito de dos personas.",
    "Infieres información explícita y relevante del texto, para completar la característica y la opinión sobre el invento en la ficha informativa.",
    "Opinas sobre el texto leído."
),
array(
    "Elaborar una infografía en inglés para motivar a otros jóvenes a realizar prácticas deportivas manteniendo las medidas necesarias de cuidado.",
    "Como resultado de las actividades, vamos a elaborar una infografía en inglés para motivar a otros jóvenes como tú a realizar prácticas deportivas manteniendo las medidas necesarias de cuidado.",
    "Adecúas tus ideas en una infografía para motivar a adolescentes y jóvenes a realizar actividades deportivas.",
    "Produces una infografía para fomentar el cuidado al realizar actividades deportivas con coherencia y cohesión.",
    "Utilizas el imperativo en sus formas afirmativa y negativa.",
    "Revisas si la infografía emplea el vocabulario relacionado con el tema y la estructura imperativa."
),
array(
    "Elaborar un póster en inglés",
    "Como resultado del trabajo de las actividades, vamos a elaborar un póster en inglés en el que:",
    "Adecúas tus ideas al formato de un póster para dar a conocer los motivos por los cuales sientes orgullo de ser peruana o peruano en su bicentenario",
    "Organizas tus ideas en oraciones en inglés, para dar a conocer el aniversario del Perú y los motivos por los cuales sientes orgullo de ser peruana o peruano.",
    "Usas las frases “I’m proud of”, la palabra “like”, algunos adjetivos y el vocabulario adecuado para dar a conocer los motivos por los cuales sientes orgullo de ser peruana o peruano.",
    "Revisas si tu texto da a conocer el aniversario de tu país y los motivos por los que sientes orgullo de ser peruana o peruano en su bicentenario, y si utilizas correctamente la frase “I’m proud of”, la palabra “like” y los adjetivos"
),
);
//------------------------------------------------------------------------------------------
/*el titulo sale del $productoDeLaSesion o $actividadPrincipalDeLaSesiones
DADO QUE....
una SESION puede tener varias ACTIVIDADES
una ACTIVIDAD puede tenet varias SESIONES
POR LO TANTO... 
1 actividad X 4 sesiones
Se tomara el titulo de ACTIVIDAD $actividadPrincipalDeLaSesiones, no del PRODUCTO

*/
$titulos = array(
    $productoDeExperienciaDeAprendizaje[0][0],
    $productoDeExperienciaDeAprendizaje[1][0],
    $productoDeExperienciaDeAprendizaje[2][0],
    $productoDeExperienciaDeAprendizaje[3][0],
    $productoDeExperienciaDeAprendizaje[4][0],
    $productoDeExperienciaDeAprendizaje[5][0],
    $productoDeExperienciaDeAprendizaje[6][0],
    $productoDeExperienciaDeAprendizaje[7][0],
    $productoDeExperienciaDeAprendizaje[8][0]

);
//------------------------------------------------------------------------------------------


//create variable to storage the repetitive data
$datosInformativos = array
("INSTITUCIÓN EDUCATIVA: HV",
"LUGAR: HUÁNUCO",
"DOCENTE: ROBERTO GARAY MEDRANO",
"GRADO: 1RO - VI CICLO",
"NIVEL: SECUNDARIA",
"AREA: INGLES",
"FECHA"
);

//------------------------------------------------------------------------------------------
//create whole sessions
//  SHIFT + TAB
//id, 
$arraySesionesDeAprendizaje = array
(
array(1,$datosInformativos,$titulos[0]),
array(2,$datosInformativos,$titulos[1]),
array(3,$datosInformativos,$titulos[2]),
array(4,$datosInformativos,$titulos[3]),
array(5,$datosInformativos,$titulos[4]),
array(6,$datosInformativos,$titulos[5]),
array(7,$datosInformativos,$titulos[6]),
array(8,$datosInformativos,$titulos[7])
);

//----------------------------------------------------------------------------------------------------------
//logic for determine which action will happen after choose the number of the EDA

if($experienciaDeAprendizaje == "eda01")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[0];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[0];
  $eda = $ExperienciaDeAprendizaje[0];

}
elseif($experienciaDeAprendizaje == "eda02")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[1];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[1];
  $eda = $ExperienciaDeAprendizaje[1];

}
elseif($experienciaDeAprendizaje == "eda03")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[2];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[2];
  $eda = $ExperienciaDeAprendizaje[2];

}
elseif($experienciaDeAprendizaje == "eda04")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[3];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[3];
  $eda = $ExperienciaDeAprendizaje[3];

}
elseif($experienciaDeAprendizaje == "eda05")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[4];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[4];
  $eda = $ExperienciaDeAprendizaje[4];

}
elseif($experienciaDeAprendizaje == "eda06")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[5];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[5];
  $eda = $ExperienciaDeAprendizaje[5];

}
elseif($experienciaDeAprendizaje == "eda07")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[6];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[6];
  $eda = $ExperienciaDeAprendizaje[6];

}
elseif($experienciaDeAprendizaje == "eda08")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[7];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[7];
  $eda = $ExperienciaDeAprendizaje[7];

}
elseif($experienciaDeAprendizaje == "eda09")
{
  $propositoEDA = $propositoDeExperienciaDeAprendizaje[8];
  $instrumentoDeEvaluacionDeLaSesion = $instrumentoDeEvaluacion[0];
  $titulo = $titulos[8];
  $eda = $ExperienciaDeAprendizaje[8];

}
elseif($experienciaDeAprendizaje == "")
{
  echo "nope";
}


//----------------------------------------------------------------------------------------------------------

//frases motivadoras
$ArrayFrasesMotivadoras = array(
    "El éxito es la suma de pequeños esfuerzos repetidos día tras día.",
    "La satisfacción consiste en la ausencia del dolor, que es el elemento positivo de la vida.",
    "El joven debe, tempranamente, estar capacitado para soportar estar solo; ya que es una fuente de felicidad y de paz mental.",
    "El que no disfruta de la soledad, no amará a la libertad.",
    "Los mejores, más variados y duraderos placeres, son los de la mente.",
    "Un hombre sólo puede ser él mismo mientras está solo; si no ama su soledad, no amará su libertad, porque únicamente cuando está solo, es realmente libre.",
    "Seguramente, un hombre puede hacer lo que quiere hacer; sin embargo, no puede determinar lo que quiere."
);


?>


<HTML>
<head>
<style>


table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

H1 {
  text-align: center;
}


</style>

</head>
<BODY>
<!------loop------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<?php
$numeroTotalDeSesiones = 7;//COUBNTS FROM ZERO
for($numeroDeSesionDeAprendizaje = 0; $numeroDeSesionDeAprendizaje <= $numeroTotalDeSesiones; $numeroDeSesionDeAprendizaje++ )
{
echo "<H1>";
echo $titulo;
echo "</H1>";
echo "<H2>DATOS INFORMATIVOS</H2>";
echo "DOCENTE: ".$docente;
echo "</BR>";
echo "INSTITUCIÓN EDUCATIVA: ".$institucionEducativa;
echo "</BR>";
echo "LUGAR: ".$lugar;
echo "</BR>";
echo "GRADO: ".$grado;
echo "</BR>";
echo "AREA: ".$area;
echo "</BR>";
echo "FECHA: ".$ARRAY_fechas[$numeroDeSesionDeAprendizaje];
echo "</BR>";
echo "NRO EDA:  ".$experienciaDeAprendizaje;
echo "</BR>";
echo "TITULO DE EDA:  ".$eda;
echo "</BR>";

echo "<H2>PROPOSITO DE APRENDIZAJE</H2>";
$Una_Competencia_Al_Azar_Ingles = rand(0,2);//formula escoje una de las competencias al azar
echo "COMPETENCIA: ";
echo $competenciasMasSusDesenpenosIngles[$Una_Competencia_Al_Azar_Ingles][0];//Competencia;
echo "</BR>";
echo "DESENPEÑOS: ";
echo "</BR>";
echo $competenciasMasSusDesenpenosIngles[$Una_Competencia_Al_Azar_Ingles][1];//DESENPEÑOS;
echo "</BR>";
echo $competenciasMasSusDesenpenosIngles[$Una_Competencia_Al_Azar_Ingles][2];//DESENPEÑOS;
echo "</BR>";
echo "INSTRUMENTOS: ";
echo $instrumentoDeEvaluacion[0];//INSTRUMENTO;
echo "</BR>";
echo "PROPÓSITO DE APRENDIZAJE DE LA SESIÓN: ";
echo $propositoDeExperienciaDeAprendizaje[3];//PROPÓSITO DE APRENDIZAJE DE LA SESIÓN;

echo "<H2>MOMENTOS DE LA SESIÓN</H2>";
echo "<H3>INICIO</H3>";

$inicio = <<<EOD
El profesor explica la experiencia de aprendizaje
</BR>
El profesor explica el proposito
</BR>
El profesor explica las competencias
</BR>
El profesor explica las los criterios de evaluación para que los estudiantes reflexiones sobre su proceso de metacógnicion y puedan auto regular su aprendizaje
</BR>
MOTIVACIÓN El docente explica  sobre el “Permanente Error Constructivo”, para que los alumnos se sientan libres de cometer errores durante su proceso de aprendizaje sin el temor de ser descalificados.
</BR>
RECOJO DE SABERES PREVIOS El docente hace recojo de saberes previos por medio de preguntas, evidenciando los errores de forma acertiva.
EOD;
echo $inicio;



echo "<H3>DESARROLLO</H3>";

$desarrollo = <<<EOD
El profesor plantea el producto o evidencia de aprendizaje tangible o intangible
</BR>
El profesor muestra los procesos didácticos o estrategias de las rutas de aprendizaje u otras
</BR>
Los alumnos desarrollan la ficha basada estratégias didacticas propuestas por el docente
EOD;
echo $desarrollo;

echo "<H3>CIERRE</H3>";
$cierre = <<<EOD
El docente realiza preguntas de para que los estudiantes participen
</BR>
El docente retroaliemta a los estudiantes de forma acertiva
</BR>
Los estudiantes autorregulan su aprendizaje por medio de feed back
</BR>
El docente realiza preguntas de metacognición basado en la lista de preguntas
</BR>
Los estudiantes reflexionan sobre la forma en que han aprendido.
</BR>
Los estudiantes reflexionan sobre la forma en que autoregulan su aprendizaje
EOD;
echo $cierre;
//espacio de separacion
echo "</BR>";
echo "<HR>";
echo "</BR>";
}//END OF THE LOOP
//END OF THE LOOP














?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
  
</BODY>
</HTML>