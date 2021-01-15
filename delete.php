<?php

$id = $_POST['idLibro'];

$conn = mysqli_connect("localhost","root","","id15910404_biblioteca");

$sql = "DELETE FROM libro WHERE idLibro=$id";

$esOk = mysqli_query($conn, $sql);
mysqli_close($conn);

if(!$esOk){
	echo "No se ha podido borrar: ";
} else {
	header( 'Location: index.php' ) ;
}

?>

