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

include 'conexao.php';

$recebe_descricao = $_POST['txtDescricao'];
$recebe_origem = $_POST['txtOrigem'];


try {
	
	$inserir=$conexao->query("INSERT INTO fabricantes (descricao, origem) VALUES ('$recebe_descricao', '$recebe_origem')");

	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>

<?php include ("rodape.php");?>