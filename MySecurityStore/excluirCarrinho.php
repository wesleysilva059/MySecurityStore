<?php
session_start();
$Codigo=$_GET['Codigo'];//pegar a propriedade Codigo
unset($_SESSION['carrinho'][$Codigo]);//remover sessao especifica
header('location:carrinhoCompras.php');
?>