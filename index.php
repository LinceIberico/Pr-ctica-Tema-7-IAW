<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
	<h1>Gestor de libros</h1>
	<h2>Una app de Varchar2</h2>
</header>
<div class="contenedor_tabla">
<?php

$conn = mysqli_connect("localhost","root","","biblioteca");

$result = mysqli_query($conn, "SELECT idLibro, ISBN, Titulo, Autor, Puntuacion FROM libro");

echo "<table class='tabla' border='2'>";
	echo "<tr>";
		echo "<th>ISBN</th>";
		echo "<th>Titulo</th>";
		echo "<th>Autor</th>";
		echo "<th>Puntuacion</th>";
		echo "<th>Opciones</th>";
	echo "</tr>";
while ($fila = mysqli_fetch_array($result)) {
	echo "<tr>";
		echo "<td>".$fila["ISBN"]."</td>";
		echo "<td>".$fila["Titulo"]."</td>";
		echo "<td>".$fila["Autor"]."</td>";
		echo "<td>".$fila["Puntuacion"]."</td>";
		echo "<td>";
			echo "<form action='delete.php' method='post'>";
			echo "<input type='hidden' name='idLibro' value='".$fila["idLibro"]."' />";
			echo "<input type='submit' value='BORRAR' />";
			echo "</form>";
			
			echo "<form action='form-update.php' method='post'>";
			echo "<input type='hidden' name='idLibro' value='".$fila["idLibro"]."' />";
			echo "<input type='submit' value='MODIFICAR' />";
			echo "</form>";
		echo "</td>";
	echo "</tr>";
}
echo "</table>";


mysqli_close($conn);

?>
<br/>
<button class="boton" onclick="location.href='formulario.html'">AÑADIR</button>
</div>

<footer>
	<h3>Realizado por: Adrián Sánchez, Daniel Ruíz y Juan José Moreno</h3>
</footer>
</body>
</html>