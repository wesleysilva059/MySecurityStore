<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
?>
</script>
<div class="container">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de grupo de produtos</h2>
				
				<form method="POST" action="incluiGrupo.php" name="incluiGrupo" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input required name="txtDescrigrupo" type="text" class="form-control">
					</div>
	
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>