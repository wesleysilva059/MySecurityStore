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

include 'conexao_teste.php';

$recebe_descritec = $_POST['txtDescritec'];
$recebe_caracteristicas = $_POST['txtCaracteristicas'];


try {
	
	$inserir=$conexao->query("INSERT INTO tecnologias (descritec, caracteristicas) VALUES ('$recebe_descritec', '$recebe_caracteristicas')");

	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>