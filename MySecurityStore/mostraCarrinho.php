    <div class="container">
        <div class="latest-product">
            <div class="margem-produtos-geral-home">
                <h2 class="section-title">Meu carrinho</h2>
            </div>
         
        </div>
        <div class="col-md-12">
            <div class="product-content-right">
                <div class="woocommerce">
                    <form method="post" action="#">
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
                                    $consulta = $conexao->query("SELECT * FROM produtos,prodprecos WHERE Codigo = '$Codigo'"); //
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
                    </form>         
                </div>
            </div>                        
        </div>                    
    </div>
