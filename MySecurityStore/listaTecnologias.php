<?php
	
	session_start();
	
	
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
		header('location:index.php');
		
	}
	
	include 'conexao.php';	
	include 'topo.php';
	include 'menu.php';
	
	
	$consulta = $conexao->query("SELECT * FROM tecnologias");
	
	
	?>
	
<div class="container">
	
	
	<?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
	/*Não será habilitado o comando de exclusão pois os dados inseridos serão armazenados no histórico de compra,
	se levar em consideração um e-commerce profissional*/
	?>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['descritec']; ?></div>
		<div class="col-sm-4"><h4 style="padding-top:20px"><?php echo $exibe['caracteristicas']; ?></h4></div>
		
		<div class="col-sm-3" style="padding-top:20px">	
		<a href="formAlterarTec.php?idtecnologia=<?php echo $exibe['idtecnologia']; ?>">	
		<button class="btn btn-lg btn-block btn-primary">
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
	