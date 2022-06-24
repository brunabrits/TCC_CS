
<?php 

class Clientes
{	
	private $id_cliente, $nome, $email, $senha;

	
	public function getId_cliente(){
		return $this->id_cliente;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getEmail(){
		return $this->email;
	}

    public function setEmail($email){
	    $this->email= $email;
    }

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha= $senha;
	}
}