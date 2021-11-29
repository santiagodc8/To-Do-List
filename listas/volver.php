<?php 

	require '../conexion.php';

	$id = $_GET['id'];
	$sql = "UPDATE lista SET estado=1 WHERE id = $id";


	$resultado = $conexion->query( $sql );

	if ($resultado)
		header('location: index.php');
	else
		echo "Error... " . $conexion->error;

?>