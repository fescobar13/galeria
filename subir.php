<?php
	require 'funciones.php';
	$conexion = conexion('galeria', 'root', '');

if(!$conexion){
	die();
}	

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
	$check = @gentimagesize ($_FILES['foto']['tmp_name']);
	if ($check !== false){
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto) '); 

		$statement->execute(array(
		':titulo' => $_POST['titulo'],
		':imagen' => $_POST['imagen']['name'],
		':texto' => $_POST['texto']
		));

		print_r($statement);
		exit;

		header ('Location: index.php');
	}else{
		$error = "El archivo no es imagen o es muy pesado";

	}

}

	require 'views/subir.view.php';

  ?>