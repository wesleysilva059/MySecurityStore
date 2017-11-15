<?php

session_start();


include 'conexao_teste.php' ;

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['password'];


$consulta = $conexao->query("SELECT * FROM login WHERE email='$recebe_email' AND senha='$recebe_senha'");


if($consulta->rowCount()==1){
	$exibeUser = $consulta->fetch(PDO::FETCH_ASSOC);
	
	$_SESSION['id']=$exibeUser['idcliente'];
	
	header('location:index.php');
}
else
{
	header('location:erro.php');
}


?>