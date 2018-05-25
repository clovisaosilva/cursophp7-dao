<?php

	class Sql extends PDO {

		private $conn;

		/*
			Conexão com o banco de dados.
		*/
		public function __construct(){
			$this->conn = new PDO("mysql:host=localhost; dbname=dbphp7","root", "");
		}

		private function setParams($statment, $parameters = array()){
			foreach ($parameters as $key => $value) {

				$statment->setParam($key,$value);

			}
		}

		private function setParam($statment, $key, $value){

			$statment->bindParam($key, $value);

		}

		public function query($rawQuery, $params = array()){

			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);
			
			$stmt->execute();

			return $stmt;
		}

		public function select($rowQuery, $params = array()):array
		{

			$stmt = $this->query($rowQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>