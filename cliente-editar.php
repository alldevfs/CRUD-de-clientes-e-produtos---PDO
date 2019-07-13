<?php require_once 'global.php' ?>
<?php
try {

	$id = isset($_GET['id_cliente']);
	$cliente = new Cliente($id);

} catch (Exception $e) {
	Erro::trataErro($e);
}
?>
<?php require_once 'header.php' ?>
<div class="row">
	<div class="col-md-12">
		<h2>Editar informações</h2>
	</div>
</div>
<form action="cliente-editar-post.php" method="post">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="nome">Nome: </label>
				<input type="text" name="nome" value="<?php echo $cliente->nome ?>" class="form-control" placeholder="Nome do cliente">
				<label for="nome">Sexo: </label>
				<input type="text" name="sexo" value="<?php echo $cliente->sexo ?>" class="form-control" placeholder="Sexo do cliente">
				<label for="nome">Endereço: </label>
				<input type="text" name="endereco" value="<?php echo $cliente->endereco ?>" class="form-control" placeholder="Endereço do cliente">
				<label for="nome">Cargo: </label>
				<input type="text" name="cargo" value="<?php echo $cliente->cargo ?>" class="form-control" placeholder="Nome da Categoria">
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Salvar">
		</div>
	</div>
</form>
<?php require_once 'footer.php' ?>
