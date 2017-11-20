<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
	include'resize-class.php';//classe que redimensionará a imagem
?>
<?php

include 'conexao.php';
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
$dtAtual = date('d/m/Y');

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


preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto1['name'],$extensao1);
$img_nome1 = md5(uniqid(time())).".".$extensao1[1];

preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto2['name'],$extensao2);
$img_nome2 = md5(uniqid(time())).".".$extensao2[1];

preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto2['name'],$extensao3);
$img_nome3 = md5(uniqid(time())).".".$extensao3[1];


try {
	
	$inserir=$conexao->query("
		INSERT INTO produtos(codbarras, marca, modelo, grupo, descricao, garantia, obs, idfabricante, pesoliquido, pesoembalagem, foto, foto2,foto3) VALUES ('$recebe_codbarras', '$recebe_marca', '$recebe_modelo', '$recebe_grupo', '$recebe_descricao', '$recebe_garantia', '$recebe_observacao','$recebe_idfabricante','$recebe_pesoliquido','$recebe_pesoembalagem', '$img_nome1', '$img_nome2', '$img_nome3');
		SELECT last_insert_id() into @Codigo;
		INSERT INTO prodprecos(pcusto,pmedio,pvenda,idproduto,data)VALUES('$recebe_pcusto','$recebe_pmedio','$recebe_pvenda',@Codigo,'$dtAtual');
		INSERT INTO prodestoque(estoque,estmin,estideal,idproduto)VALUES('$recebe_estoque','$recebe_estmin','$recebe_estideal',@Codigo);
		INSERT INTO `prodtecnologia`(`codproduto`, `codtecnologia`) VALUES (@Codigo,'$recebe_codtecnologia');

		");

		move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);//propriedade para fazer upload             
		$resizeObj = new resize($destino.$img_nome1);//funcao da classe
		$resizeObj -> resizeImage(450, 450, 'crop');// redimensionar e cortar imagem
		$resizeObj -> saveImage($destino.$img_nome1, 100);//salva a imagem com qualidade 100

		move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome2);//propriedade para fazer upload             
		$resizeObj = new resize($destino.$img_nome2);//funcao da classe
		$resizeObj -> resizeImage(450, 450, 'crop');// redimensionar e cortar imagem
		$resizeObj -> saveImage($destino.$img_nome2, 100);//salva a imagem com qualidade 100

		move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome3);//propriedade para fazer upload             
		$resizeObj = new resize($destino.$img_nome3);//funcao da classe
		$resizeObj -> resizeImage(450, 450, 'crop');// redimensionar e cortar imagem
		$resizeObj -> saveImage($destino.$img_nome3, 100);//salva a imagem com qualidade 100
	

}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>