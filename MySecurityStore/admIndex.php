<?php 
	session_start();

	include("topo.php");
	include("menuSecundario.php");
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Página inicial</h3>
		<div class="btn-group" role="group">
			<ul>
			<li><a href="mostraFornecedoresCadastrados.php" class="btn btn-primary">Fornecedores</a></li>
			<li><a href="mostraFabricantesCadastrados.php" class="btn btn-primary">Fabricantes</a></li>
			<li><a href="mostraGruposCadastrados.php" class="btn btn-primary">Grupos de produtos</a></li>
			<li><a href="mostraTecnologiasCadastradas.php" class="btn btn-primary">Tecnologias</a></li>
			<li><a href="mostraProdutosCadastrados.php" class="btn btn-primary">Produtos</a></li>
		</ul>
		</div>
	</div>
</div>
<?php include ("rodape.php");?>