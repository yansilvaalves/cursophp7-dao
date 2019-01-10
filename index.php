<?php
	
	require_once("config.php");

	/*$sql = new Sql();

	$albuns = $sql->selecionar("SELECT * FROM usuarios");

	echo json_encode($albuns);*/

	$usuario = new Usuario();

	$usuario->carregueId(2);

	echo $usuario;

?>