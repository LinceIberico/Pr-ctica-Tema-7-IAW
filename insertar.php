<?php
$ISBN = $_GET["ISBN"];
$Titulo = $_GET["Titulo"];
$Autor = $_GET["Autor"];
$Puntuacion = $_GET["Puntuacion"];

$conn = mysqli_connect("localhost","root","","id15910404_biblioteca");
$sql = "insert into libro (ISBN, Titulo, Autor, Puntuacion) values ('$ISBN','$Titulo','$Autor','$Puntuacion')";
$esOk = mysqli_query($conn,$sql);
	mysqli_close($conn);
if(!$esOk){
echo "No se ha podido insertar:" . mysqli_error($conn);
}else{

	header('Location: index.php' );
}
?>
