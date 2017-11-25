<?php 
	session_start();
	if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
	$usuario = $_SESSION['id'];
	$consultaVenda = $conexao->query("SELECT * from vendas WHERE idlogin = '$usuario' GROUP BY notafiscal"); 
?>
<div class="container">
	<h1 class="text-center">Meus pedidos</h1>
	<br><br>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-2 col-sm-offset-3"><h3 class="text-center">Data</h3></div>
		<div class="col-sm-2"><h3 class="text-center">Nota fiscal</h3></div>
		<div class="col-sm-2"><h3 class="text-center">Detalhes</h3></div>
	</div>	
	<?php while ($exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){
	?>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-2 col-sm-offset-3"><h4 class="text-center"><?php echo date('d/m/Y',strtotime($exibevenda['dtvenda']));?></h4></div>
		<div class="col-sm-2"><h4 class="text-center"><?php echo $exibevenda['notafiscal'];?></h4></div>
		<div class="col-sm-2"><a href="notafiscal.php?notafiscal=<?php echo $exibevenda['notafiscal'];?>"><button type="submit" class="btn btn-primary"> Veja mais detalhes <span class="glyphicon glyphicon-plus"></span></button></a></div>
		
	</div>
	<?php } ?>
	<br><br>
	<a href="pedidos.php"><div class="col-sm-5 col-sm-offset-5"><button class="btn btn-primary text-center"><span class="fa fa-arrow-left" aria-hidden="true"></span> Voltar</button></div></a>
	<br><br><br>
</div>
</div

<?php include ("rodape.php");?>