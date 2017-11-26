<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
	include'resize-class.php';//classe que redimensionará a imagem

$Codigo = $_POST['Codigo'];
$consulta = $conexao->query("SELECT * FROM produtos,prodprecos,prodestoque,prodtecnologia WHERE prodprecos.idcodigo = produtos.Codigo AND prodestoque.idcodigo = produtos.Codigo AND prodtecnologia.codtecnologia = produtos.Codigo AND produtos.Codigo='$Codigo'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_codbarras = $_POST['txtCodBarras'];
$recebe_marca = $_POST['txtMarca'];
$recebe_modelo = $_POST['txtModelo'];
$recebe_grupo = $_POST['txtGrupo'];
$recebe_descricao = $_POST['txtDescricao'];
$recebe_garantia = $_POST['txtGarantia'];
$recebe_observacao = $_POST['txtObservacoes'];
$recebe_idfabricante = $_POST['txtIdFabricante'];
$recebe_pesoliquido = $_POST['txtPesoLiquido'];
$recebe_pesoembalagem = $_POST['txtPesoEmbalagem'];
$recebe_pcusto = $_POST['txtPCusto'];
$recebe_pmedio = $_POST['txtPMedio'];
$recebe_pvenda = $_POST['txtPVenda'];
$recebe_estoque = $_POST['txtEstoque'];
$recebe_estmin = $_POST['txtEstMin'];
$recebe_estideal = $_POST['txtEstIdeal'];
$recebe_codtecnologia = $_POST['txtCodTecnologia'];

$remover1='.';
$recebe_pcusto = str_replace($remover1, '', $recebe_pcusto);
$recebe_pmedio = str_replace($remover1, '', $recebe_pmedio);
$recebe_pvenda = str_replace($remover1, '', $recebe_pvenda);
$remover2=',';
$recebe_pcusto = str_replace($remover2, '.', $recebe_pcusto);
$recebe_pmedio = str_replace($remover2, '.', $recebe_pmedio);
$recebe_pvenda = str_replace($remover2, '.', $recebe_pvenda);

$recebe_foto1 = $_FILES['foto'];
$recebe_foto2 = $_FILES['foto2'];
$recebe_foto3 = $_FILES['foto3'];


$destino = "Imagens/";

if (!empty($recebe_foto1['name'])) {

	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extensao1);
	$img_nome1 = md5(uniqid(time())).".".$extensao1[1];

	$upload_foto1=1;

}

else {
	$img_nome1=$exibe['foto'];
	$upload_foto1=0;
	
}

if (!empty($recebe_foto2['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extensao2);
	$img_nome2 = md5(uniqid(time())).".".$extensao2[1];
	$upload_foto2=1;

}

else {
	
	$img_nome2=$exibe['foto2'];
	$upload_foto2=0;
	
}

if (!empty($recebe_foto3['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extensao3);
	$img_nome3 = md5(uniqid(time())).".".$extensao3[1];
	$upload_foto3=1;

}

else {
	
	$img_nome3=$exibe['foto3'];
	$upload_foto3=0;
	
}
	

try {
	
	$alterar = $conexao->query("UPDATE produtos SET
	
	codbarras = '$recebe_codbarras',
	marca = '$recebe_marca',
	modelo = '$recebe_modelo',
	grupo = '$recebe_grupo',
	descricao = '$recebe_descricao', 
	garantia = '$recebe_garantia',
	obs = '$recebe_observacao',
	idfabricante = '$recebe_idfabricante',
	pesoliquido = '$recebe_pesoliquido',
	pesoembalagem = '$recebe_pesoembalagem',
	foto = '$img_nome1',
	foto2 = '$img_nome2',
	foto3 = '$img_nome3'
	
	WHERE Codigo = '$Codigo';
 
	UPDATE prodprecos SET 

	pcusto = '$recebe_pcusto',
	pmedio = '$recebe_pmedio',
	pvenda = '$recebe_pvenda'

	WHERE idproduto = '$Codigo';

	UPDATE prodestoque SET

	estoque = '$recebe_estoque',
	estmin = '$recebe_estmin',
	estideal = '$recebe_estideal'

	WHERE idproduto = '$Codigo';

	UPDATE prodtecnologia SET

	codtecnologia = $recebe_codtecnologia
	WHERE codproduto = '$Codigo'; 

	");
	
	
	if ($upload_foto1==1) {
		
		
		move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
		$resizeObj = new resize($destino.$img_nome1);
		$resizeObj -> resizeImage(450, 450, 'crop');
		$resizeObj -> saveImage($destino.$img_nome1, 100);
		
	}

	
	
	if ($upload_foto2==1) {
		
		move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome2);             
		$resizeObj = new resize($destino.$img_nome2);
		$resizeObj -> resizeImage(450, 450, 'crop');
		$resizeObj -> saveImage($destino.$img_nome2, 100);
	
		
	}
	
	if ($upload_foto3==1) {
		
		move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome3);             
		$resizeObj = new resize($destino.$img_nome3);
		$resizeObj -> resizeImage(450, 450, 'crop');
		$resizeObj -> saveImage($destino.$img_nome3, 100);
	
		
	}
?>
<div class="container">
	<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Alteração feita com sucesso!</h2>
				
				<a href="listaProdutos.php" class="btn btn-block btn-default" role="button">Voltar a lista de produtos</a>
				<a href="admIndex.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Voltar ao menu administrativo
					
				</button></a>
							
			</div>
		</div>
</div>
<?php
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>