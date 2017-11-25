<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Administrativo - Página inicial</h2>
			<br>
			<div class="btn-group">
				<a href="formProduto.php"><button class="btn btn-block btn-primary">Cadastrar produto</button></a><br>
				<a href="listaProdutos.php"><button class="btn btn-block btn-primary">Editar produto</button></a><br>
				<a href="formFab.php"><button class="btn btn-block btn-primary">Cadastrar fabricante</button></a><br>
	            <a href="listaFabricantes.php"><button class="btn btn-block btn-primary">Editar fabricante</button></a><br>
	            <a href="formForn.php"><button class="btn btn-block btn-primary">Cadastrar fornecedor</button></a></li><br>
	            <a href="listaFornecedores.php"><button class="btn btn-block btn-primary">Editar fornecedor</button></a><br>
				<a href="formGrup.php"><button class="btn btn-block btn-primary">Cadastrar grupos de produtos</button></a><br>
				<a href="listaGrupos.php"><button class="btn btn-block btn-primary">Editar grupos de produtos</button></a><br>
				<a href="formTec.php"><button class="btn btn-block btn-primary">Cadastrar Tecnologias</button></a><br>
				<a href="listaTecnologias.php"><button class="btn btn-block btn-primary">Editar Tecnologias</button></a><br>
			</div>
		</div>
	</div>
</div>

<?php include ("rodape.php");?>