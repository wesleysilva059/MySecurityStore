<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao.php';

$idtecnologia = $_GET['idtecnologia'];
$consulta = $conexao->query("SELECT * FROM tecnologias WHERE idtecnologia='$idtecnologia'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_descritec = $_POST['txtDescritec'];
$recebe_caracteristicas = $_POST['txtCaracteristicas'];

	

try {
	
	$alterar = $conexao->query("UPDATE tecnologias SET
	
	descritec = '$recebe_descritec', 
	caracteristicas = '$recebe_caracteristicas'
	
	WHERE idtecnologia = '$idtecnologia'"

	);
	
	
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>