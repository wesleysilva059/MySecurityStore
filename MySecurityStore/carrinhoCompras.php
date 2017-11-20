<?php
    session_start();
    include'conexao.php';
    if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
     include("topo.php");
     include("menu.php");
    if(!empty($_GET['Codigo'])){ //se nao recebe o codigo do produto nao pode add mais nada no carrinho
        $Codigo = $_GET['Codigo'];//pega o codigo do produto que esta sendo comprado
    
    if(!isset($_SESSION['carrinho'])){//se sessão carrinho não estiver setada
        $_SESSION['carrinho'] = array();//cria sessao carrinho
    }
    if(!isset($_SESSION['carrinho'][$Codigo])){
        $_SESSION['carrinho'][$Codigo]=1;//após criar, adiciona um produto a ele
    }else{
        $_SESSION['carrinho'][$Codigo]+=1;//se ela ja estiver setada, adiciona outro produto ao carrinho
    }
    include'mostraCarrinho.php';

    }else{
        include'mostraCarrinho.php';
    }
?>
 <div class="container">
        <div class="col-md-12">
                    <div class="product-content-right">
                        <div>
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <tbody>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <h2 class="section-title">Total: <strong>R$<?php echo number_format($total,2,',','.');?></strong></h2>
                                                <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-left"></a>
                                                 <?php if (count($_SESSION['carrinho'])>0){?>
                                                <a href="finalizarCompre.php"><input type="submit" value="Fechar compra" name="fecharCompra" class="add_to_cart_button text-left"></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                             <div>
                                <div class="cross-sells">
                                  <h2>Calcular frete</h2>
                                    <form method="POST" action="#" class="shipping_calculator">
                                        <input type="text" placeholder="Digite seu CEP" value="" id="calculaFrete" class="input-text" name="calculaFrete">
                                        <button type="submit" class="shipping-calculator-button add_to_cart_button" data-toggle="collapse" href="#calculaFretetotal" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calcular</button>
                                        <section id="calculaFretetotal" class="shipping-calculator-form collapse">
                                        <div class="margem"></div>
                                            <p class="form-row form-row-wide">Valor sedex: R$33,00</p>
                                            <p class="form-row form-row-wide">Valor sedex: R$33,00</p>
                                    </form>
                                </div>
                                <div class="cart_totals ">
                                    <h2>Total da compra</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount"><?php echo number_format($total,2,',','.');?></span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Produto</th>
                                                <td><?php echo $produto; ?></td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Preço Total</th>
                                                <td><strong><span class="amount"><?php echo number_format($total,2,',','.');?></span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include("rodape.php"); ?>

