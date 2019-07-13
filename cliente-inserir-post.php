<?php 

require_once 'global.php';

try {

	$cliente = new Cliente();

	$cliente->nome = $_POST['nome'];
	$cliente->sexo = $_POST['sexo'];
	$cliente->endereco = $_POST['endereco'];
	$cliente->cargo = $_POST['cargo'];

	$cliente->inserir();

	header('Location: cliente-painel.php ');
} catch (Exception $e) {
	Erro::tratarErro($e);
}