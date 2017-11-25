<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';
?>
<?php

$recebe_razaosocial = $_POST['txtRazaoSocial'];
$recebe_nomefantasia = $_POST['txtNomeFantasia'];
$recebe_cnpj = $_POST['txtCnpj'];
$recebe_inscest = $_POST['txtInscEst'];
$recebe_idendereco = $_POST['txtIdEndereco'];

try {
	
	$inserir=$conexao->query("INSERT INTO fornecedor(razaosocial, nomefantasia, cnpj, inscest, idendereco) VALUES ('$recebe_razaosocial', '$recebe_nomefantasia', '$recebe_cnpj', '$recebe_inscest', '$recebe_idendereco')");
	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>