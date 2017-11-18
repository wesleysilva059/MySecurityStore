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
			<a href="formProduto.php" class="btn btn-primary">Cadastrar produto</a>
			<a href="listaProdutos.php" class="btn btn-primary">Editar produto</a>
			<a href="formFab.php" class="btn btn-primary">Cadastrar fabricante</a>
            <a href="listaFabricantes.php" class="btn btn-primary">Editar fabricante</a>
            <a href="formForn.php" class="btn btn-primary">Cadastrar fornecedor</a></li>
            <a href="listaFornecedores.php" class="btn btn-primary">Editar fornecedor</a>
			<a href="formGrup.php" class="btn btn-primary">Cadastrar grupos de produtos</a>
			<a href="listaGrupos.php" class="btn btn-primary">Editar grupos de produtos</a>
			<a href="formTec.php" class="btn btn-primary">Cadastrar Tecnologias</a>
			<a href="listaTecnologias.php" class="btn btn-primary">Editar Tecnologias</a>
		</ul>
		</div>
	</div>
</div>
<?php include ("rodape.php");?>