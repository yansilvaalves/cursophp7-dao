<?php
	
	Class Usuario{

		private $id;
		private $nome_usuario;
		private $email;
		private $senha;
		private $data_nascimento;
		private $cidade;

		public function getId(){

			return $this->id;

		}

		public function setId($id){

			$this->id = $id;

		}

		public function getNome_Usuario(){

			return $this->nome_usuario;

		}

		public function setNome_Usuario($nome_usuario){

			$this->nome_usuario = $nome_usuario;

		}

		public function getEmail(){

			return $this->email;

		}

		public function setEmail($email){

			$this->email = $email;

		}

		public function getSenha(){

			return $this->senha;

		}

		public function setSenha($senha){

			$this->senha = $senha;

		}

		public function getData_Nascimento(){

			return $this->data_nascimento;

		}

		public function setData_Nascimento($data_nascimento){

			$this->data_nascimento = $data_nascimento;

		}

		public function getCidade(){

			return $this->cidade;

		}

		public function setCidade($cidade){

			$this->cidade = $cidade;

		}
		
		public function carregueId($id){

			$sql = new Sql();

			$resultado = $sql->selecionar("SELECT * FROM usuarios WHERE id = :ID", array(":ID"=>$id ));

			if(count($resultado) > 0):

				$linha = $resultado[0];

				$this->setId($linha['id']);
				$this->setNome_Usuario($linha['nome_usuario']);
				$this->setEmail($linha['email']);
				$this->setSenha($linha['senha']);
				$this->setData_Nascimento($linha['data_nascimento']);
				$this->setCidade($linha['cidade']);

			endif;

		}

		public function __toString(){

			return json_encode(array(
				"id"=>$this->getId(),
				"nome"=>$this->getNome_Usuario(),
				"email"=>$this->getEmail(),
				"senha"=>$this->getSenha(),
				"data"=>$this->getData_Nascimento(),
				"cidade"=>$this->getCidade()
			));

		}


	}
?>