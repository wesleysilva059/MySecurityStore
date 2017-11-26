<style>

.navbar{
	margin-bottom: 0;
}
	
	
</style>
	
	
<?php
	include("conexao.php");
	include("topo.php");
	include("menu.php");
?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Email já em uso na Loja!!!</h2>
				
				<a href="formCadastroUsuario.php" class="btn btn-block btn-info" role="button">Tentar Novamente</a>
				
				<a href="esqueciSenha.php" class="btn btn-block btn-primary" role="button">Esqueci a senha</a>
				
							
			</div>
		</div>
	</div>
	
	<?php include 'rodape.php' ?>
	
	
	
	
</body>
</html>