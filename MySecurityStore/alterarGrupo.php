<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}

	include 'conexao.php';
	include("topo.php");

$idgrupo = $_GET['idgrupo'];
$consulta = $conexao->query("SELECT * FROM grupo WHERE idgrupo='$idgrupo'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$recebe_descrigrupo = $_POST['txtDescrigrupo'];


	

try {
	
	$alterar = $conexao->query("UPDATE grupo SET
	
	descrigrupo = '$recebe_descrigrupo'
	
	WHERE idgrupo = '$idgrupo'"

	);
	?>
	<h1>Grupo alterado com sucesso</h1>
	<a href="listaGrupos.php">Voltar</a>
	<?php
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>