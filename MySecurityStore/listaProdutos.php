<?php
	
	session_start();
	
	
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
		header('location:index.php');
		
	}
	
	include 'conexao.php';	
	include 'topo.php';
	include 'menu.php';
	
	
	$consulta = $conexao->query("SELECT * FROM produtos");
	
	
	?>
	
<div class="container-fluid">
	
	
	<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
	/*Não será habilitado o comando de exclusão pois os dados inseridos serão armazenados no histórico de compra,
	se levar em consideração um e-commerce profissional*/
	?>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="Imagens/<?php echo $exibe['foto']; ?>" class="img-responsive"></div>
		<div class="col-sm-6"><h4 style="padding-top:20px"><?php echo $exibe['descricao']; ?></h4></div>
		
		<div class="col-sm-3" style="padding-top:20px">	
		<a href="formAlterarProd.php?Codigo=<?php echo $exibe['Codigo']; ?>&idcodigo=<?php echo $exibe['Codigo']; ?>">	
		<button class="btn btn-block btn-primary">
		<span class="glyphicon glyphicon-pencil"></span> Alterar
		</button>
		</a>
		</div>
		
		
		</div> 
				
	</div>		
	
	
	<?php } ?>
	

	
</div>
	
	<?php
	
	include 'rodape.php';
	
	?>
	