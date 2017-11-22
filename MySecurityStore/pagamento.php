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
        <form method="post" action="">
                <h1 class="text-center">Formas de pagamento</h1>
    </div>
                    <div class="col-md-9">
                        <ul class="nav nav-pills">
                            <li class="disabled"><a href="#"><i class="fa fa-truck"></i> Formas de entrega</a></li>
                            <li class="active"><a href="#"><i class="fa fa-money"></i> Formas de pagamento</a></li>
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i> Meus produtos</a></li>
                        </ul>
                            <div class="margem"></div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-4 box">
                                        <div class="text-center">
                                            <h4>Boleto bancário</h4>
                                            <br>    
                                            <p><strong>Atenção: O boleto bancário deverá ser pago em no maximo 2 dias úteis</strong></p>
                                            <br>   
                                            <p>Pagamento por boleto</p>
                                            <div class="text-center">
                                                <input type="radio" name="pagamento" value="">
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-sm-4 box">
                                                <div class="text-center">
                                                   <h4>Cartão de crédito</h4>
                                                    <br>    
                                                    <p><strong>Atenção: É necessário pagar somente com um cartão de crédito</strong></p>
                                                    <br>    
                                                    <p>Pagamento por cartão de crédito</p>
                                                    <div class="text-center">
                                                      <input type="radio" name="pagamento" data-toggle="" href="#pagamento" value="">    
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="col-sm-4 box">
                                                    <div class="text-center">
                                                    <h4>Transferência bancária</h4>
                                                    <p><strong>Atenção: A transferência só e confirmada após um dia útil e poderá ser pago uma taxa extra se o banco não for Itaú</strong></p>
                                                        <p>Pagamento via transferência bancária</p>
                                                    <div class="text-center">
                                                          <input type="radio" name="pagamento" value="">
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        <div class="margem"></div>
                                </div>
                            </div>
                           <div class="margem"></div>
                                <div class="col-md-12">
                                    <section id="pagamento" class="shipping-calculator-form collapse">
                                        <p class="form-row form-row-wide">Valor sedex: R$33,00</p>
                                        <p class="form-row form-row-wide">Valor sedex: R$33,00</p>
                                    </section> 
                                </div>
                                <tr>
                                    <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                                    <a href="formasPagamento.php"><input type="submit" value="Revisar o carrinho" name="formasPagamento" class="text-right"></a>
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
                                        <?php  $idtrans = $_SESSION['idtransportadora']; ?>
                                        <td>Frete</td>
                                        <?php if(empty($idtrans)){ ?>
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
                                        <th><strong>R$<?php $comFrete = $val + $total;
                                         echo number_format($comFrete,2,',','.');?></strong></th>
                                         <?php } ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                </div>

            </div>       
</div>
<?php include("rodape.php"); ?>