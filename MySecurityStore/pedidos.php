<?php 
	session_start();
	if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
	$usuario = $_SESSION['id'];
	$consultaVenda = $conexao->query("SELECT * from vendas WHERE idlogin = '$usuario'"); 
?>
<div class="container-fluid">
	<h2 class="text-center">Meus pedidos</h2>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><h5>Data</h5></div>
		<div class="col-sm-2"><h5>Nota fiscal</h5></div>
		<div class="col-sm-4"><h5>Produto</h5></div>
		<div class="col-sm-1"><h5>Quantidade</h5></div>
		<div class="col-sm-1"><h5>Preço</h5></div>
		<div class="col-sm-2"><h5>Status</h5></div>		
	</div>	
	<?php while ($exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){
	?>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><?php echo date('d/m/Y',strtotime($exibevenda['dtvenda']));?></div>
		<div class="col-sm-2"><?php echo $exibevenda['notafiscal'];?></div>
		<div class="col-sm-4"><?php echo $exibevenda['nomeproduto'];?></div>
		<div class="col-sm-1"><?php echo $exibevenda['totalitens'];?></div>
		<div class="col-sm-1"><?php echo number_format($exibevenda['valortotal'], 2,',','.');?></div>
		<?php $status = $exibevenda['situacao'];
			  if($status = 1){
		?>
		<div class="col-sm-2">Não entregue</div>
		<?php }else{ ?>
		<div class="col-sm-2">Entregue</div>	
		<?php } ?>
	</div>	
	<?php } ?>
</div>

<?php include ("rodape.php");?>