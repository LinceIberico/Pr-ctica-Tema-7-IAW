<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body background="php.jpg">
<?php

$conn = mysqli_connect("localhost","root","","biblioteca");

$result = mysqli_query($conn, "SELECT idLibro, ISBN, Titulo, Autor, Puntuacion FROM libro");

echo "<table border='5'>";
	echo "<tr bgcolor='#0EF10E'>";
		echo "<th>ISBN</th>";
		echo "<th>Titulo</th>";
		echo "<th>Autor</th>";
		echo "<th>Puntuacion</th>";
		echo "<th>Opciones</th>";
	echo "</tr>";
while ($fila = mysqli_fetch_array($result)) {
	echo "<tr bgcolor='#99D599'>";
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
<button onclick="location.href='formulario.html'">AÑADIR</button>

</body>
</html>