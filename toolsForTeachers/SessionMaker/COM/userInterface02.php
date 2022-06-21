
<HTML>
<head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

</head>
<BODY>
<h1>CREADOR DE SESIONES - COMUNICACION - VI CICLO</h1>
<HR>
<!-- CHANGE URL -->
<form action="LOGIC-COM-1RO.php" method="get">
<h2>Datos Informativos</h2>

<table style="width:100%">





<tr><td>
<label for="docente">Docente: </label>
</td>

<td>
<input type="text" id="docente" name="NAME_docente" value="Roberto Garay">
</td></tr>












<tr>
<td>
<label for="institucionEducativa">Institución Educativa : </label>
</td>
<td>
<input type="text" id="institucionEducativa" name="NAME_institucionEducativa" value="Hermilio Valdizán">
</td>
</tr>

<tr>
<td>
<label for="lugar">Lugar: </label>
</td>
<td>
<input type="text" id="lugar" name="NAME_lugar" value="Huánuco">
</td>
</tr>

<tr>
<td>
<label for="grado">Grado: </label>
</td>
<td>
<input type="radio" id="1ro" name="NAME_grado" value="1ro">
<label for="1ro">1ro Secundaria - VI Ciclo</label>
<br>
<input type="radio" id="2do" name="NAME_grado" value="2do">
<label for="2do">2do Secundaria - VI Ciclo</label>
</td>
</tr>

<tr>
<td>
<label for="area">Area: </label>
</td>
<td>
<input type="text" id="ingles" name="NAME_area" value="Comunicación"><br>
</td>
</tr>
</table>

<h2>Fechas</h2>
<label for="fechas01">Fecha 01: </label>
<input type="date" id="fecha01" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas02">Fecha 02: </label>
<input type="date" id="fecha02" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas03">Fecha 03: </label>
<input type="date" id="fecha03" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas04">Fecha 04: </label>
<input type="date" id="fecha04" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas05">Fecha 05: </label>
<input type="date" id="fecha05" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas06">Fecha 06: </label>
<input type="date" id="fecha06" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas07">Fecha 07: </label>
<input type="date" id="fecha06" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">
<br>
<label for="fechas06">Fecha 08: </label>
<input type="date" id="fecha06" name="NAME_fecha[]" value="2022-06-14" min="2022-01-01" max="2022-12-31">



<!-- -->
<!-- 
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
-->
<h2>Experiencia de Aprendizaje</h2>
<input type="radio" id="eda01" name="NAME_experienciaDeAprendizaje" value="eda01">
<label for="eda01">1 Título: Promovemos la participación democrática y la convivencia en la diversidad</label>
<br>
<input type="radio" id="eda02" name="NAME_experienciaDeAprendizaje" value="eda02">
<label for="eda02">2 Título: Promovemos el emprendimiento a través del uso responsable de los recursos</label>
<br>
<input type="radio" id="eda03" name="NAME_experienciaDeAprendizaje" value="eda03">
<label for="eda03">3 Título: Promovemos el cuidado de nuestra salud respiratoria en armonía con el ambiente</label>
<br>
<input type="radio" id="eda04" name="NAME_experienciaDeAprendizaje" value="eda04">
<label for="eda04">4 Título: Reflexionamos y valoramos los avances y desafíos del Perú en el bicentenario para construir el país que anhelamos</label>
<br>
<input type="radio" id="eda05" name="NAME_experienciaDeAprendizaje" value="eda05">
<label for="eda05">5 Título: Fomentamos acciones para ejercer nuestro derecho al acceso y uso del agua</label>
<br>
<input type="radio" id="eda06" name="NAME_experienciaDeAprendizaje" value="eda06">
<label for="eda06">6 Título: Fortalecemos nuestro sistema inmunológico en armonía con el ambiente</label>
<br>
<input type="radio" id="eda07" name="NAME_experienciaDeAprendizaje" value="eda07">
<label for="eda07">7 Título: Reconocemos la creatividad de las familias peruanas</label>
<br>
<input type="radio" id="eda08" name="NAME_experienciaDeAprendizaje" value="eda08">
<label for="eda08">8 Título: Promovemos la salud como un bien de todos</label>
<br>
<input type="radio" id="eda09" name="NAME_experienciaDeAprendizaje" value="eda09">
<label for="eda09">9 Título: Asumimos compromisos ante los desafíos del bicentenario</label>
<br>
<BR>
<BR>
<input type="submit"  value="CREAR SESIONES">
<input type="reset" value="BORRAR">
</form>

</BODY>
</HTML>