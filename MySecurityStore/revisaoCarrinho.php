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
    <h2 class="text-center">Revisão</h2>
    </div>
    <br>    
    <div class="col-md-9">
        <form>
                        <table cellspacing="0" class="shop_table cart">
                            <thead>
                                <tr>
                                    <th>Remover</th>
                                    <th>Imagem</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
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
                                        <a title="Remover este item" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><span class="fa fa-trash-o" aria-hidden="true"></span></a> 
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
                                           <h4> <?php echo $qnt; ?> </h4>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <tr>
                            <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                            <a href="formasPagamento.php"><input type="submit" value="Fechar a compra" name="formasPagamento" class="text-right"></a>
                            <a href="excluirCarrinho.php"><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-right"></a>
                        </tr>
                    </form>         
    </div>
    <div class="col-md-3">
            <div class="box" id="order-summary">
                <div>
                    <h3>Valores a pagar</h3>
                </div>
                    <p>Valor total do seu produto já com o frete incluso.</p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <th>R$446.00</th>
                            </tr>
                            <tr>
                                <td>Frete</td>
                                <th>$10.00</th>
                            </tr>
                            <tr>
                                <td><strong>Total</strong></td>
                                <th><strong>$456.00</strong></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>               
</div>
<?php   include("rodape.php"); ?>