<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';

$idfornecedor = $_GET['idfornecedor'];
$consulta = $conexao->query("SELECT * FROM fornecedor WHERE fornecedor='$idfornecedor'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_razaosocial = $_POST['txtRazaoSocial'];
$recebe_nomefantasia = $_POST['txtNomeFantasia'];
$recebe_cnpj = $_POST['txtCnpj'];
$recebe_inscest = $_POST['txtInscEst'];
$recebe_idendereco = $_POST['txtIdEndereco'];

try {
	
	$alterar = $conexao->query("UPDATE fornecedor SET
	
	razaosocial = '$recebe_razaosocial',
	nomefantasia = '$recebe_nomefantasia',
	cnpj = '$recebe_cnpj',
	inscest = '$recebe_inscest',
	idproduto = '$recebe_idproduto', 
	
	WHERE idfornecedor = '$idfornecedor'
	
	");
	
	
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>