<h1>Crear Empleado</h1>

<fieldset>
<legend>Introduce los datos del empleado</legend>
<form action="cEmpleadoPost" method="post">
<label for="idE">Numero de empleado</label><input type="number" id="idE" name="idE"/><br/>
<label for="nombre">Nombre</label><input type="text" id="nombre" name="nom"/><br/>
<label for="apellido">Apellido</label><input type="text" id="apellido" name="ap"/><br/>
<label for="telefono">Número de telefono</label><input type="number" id="telefono" name="tlf"/><br/>
<label for="sexo">Sexo</label>
<select name="sexo" id="sexo">
	<option value="hombre">Hombre</option>
	<option value="mujer">Mujer</option>
</select><br/>
<input type="submit" value="Crear"/>
</form>


</fieldset>
