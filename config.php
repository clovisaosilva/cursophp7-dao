<?php
	
	/*
		Arquivo de configuração da aplicação
	*/

	/*
		Função responsável por incluir as classes que estão sendo utilizadas na aplicação.
		DIRECTORY_SEPARATOR - Serve para definir o separador de diretório corrente do sistema operacional que está rodando o PHP.
		se for Windows "/", se for linux "\"
	*/
	spl_autoload_register(function($calss_name){
		$filename = "class".DIRECTORY_SEPARATOR.$calss_name.".php";

		if(file_exists($filename)){
			require_once($filename);
		}
	});

?>