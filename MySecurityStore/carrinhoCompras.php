<?php
    session_start();
    include'conexao.php';
    
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
                                <table cellspacing="0" class="shop_table cart">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="section-title">Total: <strong>R$ <?php echo number_format($total,2,',','.');?></strong></h2>
                                                <a href="index.php"><input type="submit" value="Continuar comprando" name="" class="button text-left"></a>
                                                 <?php if (count($_SESSION['carrinho'])>0){?>
                                                <a href="entrega.php"><input type="submit" value="Fechar compra" name="fecharCompra" class="add_to_cart_button text-left"></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                             <div>
                                <div class="cross-sells">
                                  <h2>Calcular frete</h2>
                                    <form method="POST" action="#" class="shipping_calculator">
                                        <input type="text" placeholder="Digite seu CEP" value="" id="calculaFrete" class="input-text" name="calculaFrete">
                                        <button type="submit" class="shipping-calculator-button add_to_cart_button" data-toggle="collapse" href="#calculaFretetotal" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calcular</button>
                                        <section id="calculaFretetotal" class="shipping-calculator-form collapse">
                                        <div class="margem"></div>
                                    <form name="form" method="POST">
                                     <br>
                                        <h2>Métodos de envio</h2>
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>Sedex</h4>

                                                <p>De 3 a 5 dias úteis</p>

                                                <p>Valor - R$ 52,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>PAC</h4>

                                                <p>De 10 a 15 dias úteis</p>

                                                <p>Valor - R$ 17,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="2">
                                                </div>
                                            </div>
                                        </div>       
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>Transportadora</h4>

                                                <p>De 6 a 10 dias úteis</p>

                                                <p>Valor - R$ 38,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="3">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Escolher" name="formaEnvio">
                                    </form>
                                       <?php if (isset($_POST['formaEnvio'])) {
                                           

                                       if (isset($_POST['opcao'])) {
                                           $forma = $_POST['opcao'];
                                           if($forma == 1){
                                            unset($_SESSION['idtransportadora']);
                                            unset($_SESSION['nome']);
                                            unset($_SESSION['valor']);
                                            $_SESSION['idtransportadora']=1;
                                            $_SESSION['nome'] = "Sedex";
                                            $_SESSION['valor'] = 52;
                                           }else if($forma==2){
                                            unset($_SESSION['idtransportadora']);
                                            unset($_SESSION['nome']);
                                            unset($_SESSION['valor']);
                                            $_SESSION['idtransportadora']=2;
                                            $_SESSION['nome'] = "PAC";
                                            $_SESSION['valor'] = 17;
                                           }else if($forma==3){
                                            unset($_SESSION['idtransportadora']);
                                            unset($_SESSION['nome']);
                                            unset($_SESSION['valor']);
                                            $_SESSION['idtransportadora']=3;
                                            $_SESSION['nome'] = "Transportadora";
                                            $_SESSION['valor'] = 38;
                                            }
                                          }
                                        }
                                        
                                        $idtrans = $_SESSION['idtransportadora'];
                                        ?>
                                    <div class="margem"></div>
                                </div>
                                <div class="cart_totals ">
                                    <h2>Total da compra</h2>
                                     <?php if (empty($idtrans)){?>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>R$ <span class="amount"><?php echo number_format($total,2,',','.');?></span></td>
                                            </tr>

                                            <tr>
                                                <th>Preço Total</th>
                                                <td><strong>R$ <span class="amount"><?php echo number_format($total,2,',','.');?></span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <?php }else{ ?>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td><span class="amount">R$ <?php echo number_format($total,2,',','.');?></span></td>
                                            </tr>
                                            <tr>
                                                <th>Frete</th>
                                                <td>R$ <?php $val = $_SESSION['valor']; 
                                                    echo number_format($val,2,',','.');?></td>
                                            </tr>
                                            <tr>
                                                <th><strong>Total</strong></th>
                                                <td><strong>R$ <?php $comFrete = $val + $total;
                                                echo number_format($comFrete,2,',','.');?></strong></td>              
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include("rodape.php"); ?>

