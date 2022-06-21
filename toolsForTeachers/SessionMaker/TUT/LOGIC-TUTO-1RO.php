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
"Reflexionamos sobre nuestra convivencia y la diversidad cultural",
"Proponemos alternativas creativas ante la crisis gnerada por la covid 19, que contribuyen al desarrollo de nuestro bienestar personal y familiar",
"Promovemos el cuidado de nuestra salud física y emocional en armonía con el entorno.",
"Reflexionamos sobre nuestra historia e identidad cultural para construir nuestro proyecto de vida y contribuir a un país mejor",
"Mujeres y hombres tenemos los mismos derechos y juntas y juntos prevenimos todo tipo de violencia",
"Promovemos una vida saludable y libre de drogas",
"Desarrollamos habilidades para el uso seguro en los entornos virtuales",
"Vivimos nuestra sexualidad de manera saludable y responsable para nuestro bienestar personal y social",
"Asumimos desafíos para la construcción del país en el bicentenario"
);
//---------------------------------------------------------------------------------------

$propositoDeExperienciaDeAprendizaje = array
(
"AL finalizar el estudiante debe plantear compromisos para promover la convivencia y el bienestar",
"AL finalizar el estudiante debe reflexionar sobre nuestros recursos internos, así como sobre las oportunidades que existen en el entorno",
"AL finalizar el estudiante debe fortalecer nuestras habilidades socioemocionales, y generar acciones de autocuidado para nuestro bienestar y el de los demás",
"AL finalizar el estudiante debe reconocer que somos parte de una historia familiar y comunitaria y valoraremos lo positivo de ella",
"AL finalizar el estudiante debe fortalecer los factores protectores frente a la violencia, identificando situaciones que ponen en riesgo nuestra integridad y la de los demás",
"AL finalizar el estudiante debe identificar situaciones de riesgo vinculadas al consumo de alcohol y drogas",
"AL finalizar el estudiante debe identificar factores de riesgo asociadas a la tecnología y proponer acciones para su uso adecuado",
"AL finalizar el estudiante debe reflexionar sobre la salud integral y su vínculo con la sexualidad, reconoceremos los cambios que ocurren en nuestro cuerpo",
"AL finalizar el estudiante debe identificar aquellos asuntos públicos que están afectando tu desarrollo integral y que necesitan soluciones viables"
);
//---------------------------------------------------------------------------------------
// INSTRUMENTOS DE EVALUACION
$instrumentoDeEvaluacion = array(
  "Lista de cotejo", // lista de cotejo para evaluar durante las actividades
  "Rubrica" // rubrica es para evaluar la experiencia
);


//---------------------------------------------------------------------------------------

$ExplicacionYactividadesDeAprendizaje = array
(
array(
  //explicacion
    "En esta plantearemos compromisos para promover la convivencia y el bienestar, a través del desarrollo de estas tres actividades:",
  //actividades
    "Actividad 1: Nos reconocemos y compartimos nuestras expectativas para el inicio del año escolar.",
    "Actividad 2: Compartimos en familia cómo nos sentimos en el contexto actual y fortalecemos nuestros vínculos.",
    "Actividad 3: Compartimos en familia cómo nos sentimos en el contexto actual y fortalecemos nuestros vínculos."
),
array(
  "En esta actividad estamos invitadas e invitados a reflexionar sobre nuestros recursos internos, así como sobre las oportunidades que existen en el entorno y a partir de ello proponer alternativas creativas que nos ayuden a promover nuestro bienestar personal, familiar y comunitario. En esta interesante experiencia, desarrollaremos estas tres actividades",
  "Actividad 1: Identificamos nuestras habilidades para afrontar el contexto actual y fortalecemos nuestra autonomía",
  "Actividad 2: Proponemos alternativas creativas para convertir las dificultades en oportunidades",
  "Actividad 3: Somos perseverantes en el desarrollo de acciones que contribuyen con el bienestar de nuestra familia y comunidad"
),
array(
  "En esta experiencia buscaremos fortalecer nuestras habilidades socioemocionales, y generar acciones de autocuidado para nuestro bienestar y el de los demás, para desarrollarnos en un entorno de convivencia saludable y de buen vivir. En esta interesante experiencia, desarrollaremos estas cuatro actividades:",
  "Actividad 1: Identifico y acepto mis emociones y sus formas de expresión",
  "Actividad 2: Valoro y aprendo estrategias y/o técnicas para el manejo de mis emociones",
  "Actividad 3: Practico acciones para el cuidado de mi salud mental y la de los demás"
),
array(
  "En esta experiencia reconoceremos que somos parte de una historia familiar y comunitaria y valoraremos lo positivo de ella para construir nuestra identidad. Asimismo, nos propondremos metas y asumiremos roles y responsabilidades para mejorar nuestro entorno familiar y nuestra comunidad; así contribuiremos a un país mejor. Por ello, desarrollaremos cinco actividades:",
  "Actividad 1: Valoramos nuestra historia familiar para construir nuestra identidad",
  "Actividad 2: Soy parte de una comunidad",
  "Actividad 3: Quién soy y cómo quiero ser"),
array(
  "En esta experiencia fortaleceremos los factores protectores frente a la violencia, identificando situaciones que ponen en riesgo nuestra integridad y la de los demás. Además, reflexionaremos sobre la igualdad entre mujeres y hombres, para establecer relaciones afectivas saludables y asumir compromisos por la igualdad y el respeto. Para ello, desarrollaremos tres actividades:",
  "Actividad 1: Mujeres y hombres tenemos los mismos derechos",
  "Actividad 2: Identificamos situaciones de violencia en nuestro entorno",
  "Actividad 3: Mi escudo protector frente a la violencia"),
array(
  "En esta experiencia identificaremos situaciones de riesgo vinculadas al consumo de alcohol y drogas, y el valor e importancia de la toma de decisiones responsables para promover nuestro bienestar personal. Para ello, desarrollaremos tres actividades",
  "Actividad 1: Aprendemos a reconocer situaciones de riesgo para prevenir el consumo de drogas",
  "Actividad 2:Aprendemos a manejar la presión de grupo frente al consumo de drogas",
  "Actividad 3:Promovemos hábitos saludables para prevenir el consumo de drogas"),
array(
  "En esta experiencia, identificaremos factores de riesgo asociadas a la tecnología y propondremos acciones para su uso adecuado y seguro fortaleciendo nuestras habilidades de toma de decisiones responsables y de pensamiento crítico. Para ello, desarrollaremos tres actividades:",
  "Actividad 1:Reconocemos la importancia de la tecnología en nuestras vidas",
  "Actividad 2:Identificamos situaciones de riesgo en el uso de las tecnologías",
  "Actividad 3:Promovemos el uso seguro de las TIC"),
array(
  "En esta experiencia de aprendizaje reflexionaremos sobre la salud integral y su vínculo con la sexualidad, reconoceremos los cambios que ocurren en nuestro cuerpo y los factores de riesgo a los que nos enfrentamos, también identificaremos algunas acciones para vivir una sexualidad de manera saludable y responsable. Todo ello lo desarrollaremos a través de cuatro actividades",
  "Actividad 1:Reconocemos que estamos cambiando: nos aceptamos y nos cuidamos.",
  "Actividad 2:Conocemos más sobre nuestra sexualidad.",
  "Actividad 3:Identificamos situaciones de riesgo vinculados a la sexualidad."),
array(
  "En esta experiencia identificaremos aquellos asuntos públicos que están afectando tu desarrollo integral y que necesitan soluciones viables. Buscaremos alternativas de solución e iniciaremos acciones para contribuir con los cambios que nuestro país necesita. Las actividades que desarrollaremos son las siguientes:",
  "Actividad 1: Identificamos los asuntos públicos que afectan nuestro desarrollo integral",
  "Actividad 2:Reconocemos nuestros derechos y responsabilidades frente a los asuntos públicos que nosafectan",
  "Actividad 3:Fortalecemos nuestra ciudadanía con la construcción de vías y caminos seguros"),
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
"Reflexionamos sobre nuestra convivencia y la diversidad cultural",
"Proponemos alternativas creativas ante la crisis gnerada por la covid 19, que contribuyen al desarrollo de nuestro bienestar personal y familiar",
"Promovemos el cuidado de nuestra salud física y emocional en armonía con el entorno.",
"Reflexionamos sobre nuestra historia e identidad cultural para construir nuestro proyecto de vida y contribuir a un país mejor",
"Mujeres y hombres tenemos los mismos derechos y juntas y juntos prevenimos todo tipo de violencia",
"Promovemos una vida saludable y libre de drogas",
"Desarrollamos habilidades para el uso seguro en los entornos virtuales",
"Vivimos nuestra sexualidad de manera saludable y responsable para nuestro bienestar personal y social",
"Asumimos desafíos para la construcción del país en el bicentenario"
);


//------------------------------------------------------------------------------------------


//create variable to storage the repetitive data
$datosInformativos = array
("INSTITUCIÓN EDUCATIVA: HV",
"LUGAR: HUÁNUCO",
"DOCENTE: ROBERTO GARAY MEDRANO",
"GRADO: 1RO - VI CICLO",
"NIVEL: SECUNDARIA",
"AREA: TUTORIA",
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
array(8,$datosInformativos,$titulos[7]),
array(8,$datosInformativos,$titulos[8])
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
table {  
width:100%
}

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
echo "INFO: ". $ExplicacionYactividadesDeAprendizaje[$numeroDeSesionDeAprendizaje][0];

echo "</BR>";
echo "</BR>";

echo"<table><tr>";
echo"<th>ACTIVIDAD</th>";
echo"<th>ESCOJER</th>";
echo"</tr><tr>";
echo"<td>" .$ExplicacionYactividadesDeAprendizaje[$numeroDeSesionDeAprendizaje][1]. "</td>";
echo"<td>     </td>";
echo"</tr><tr>";
echo"<td>" .$ExplicacionYactividadesDeAprendizaje[$numeroDeSesionDeAprendizaje][2]. "</td>";
echo"<td>     </td>";
echo"</tr><tr>";
echo"<td>" .$ExplicacionYactividadesDeAprendizaje[$numeroDeSesionDeAprendizaje][3]. "</td>";
echo"<td>     </td>";
echo"</tr></table>";
echo "</BR>";




echo "INSTRUMENTOS: ";
echo $instrumentoDeEvaluacion[0];//INSTRUMENTO;
echo "</BR>";
echo "PROPÓSITO DE APRENDIZAJE DE LA SESIÓN: ";


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