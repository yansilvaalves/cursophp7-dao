<?php
	
	class Sql extends PDO{

		private $conexao;

		public function __construct(){

			$this->conexao = new PDO("mysql:host=localhost;dbname=controle_produtos", "root", "");

		}

		private function setParametros($statement, $parametros = array()){

			foreach($parametros as $chave => $valor):

				$this->setParametro($chave, $valor);

			endforeach;

		}

		private function setParametro($statement, $chave, $valor){

			$statement->bindParam($chave, $valor);

		}

		public function comandoSql($comandoBruto, $parametros = array()){

			$stmt = $this->conexao->prepare($comandoBruto);

			$this->setParametros($stmt, $parametros);

			$stmt->execute();

			return $stmt;

		}

		public function selecionar($comandoBruto, $parametros = array()):array{

			$stmt = $this->comandoSql($comandoBruto, $parametros);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		}

	}

?>