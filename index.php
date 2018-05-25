<?php
	require_once("config.php");

	/*
	Exemplo 1

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	*/

	/*
		Exemplo 2 - Carrega 1 usuário
		$root = new Usuario();
		$root->loadByID(3);
		echo $root;
	*/

	/*
		Exemplo 3
		Carrega uma lista de usuários.
		$lista = Usuario::getList();

		echo json_encode($lista);
	*/
	
	/*
		Carrega uma lista de usuários buscando pelo login
		$search = Usuario::search("jo");
		echo json_encode($search);
	*/

	/*
		Carrega um usuário usando o login e senha
	*/
	$usuario = new Usuario();
	$usuario->login("root","!@#$%");
	echo $usuario;

?>