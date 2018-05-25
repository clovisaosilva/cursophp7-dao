<?php

	spl_autoload_register(function($calss_name){
		$filename = $calss_name.".php";

		if(file_exists($filename)){
			require_once($filename);
		}
	});

?>