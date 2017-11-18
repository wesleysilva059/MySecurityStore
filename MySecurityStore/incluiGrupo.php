<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';
?>
<?php

include 'conexao_teste.php';

$recebe_descrigrupo = $_POST['txtDescrigrupo'];


try {
	
	$inserir=$conexao->query("INSERT INTO grupo (descrigrupo) VALUES ('$recebe_descrigrupo')");

	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>