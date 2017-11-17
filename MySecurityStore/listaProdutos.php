<?php
	
	session_start();
	
	
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
		header('location:index.php');
		
	}
	
	include 'conexao_teste.php';	
	include 'topo.php';
	include 'menu.php';
	
	
	$consulta = $conexao->query("SELECT * FROM produtos");
	
	
	?>
	
<div class="container-fluid">
	
	
	<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
	
	?>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="Imagens/<?php echo $exibe['foto']; ?>" class="img-responsive"></div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['descricao']; ?></h4></div>
		<div class="col-sm-2" style="padding-top:20px">
		
			
		<a href="formAlterarProd.php?Codigo=<?php echo $exibe['Codigo']; ?>">	
		<button class="btn btn-lg btn-block btn-default">
		<span class="glyphicon glyphicon-pencil"></span> Alterar
		</button>
		</a>
		</div>
		
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
		<a href="excluir.php?Codigo=<?php echo $exibe['Codigo']; ?>">	
		<button class="btn btn-lg btn-block btn-danger">
		<span class="glyphicon glyphicon-remove"></span> Excluir		
		</button>
		</a>
		
		
		</div> 
				
	</div>		
	
	
	<?php } ?>
	

	
</div>
	
	<?php
	
	include 'rodape.php';
	
	?>
	