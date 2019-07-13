<?php 

class Cliente
{
	public $id;
	public $nome;
	public $sexo;
	public $endereco;
	public $cargo;

	public function __construct($id = false)
	{
		if ($id) {
			$this->id = $id;
			$this->buscar();
		}
	}

	//Functions CRUD

	public function listar(){
		$query = 'SELECT id_cliente, nome_cliente, sexo_cliente, endereco_cliente, cargo_cliente FROM cliente ';
		$conexao = Conexao::realizarConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	public function buscar(){
		$query = "SELECT id_cliente, nome_cliente, sexo_cliente, endereco_cliente, cargo_cliente FROM cliente WHERE id_cliente = " . $this->id;
		$conexao = Conexao::realizarConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		foreach ($lista as $linha) {
			$this->id = $linha['id_cliente'];
			$this->nome = $linha['nome_cliente'];
			$this->sexo = $linha['sexo_cliente'];
			$this->endereco = $linha['endereco_cliente'];
			$this->cargo = $linha['cargo_cliente'];
		}
	}

	public function inserir(){
		$query = "INSERT INTO cliente(nome_cliente, sexo_cliente, endereco_cliente, cargo_cliente) VALUES ('" . $this->nome . "','" . $this->sexo . "','" . $this->endereco . "','" . $this->cargo . "')";
		$conexao = Conexao::realizarConexao();
		$conexao->exec($query);
	}

	public function atualizar(){
		$query = "UPDATE cliente SET nome_cliente = '" . $this->nome . "', sexo_cliente = '" . $this->sexo . "', endereco_cliente = '" . $this->endereco . "', cargo_cliente = '" . $this->cargo . "' WHERE id_cliente = " . $this->id;
		$conexao = Conexao::realizarConexao();
		$conexao->exec($query);
	}

	public function excluir(){
		$query = "DELETE FROM cliente WHERE id_cliente = " . $this->id;
		$conexao = Conexao::realizarConexao();
		$conexao->exec($query);
	}
}