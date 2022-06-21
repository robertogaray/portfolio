<?php
//getting data

$docente = $_GET["NAME_docente"];
$institucionEducativa = $_GET["NAME_institucionEducativa"];
$lugar = $_GET["NAME_lugar"];
$grado = $_GET["NAME_grado"];
$area = $_GET["NAME_area"];
$ARRAY_fechas = $_GET["NAME_fecha"];
$experienciaDeAprendizaje = $_GET["NAME_experienciaDeAprendizaje"];

//---------------------------------------------------------------------------------------
/* 
COMUNICACION EDAS
1 Título: Promovemos la participación democrática y la convivencia en la diversidad
2 Título: Promovemos el emprendimiento a través del uso responsable de los recursos
3 Título: Promovemos el cuidado de nuestra salud respiratoria en armonía con el ambiente
4 Título: Reflexionamos y valoramos los avances y desafíos del Perú en el bicentenario para construir el país que anhelamos
5 Título: Fomentamos acciones para ejercer nuestro derecho al acceso y uso del agua
6 Título: Fortalecemos nuestro sistema inmunológico en armonía con el ambiente
7 Título: Reconocemos la creatividad de las familias peruanas
8 Título: Promovemos la salud como un bien de todos
9 Título: Asumimos compromisos ante los desafíos del bicentenario
*/
$ExperienciaDeAprendizaje = array
(
"Promovemos la participación democrática y la convivencia en la diversidad",
"Promovemos el emprendimiento a través del uso responsable de los recursos",
"Promovemos el cuidado de nuestra salud respiratoria en armonía con el ambiente",
"Reflexionamos y valoramos los avances y desafíos del Perú en el bicentenario para construir el país que anhelamos",
"Fomentamos acciones para ejercer nuestro derecho al acceso y uso del agua",
"Fortalecemos nuestro sistema inmunológico en armonía con el ambiente",
"Reconocemos la creatividad de las familias peruanas",
"Promovemos la salud como un bien de todos",
"Asumimos compromisos ante los desafíos del bicentenario"
);
//---------------------------------------------------------------------------------------
$propositoDeExperienciaDeAprendizaje = array
(
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna.",
"Lee textos escritos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Escribe diversos tipos de textos en su lengua materna. Se comunica oralmente en su lengua materna."
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
        "1. SE COMUNICA ORALMENTE EN SU LENGUA MATERNA",
        "1.1 Obtiene información del texto oral.",
        "1.2 Infiere e interpreta información del texto oral.",
        "1.3 Adecúa, organiza y desarrolla las ideas de forma coherente y cohesionada.",
        "1.4 Utiliza recursos no verbales y paraverbales de forma estratégica",
        "1.5 Interactúa estratégicamente con distintos interlocutores.",
        "1.6 Reflexiona y evalúa la forma, el contenido y contexto del texto oral."
    ),
    array(
        "2. LEE DIVERSOS TIPOS DE TEXTOS ESCRITOS EN SU LENGUA MATERNA",
        "2.1 Obtiene información del texto escrito.",
        "2.2 Infiere e interpreta información del texto escrito.",
        "2.3 Reflexiona y evalúa la forma, el contenido y el contexto del texto escrito."
    ),
    array(
        "3. ESCRIBE DIVERSOS TIPOS DE TEXTOS EN SU LENGUA MATERNA",
        "3.1 Adecúa el texto a la situación comunicativa. ",
        "3.2 Organiza y desarrolla las ideas de forma coherente y cohesionada.",
        "3.3 Utiliza convenciones del lenguaje escrito de forma pertinente.",
        "3.4 Reflexiona y evalúa la forma, el contenido y contexto del texto escrito."
        )
    
    );
//---------------------------------------------------------------------------------------
/*LISTA DE ACTIVIDADES  
PUEDE SER SOLAMENTE UNA SOLA ACTIVIDAD POR TODA LA EXPERIENCIA DE APRENDIZAJE
Solamente de realizara una sola actividad en donde se desarrollara todos las competencias
CRITERIOS DE EVALUACION = competencias + capacidades + estándares de aprendizje desempeños
DESEMPEÑOS = Son descripciones específicas de lo que hacen los estudiantes
CRITERIOS DE EVALUACION = Referentes específicos para el juicio de valor que describe las características que se quiere valorar nate una situacion determinada
*/

$productoDeExperienciaDeAprendizaje = array
(
array(
"(Lee, opina y propone) Proponemos desde diversas perspectivas, acciones argumentadas que promuevan en la familia y la comunidad el ejercicio de una participación democrática y la convivencia en la diversidad a partir del análisis de su contexto para contribuir con la mejora de la sociedad",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad planifican y elaboran la propuesta de acciones argumentadas que promueven la participación democrática y la convivencia en la diversidad, y que serán incluidas en su formato de presentación elegido (folleto u otro).",
//CRITERIOS DE EVALUACION
"Adecúa el texto (folleto u otro) a los destinatarios, situación y propósito comunicativo.",
"Organiza sus ideas de forma coherente y cohesionada haciendo uso de diversos recursos.",
"Utiliza diversos recursos ortográficos para dar claridad a su texto.",
"Reflexiona sobre la pertinencia del contenido del texto y revisa si ha utilizado los recursos adecuadamente.",
"Identifica información explícita, el tema y el propósito del texto leído sobre la diversidad cultural y la participación democrática.",
"Deduce información implícita del texto leído."
),
array(
"(Reflexionamos, escribimos) Propuesta de acciones creativas para promover el emprendimiento a través del uso sostenible de los recursos y, de esta manera, contribuir al bienestar de nuestra familia y comunidad en un contexto de incertidumbre",
//RESUMEN SOBRE EL PRODUCTO
"Tomando en cuenta las propuestas desarrolladas en las diferentes áreas, seleccionarán aquellas que consideren más acordes para responder al reto. Luego, elaborarán el plan de redacción y el borrador de un texto instructivo (infografía) para dar a conocer su propuesta de acciones creativas que promueven el emprendimiento a través del uso sostenible de los recursos",
//CRITERIOS DE EVALUACION
"Adecúa el texto instructivo (infografía) a los destinatarios, la situación y el propósito comunicativo.",
"Organiza las ideas del texto instructivo de forma coherente y cohesionada haciendo uso de diversos recursos.",
"Utiliza recursos gramaticales y ortográficos que contribuyen al sentido del texto instructivo.",
"Reflexiona sobre la pertinencia del contenido del texto instructivo y revisa si ha utilizado los recursos adecuadamente.",
"Identifica información explícita, el tema y las semejanzas de los textos expositivos leídos.",
"Deduce información implícita de los textos expositivos leídos."
),
array(
"(Lee, opina y propone)Recomendaciones que promuevan el cuidado de la salud respiratoria en relación armoniosa con el ambiente.",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, reconocerán la finalidad, las características y la estructura de un texto instructivo. Luego, planificarán, escribirán, revisarán y elaborarán la versión final de un texto instructivo con el propósito de dar a conocer recomendaciones para cuidar la salud y prevenir las enfermedades respiratorias.",
//CRITERIOS DE EVALUACION
"Adecúa el texto instructivo a la situación comunicativa considerando el propósito comunicativo, el tipo textual y el formato.",
"Organiza y desarrolla el texto instructivo de forma coherente y cohesionada.",
"Utiliza las convenciones del lenguaje escrito de forma pertinente para garantizar la claridad y el sentido del texto instructivo.",
"Evalúa y corrige de forma permanente si el texto instructivo se ajusta a la situación comunicativa y si hay coherencia y cohesión entre las ideas.",
"Identifica información explícita y relevante seleccionando el tema, las ideas principales y secundarias en el texto expositivo que lee.",
"Infiere e interpreta el texto expositivo considerando información relevante y complementaria para construir su sentido global."
),
array(
"(Lee, opina y propone)Narración de un día en el país que anhelamos, donde las ciudadanas y los ciudadanos ejercen sus derechos y cumplen sus deberes, entre ellos los referidos a la igualdad de oportunidades y al acceso a energía limpia",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, darán respuesta a la pregunta-reto planteada en la experiencia de aprendizaje. En ese sentido, identificarán las características que debe tener la narración que escribirán y, además, emplearán la información que más les llamó la atención en cada una de las actividades previas. Tomando en cuenta ello, planificarán, escribirán, revisarán y elaborarán la versión final de la narración con la finalidad de dar a conocer cómo sería su día común en el Perú que anhelan.",
//CRITERIOS DE EVALUACION
"Adecúa la narración del texto “Un día común en el Perú que anhelamos” a la situación comunicativa considerando el propósito comunicativo, el tipo textual y el formato.",
"Organiza y desarrolla, de forma coherente y cohesionada, la narración del texto “Un día común en el Perú que anhelamos”.",
"Utiliza las convenciones del lenguaje escrito de forma pertinente para garantizar la claridad y el sentido de la narración del texto “Un día común en el Perú que anhelamos”.",
"Evalúa y corrige de forma permanente si la narración del texto “Un día común en el Perú que anhelamos” se ajusta a la situación comunicativa y si hay coherencia y cohesión entre las ideas.",
"Identifica información explícita y relevante seleccionando el tema, así como las ideas principales y secundarias en los textos expositivos-argumentativos que lee.",
"Establece conclusiones sobre lo comprendido en los textos expositivos-argumentativos vinculándolos con su experiencia y los contextos socioculturales en los que se desenvuelve.",
"Infiere e interpreta los textos expositivos-argumentativos considerando información relevante y complementaria para construir su sentido global."
),
array(
"(Lee, opina y propone)Discurso u otro medio de difusión para fomentar el ejercicio de nuestros derechos, como el acceso al agua, con el fin de construir a una mejor sociedad.",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, planificarán, textualizarán y revisarán un discurso argumentativo sobre la problemática del agua. En ese sentido, conocerán cómo se estructura un argumento con el fin de que consoliden los que ya elaboraron en actividades anteriores. Luego, a partir de un modelo de discurso, preparar su planificador para ordenar sus ideas. Seguidamente, redactarán la primera versión de su discurso sobre la base de un esquema. Finalmente, revisarán el borrador de su texto para construir su discurso argumentativo.",
//CRITERIOS DE EVALUACION
"Adecúa el discurso considerando el propósito comunicativo, el tipo textual y algunas características del género discursivo.",
"Escribe el discurso de forma coherente y cohesionada.",
"Utiliza recursos gramaticales y ortográficos que contribuyan al sentido del discurso.",
"Emplea adecuadamente el lenguaje para dar énfasis a las argumentaciones del discurso.",
"Evalúa el contenido y la forma del discurso para construir una opinión personal.",
"Identifica información explícita y relevante seleccionando datos específicos y algunos detalles en el texto narrativo y expositivo que lee."
),
array(
"(Lee, opina y propone)Cartilla (u otro medio) con recomendaciones para fortalecer nuestro sistema inmunológico aprovechando, de manera sostenible, los recursos que se encuentran en su localidad o región.",
//RESUMEN SOBRE EL PRODUCTO
"Tomando en cuenta la planificación de la cartilla realizada en la actividad anterior, iniciarán el proceso de textualización de la misma. Para tal fin, leerán los pasos a seguir para redactar este tipo de texto. Luego, redactarán la primera versión considerando el esquema planteado en la ficha. A continuación, la revisarán a partir de una lista de cotejo y, finalmente, redactarán la versión final",
//CRITERIOS DE EVALUACION
"Adecúa la cartilla de recomendaciones al propósito comunicativo, al tipo textual y a algunas características del género discursivo.",
"Escribe la cartilla de recomendaciones de forma coherente y cohesionada.",
"Utiliza recursos gramaticales y ortográficos que contribuyan al sentido de la cartilla de recomendaciones.",
"Evalúa la estructura, las características del género discursivo y la temática desarrollada en la cartilla de recomendaciones.",
"Identifica información explícita y relevante seleccionando datos específicos y algunos detalles en los textos expositivos que lee.",
"Explica el tema y la finalidad de los textos expositivos que lee, distinguiendo lo relevante de lo complementario, clasificando y sintetizando la información."
),
array(
"(Lee, opina y propone)Soluciones creativas para el bienestar familiar que se presentan a través de un afiche, un teatro de títeres u otro medio",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, elaborarán su afiche con soluciones creativas. Para ello, leerán dos modelos de afiche con la intención de deducir sus características y elementos, y, luego, se informarán sobre este tipo de texto (definición, propósito y características). Con esta información y lo que han trabajado en las diferentes áreas, establecerán su plan de escritura e iniciarán el proceso de textualización de la primera versión de su afiche tomando en cuenta las recomendaciones planteadas en la ficha. Luego, la revisarán a partir de una lista de cotejo, y, por último, redactarán la versión final.",
//CRITERIOS DE EVALUACION
"Adecúa su afiche con soluciones creativas al propósito comunicativo, al tipo textual y a algunas características del género discursivo.",
"Organiza su afiche con soluciones creativas de forma coherente y cohesionada, respetando el tema, las características del género textual y el empleo adecuado de referentes y conectores para evitar las contradicciones, digresiones o redundancias.",
"Utiliza recursos gramaticales y ortográficos que contribuyan al sentido, la claridad y la articulación de las soluciones creativas en su afiche.",
"Evalúa si su afiche se ajusta a la situación comunicativa, la coherencia y la cohesión textual de las ideas, así como la pertinencia del formato, el tipo textual y el contexto",
"Identifica el tema, las ideas principales y el propósito seleccionando datos específicos en los textos expositivos que lee.",
"Deduce e interpreta información implícita de los textos expositivos que lee, distinguiendo lo relevante de lo complementario y sintetizando la información."
),
array(
"(Lee, opina y propone)Propuesta de acciones para la prevención de la anemia en nuestra familia o comunidad a través de un recurso informativo (pódcast).",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, elaborarán, para su familia y comunidad, el guion del pódcast sobre la promoción del consumo de alimentos ricos en hierro para evitar la anemia. Para ello, indagarán sobre este tipo de texto (definición, función, estructura, características y beneficios). Con la información recogida y lo que han trabajado en las diferentes áreas, elaborarán su plan de escritura, lo revisarán con una lista de cotejo e iniciarán el proceso de textualización de la primera versión. Tomarán en cuenta la estructura de este tipo de texto, los elementos que se integran en un guion y las recomendaciones planteadas en la ficha. Por último, lo revisarán y redactarán la versión final de su pódcast.",
//CRITERIOS DE EVALUACION
"Adecúa su pódcast al propósito comunicativo, al tipo textual (narrativo, expositivo) y al formato textual (continuo, discontinuo, mixto), y a algunas características del género discursivo (cuento, infografía, noticia).",
"Organiza su pódcast de forma coherente y cohesionada, respetando el tema, las características del tipo, formato y género textual, y empleando adecuadamente los referentes y conectores.",
"Utiliza recursos gramaticales y ortográficos que contribuyan al sentido, la claridad y la articulación de las recomendaciones en su pódcast.",
"Evalúa si su pódcast se ajusta a la situación comunicativa, la coherencia y la cohesión textual de las ideas, así como la pertinencia del formato, el tipo textual y el contexto.",
"Identifica el tema, las ideas principales y el propósito seleccionando datos específicos en los textos expositivos que lee.",
"Deduce e interpreta información implícita de los textos expositivos que lee, distinguiendo lo relevante de lo complementario"
),
array(
"(Lee, opina y propone)Compromisos, presentados en un acta, que nos permitan construir el país que anhelamos teniendo en cuenta los ejes del bicentenario",
//RESUMEN SOBRE EL PRODUCTO
"En esta actividad, elaborarán un artículo de opinión sobre sus compromisos con el bicentenario y lo compartirán con su familia y amigos. Para ello, recapitularán lo analizado y trabajado en las actividades anteriores sobre este tema. Con esta información, iniciarán el proceso de planificación de su texto considerando su plan de escritura. Luego, textualizarán la primera versión de su artículo teniendo en cuenta tres aspectos: a) la definición, las características y la estructura de este tipo de texto; b) el empleo adecuado de la progresión temática, los referentes y el punto y coma; y c) el esquema de este tipo de texto. Ello con la finalidad de redactar un primer borrador acorde al texto solicitado. Después, lo revisarán a partir de preguntas sobre su contenido y estructura. Finalmente, utilizarán sus respuestas para realizar los ajustes necesarios a fin de redactar la versión final y socializar su artículo.",
//CRITERIOS DE EVALUACION
"Adecúa su artículo de opinión sobre sus compromisos en el bicentenario a la situación comunicativa considerando el propósito comunicativo, el tipo textual y algunas características del género discursivo.",
"Organiza su artículo de opinión de forma coherente y cohesionada, respetando el tema, las características del género textual y el empleo adecuado de referentes y conectores para evitar contradicciones, digresiones o redundancias.",
"Utiliza recursos gramaticales y ortográficos que contribuyan al sentido, la claridad y la articulación de su artículo de opinión.",
"Evalúa si su artículo de opinión se ajusta a la situación comunicativa, la coherencia y la cohesión textual de las ideas, así como la pertinencia del formato, el tipo textual y el contexto.",
"Identifica el tema, las ideas principales y el propósito seleccionando datos específicos en los textos expositivos que lee",
"Deduce e interpreta información implícita de los textos expositivos que lee, distinguiendo lo relevante de lo complementario y sintetizando la información."
)
);
//------------------------------------------------------------------------------------------
$titulos = array(
    $productoDeExperienciaDeAprendizaje[0][0],
    $productoDeExperienciaDeAprendizaje[1][0],
    $productoDeExperienciaDeAprendizaje[2][0],
    $productoDeExperienciaDeAprendizaje[3][0],
    $productoDeExperienciaDeAprendizaje[4][0],
    $productoDeExperienciaDeAprendizaje[5][0],
    $productoDeExperienciaDeAprendizaje[6][0],
    $productoDeExperienciaDeAprendizaje[7][0]

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