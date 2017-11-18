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
			<li><a href="formFab.php" class="btn btn-primary">Cadastrar fabricante</a></li>
            <li><a href="listaFabricantes.php" class="btn btn-primary">Editar fabricante</a></li>
            <li><a href="formForn.php" class="btn btn-primary">Cadastrar fornecedor</a></li>
            <li><a href="listaFornecedores.php" class="btn btn-primary">Editar fornecedor</a></li>
			<li><a href="formGrup.php" class="btn btn-primary">Cadastrar grupos de produtos</a></li>
			<li><a href="listaGrupos.php" class="btn btn-primary">Editar grupos de produtos</a></li>
			<li><a href="formTec.php" class="btn btn-primary">Cadastrar Tecnologias</a></li>
			<li><a href="listaTecnologias.php" class="btn btn-primary">Editar Tecnologias</a></li>
		</ul>
		</div>
	</div>
</div>
<?php include ("rodape.php");?>