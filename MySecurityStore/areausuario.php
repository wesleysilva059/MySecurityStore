<?php 
	  session_start();
	  include ("topo.php"); 
	  include ("menu");
	  include 'conexao.php';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Minha área</h2>
			<br>
			<div class="btn-group">
				<a href="pedidos.php"><button type="submit" class="btn btn-block btn-primary">Meus pedidos</button></a><br>
				<a href="formAlteraCliente.php"><button type="submit" class="btn btn-block btn-primary">Editar minhas informações</button></a><br>
			</div>
		</div>
	</div>
</div>
<?php include 'rodape.php'; ?>