<?php

$idLibro = $_GET["idLibro"];
$ISBN = $_GET["ISBN"];
$Titulo = $_GET["Titulo"];
$Autor = $_GET["Autor"];
$Puntuacion = $_GET["Puntuacion"];


$conn = mysqli_connect("localhost","root","","id15910404_biblioteca");

$sql = "update libro set ISBN='$ISBN', Titulo='$Titulo', Autor='$Autor', Puntuacion='$Puntuacion' WHERE idLibro=$idLibro";

$esOk = mysqli_query($conn,$sql);
	mysqli_close($conn);
if(!$esOk){
echo "No se ha podido editar:" . mysqli_error($conn);
}else{

	header('Location: index.php' );
}
?>
