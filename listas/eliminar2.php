<?php

	require '../conexion.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM lista WHERE id = $id";


	$resultado = $conexion->query( $sql );

	if ($resultado)
		header('location: index.php');
	else
		echo "Error... " . $conexion->error;

?>