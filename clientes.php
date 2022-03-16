
<?php 

class Clientes
{	
	//variável global
	private $nome, $renda_familiar, $cod_clientes, $idade;

	
	public function getCod_clientes(){
		return $this->cod_clientes;
	}

	public function setCod_clientes($cod_clientes){
		$this->cod_clientes= $cod_clientes;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getIdade(){
		return $this->idade;
	}

    public function setIdade($idade){
	    $this->idade= $idade;
    }

	public function getRenda_familiar(){
		return $this->renda_familiar;
	}

	public function setRenda_familiar($renda_familiar){
		$this->renda_familiar= $renda_familiar;
	}

	public function __toString()
   {
     return $this->cod_clientes . ' '. $this->nome . ' ' . $this->idade . ' ' . $this->renda_familiar;
   }

}