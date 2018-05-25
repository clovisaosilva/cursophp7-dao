<?php

	class Sql extends PDO {

		/*
			Variável de conexão da classe.
		*/
		private $conn;

		/*
			String de conexão com o banco de dados.
		*/
		public function __construct(){
			$this->conn = new PDO("mysql:host=localhost; dbname=dbphp7","root", "");
		}

		/*
			Seta os parametros para a criação da query completa.
		*/
		private function setParams($statment, $parameters = array()){
			/*
				Percorre o array e insere valor a valor no bidParam no statment recebido.		
			*/
			foreach ($parameters as $key => $value) {
				$statment->setParam($key,$value);

			}
		}

		/*
			$statment - recebe o $stmt principal para a preparação da query
			$key - o nome do indice do parâmetro que serpa utilizado na query (:LOGIN)
			$value - o valor a ser inserido no indice específico.
		*/
		private function setParam($statment, $key, $value){
			/*
				Liga o indice do array de parametros ao valor enviado
				Ex. (:LOGIN, $value)
			*/
			$statment->bindParam($key, $value);

		}

		/*
			Executa a query bruta do usuário.
			$rawQuery - Query brta do usuário.
			$params - Array de parâmetros e valores enviados pela query.
		*/
		public function query($rawQuery, $params = array()){

			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);
			
			$stmt->execute();

			return $stmt;
		}


		public function select($rowQuery, $params = array()):array
		{
			var_dump($params);

			$stmt = $this->query($rowQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>