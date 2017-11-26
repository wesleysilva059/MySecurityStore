<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';

$idfabricante = $_GET['idfabricante'];
$consulta = $conexao->query("SELECT * FROM fabricantes WHERE idfabricante='$idfabricante'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_descricao = $_POST['txtDescricao'];
$recebe_origem = $_POST['txtOrigem'];

	

try {
	
	$alterar = $conexao->query("UPDATE fabricantes SET
	
	descricao = '$recebe_descricao', 
	origem = '$recebe_origem'
	
	WHERE idfabricante = '$idfabricante'"

	);
	
	header('location:listaFabricantes.php');

} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>