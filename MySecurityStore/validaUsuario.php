<?php

session_start();


include 'conexao_teste.php' ;

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['password'];


$consulta = $conexao->query("SELECT * FROM login WHERE email='$recebe_email' AND senha='$recebe_senha'");


if($consulta->rowCount()==1){
	$exibeUser = $consulta->fetch(PDO::FETCH_ASSOC);
	
	if($exibeUser['tipousuario']!=1){
			
		$_SESSION['id']=$exibeUser['idcliente'];
		$_SESSION['adm']=0;
				
		header('location:index.php');
	} else {
		
		$_SESSION['id']=$exibeUser['idcliente'];
		$_SESSION['adm']=1;
		
		header('location:index.php');
	}
}
else
{
	header('location:erro.php');
}


?>