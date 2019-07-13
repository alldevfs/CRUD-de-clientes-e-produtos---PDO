<?php require_once 'header.php' ?>

<div class="row">
	<div class="col-md-12">
		<h2>Inserindo clinte</h2>
	</div>
</div>

<form action="cliente-inserir-post.php" method="post">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="nome">Nome: </label>
				<input type="text" name="nome" class="form-control" placeholder="Nome do cliente" required>
			</div>
			<div class="form-group">
				<label for="sexo">Sexo: </label>
				<input type="text" name="sexo" class="form-control" placeholder="Sexo do cliente" required>
			</div>
			<div class="form-group">
				<label for="endereco">Endereço: </label>
				<input type="text" name="endereco" class="form-control" placeholder="Endereço do cliente" required>
			</div>
			<div class="form-group">
				<label for="cargo">Cargo: </label>
				<input type="text" name="cargo" class="form-control" placeholder="Cargo do cliente" required>
			</div>
			<input type="submit" class="btn btn-sucess btn-block" value="Salvar">
		</div>
	</div>
</form>
<?php require_once 'footer.php' ?>