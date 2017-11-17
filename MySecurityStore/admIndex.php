<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Página inicial</h3>
		<div class="btn-group" role="group">
			<ul>
			<li><a href="formProduto.php" class="btn btn-primary">Cadastrar produto</a></li>
			<li><a href="listaProdutos.php" class="btn btn-primary">Editar produto</a></li>
			<li><a href="mostraFabricantesCadastrados.php" class="btn btn-primary">Fabricantes</a></li>
			<li><a href="mostraGruposCadastrados.php" class="btn btn-primary">Grupos de produtos</a></li>
			<li><a href="mostraTecnologiasCadastradas.php" class="btn btn-primary">Tecnologias</a></li>
			<li><a href="mostraProdutosCadastrados.php" class="btn btn-primary">Produtos</a></li>
		</ul>
		</div>
	</div>
</div>
<?php include ("rodape.php");?>