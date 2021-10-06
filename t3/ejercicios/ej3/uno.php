<h1>Listado de cookies por nivel</h1>
Nivel 0 --> <a href="verCookies.php">Listado de cookies</a>
<br/>
Nivel 0 --> Nivel 1 --> <a href="/uno/verCookies.php">Listado de cookies</a>
<br/>
Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="/dos/verCookies.php">Listado de cookies</a>
<br/>
<h2>Creacion de cookies en diferentes niveles (directorios) por un script ubicado en /</h2>
<h3>Se permite fijar nombre y contenido de la cookie, asi como el nivel</h3>
<form action="crearCookie.php">
<fieldset>
<legend>Creacion de cookie</legend>
<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre"/>
<label for="contenido">Contenido</label><input type="text" name="contenido" id="contenido"/>
<br/>
Nivel <select name="nivel">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
	</select>
	<input type="submit" value="Crea cookie"/>
</fieldset>
</form>