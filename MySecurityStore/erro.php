<?php
	include("conexao.php");
	include("topo.php");
	include("menu.php");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Usuário ou senha incorreto!!</h2>
			<a href="login.php" class="btn btn-block btn-default" role="button">Tentar Novamente</a>
			<a href="formCadastroUsuario.php">
			<button type="button" class="btn btn-lg btn-link">Ainda não sou cadastrado</button></a>
		</div>
	</div>
</div>
	
<?php include("rodape.php"); ?>
	