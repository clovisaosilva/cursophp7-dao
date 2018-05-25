<?php
	require_once("config.php");

	/*
	Exemplo 1

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	*/

	$root = new Usuario();

	$root->loadByID(3);

	echo $root;

?>