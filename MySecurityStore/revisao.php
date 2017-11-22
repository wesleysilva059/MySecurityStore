<?php
    session_start();
    include'conexao.php';
    if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
    include("topo.php");
    include("menu.php");
       
   
?>
<div class="container">
    <div class="col-md-12">
                <h1 class="text-center">Revisão do pedido</h1><br><br>
    </div>
    <div class="col-md-9">
                <ul class="nav nav-pills">
                    <li class="disabled"><a href="#"><i class="fa fa-truck"></i> Formas de entrega</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-money"></i> Formas de pagamento</a></li>
                    <li class="active"><a href="#"><i class="fa fa-eye"></i> Revisão do pedido</a></li>
                </ul>
                            <div class="margem"></div>
                            <div class="content">
                            <?php
                            //$consulta3 = $conexao->query("SELECT * FROM `enderecos`, login WHERE,  login.idlogin='$_SESSION['id']' AND idendereco='$idendereco'");
                            //$listar=$consulta3->fetch(PDO::FETCH_ASSOC)
                            ?>  
                                <div class="col-md-12">
                                   <form>
                        <br><br><br>
                        <table cellspacing="0" class="shop_table cart">
                            <thead>
                                <tr>
                                    <th>Remover</th>
                                    <th>Imagem</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(!isset($_SESSION['carrinho'])){

                                    $_SESSION['carrinho'] = array();
                                }
                                $total = null;
                                foreach ($_SESSION['carrinho'] as $Codigo => $qnt) { // sessao carrinho criada anteriormente
                                    $consulta = $conexao->query("SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = '$Codigo'"); //
                                    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
                                    $produto = $exibe['descricao'];
                                    $preco = $exibe['pvenda'];
                                    $preco = number_format($exibe['pvenda'],2,',','.');
                                    $total +=$exibe['pvenda'] *$qnt;

                                ?>
                                <tr>
                                    <td class="product-remove">
                                        <a title="Remover este item" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><span class="fa fa-trash-o" aria-hidden="true"></span>Excluir</a> 
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="conteudoProdutoCompra.php?Codigo=<?php echo $exibe['Codigo']?>"><img alt="" class="" src="Imagens/<?php echo $exibe['foto']; ?>"></a>
                                    </td>

                                    <td class="product-name">
                                        <a href="conteudoProdutoCompra.php"><?php echo $produto; ?></a> 
                                    </td>

                                    <td class="product-price">
                                        <span class="amount"> <?php echo $preco; ?> </span> 
                                    </td>

                                    <td class="product-quantity">
                                        <div class="quantity buttons_added">
                                           <div> <?php echo $qnt; ?> </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4><strong>R$<?php echo number_format($total,2,',','.');?></strong></h4>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </form>
                                    <div class="margem"></div>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                                        <a href="revisao.php"><input type="submit" value="Finalizar pedido" name="revisarCarrinho" class="text-right"></a>
                                        <a title="Cancelar" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-right"></a>
                                    </tr>
                                </div>
                        </div>
                    </div>
           <br><br><br>
            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div>
                        <h3>Valores a pagar</h3>
                    </div>
                        <p>Valor total do seu produto já com o frete incluso.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php foreach ($_SESSION['carrinho'] as $Codigo => $qnt) { // sessao carrinho criada anteriormente
                                    $consulta = $conexao->query("SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = '$Codigo'"); //
                                    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
                                    $preco = $exibe['pvenda'];
                                    $preco = number_format($exibe['pvenda'],2,',','.');
                                    $total = $exibe['pvenda'] *$qnt; ?>
                                    <tr>
                                        <td>Subtotal</td>
                                        <th><strong>R$<?php echo number_format($total,2,',','.');?></strong></th>
                                    </tr>
                                    <tr> 
                                        <td>Frete</td>
                                        <?php $idtrans = $_SESSION['idtransportadora']; 
                                        if(empty($idtrans)){ ?>
                                        <th>A escolher</th>
                                        <?php }else{ ?>
                                        <th>R$<?php $val = $_SESSION['valor']; 
                                        echo number_format($val,2,',','.');?></th>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <?php if(empty($idtrans)){ ?>
                                        <th><strong>R$<?php echo number_format($total,2,',','.');?></strong></th>
                                        <?php }else{ ?>
                                        <th><strong>R$<?php $val = $_SESSION['valor'];
                                         $comFrete = $val + $total;
                                         echo number_format($comFrete,2,',','.');?></strong></th>
                                         <?php } ?>
                                    </tr>
                                    <?php } ?>
                                    <tr> 
                                        <td>Forma de pagamento</td>
                                        <?php $idpag = $_SESSION['idPagamento'];
                                        if(empty($idpag)){ ?>
                                        <th>A escolher</th>
                                        <?php }else{ ?>
                                        <th><?php $frm = $_SESSION['opcPag']; 
                                        echo $frm ?></th>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                </div>

            </div>
               
</div>
<?php include("rodape.php"); ?>