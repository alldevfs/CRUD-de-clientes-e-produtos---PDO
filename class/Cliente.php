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
			$this->carregar();
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

	//function inserir

	//function atualizar

	//function excluir
}