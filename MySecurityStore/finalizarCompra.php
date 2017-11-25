<?php

session_start();

include 'conexao.php';
if (empty($_SESSION['id'])){//se usuario não está logado
    header('location:login.php');//vai até a tela de login
}
if (empty($_SESSION['carrinho'])){
        header('location:index.php');
    }
$dtvenda = date('Y-m-d');
$notafiscal = uniqid();//gera identificador único
$usuario = $_SESSION['id'];
$tipoentrega = $_SESSION['idtransportadora'];
$situacao = 1;
$tipopagamento = $_SESSION['idPagamento'];
$idendereco = $_SESSION['idendereco'];
$tipoentrega = $_SESSION['idtransportadora'];

foreach ($_SESSION['carrinho'] as $Codigo => $qnt) { // sessao carrinho criada anteriormente
                                    $consulta = $conexao->query("SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = '$Codigo'"); //
                                    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
                                    $produto = $exibe['descricao'];
                                    $preco = $exibe['pvenda'];
                                    $preco = number_format($exibe['pvenda'],2,',','.');
                                    $total +=$exibe['pvenda'] *$qnt;
                                    $nome = $exibe['descricao'];
    
	
	$inserir = $conexao->query("INSERT INTO vendas (notafiscal, dtvenda, totalitens, valortotal, situacao, idlogin, tipopagamento, idendereco,tipoentrega,nomeproduto) VALUES
	('$notafiscal','$dtvenda','$qnt','$total','$situacao','$usuario','$tipopagamento','$idendereco','$tipoentrega','$nome')");
	
}

include 'fim.php';


?>