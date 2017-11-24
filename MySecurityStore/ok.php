<?php 
	session_start();
	include("conexao.php");
	include("topo.php");
	include("menu.php");
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Cadastro realizado com sucesso!</h2>
				
				<a href="login.php" class="btn btn-block btn-default" role="button">Voltar ao menu principal</a>
				<a href="paginaProdutos.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Ver todos os produtos
					
				</button></a>
							
			</div>
		</div>
</div>
<?php
	include("rodape.php");
?>