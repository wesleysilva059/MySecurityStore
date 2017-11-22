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
                <h1 class="text-center">Formas de entrega</h1>
    </div>
    <div class="col-md-9">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#"><i class="fa fa-truck"></i> Formas de entrega</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-money"></i> Formas de pagamento</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i> Meus produtos</a></li>
                </ul>
                            <div class="margem"></div>
                            <div class="content">
                                
                                <div class="row">
                                   <form name="form" method="POST">
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4></h4>

                                                <p>De 3 a 5 dias úteis</p>

                                                <p>Valor - R$ 33,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4></h4>

                                                <p>De 3 a 5 dias úteis</p>

                                                <p>Valor - R$ 33,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="2">
                                                </div>
                                            </div>
                                        </div>       
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4></h4>

                                                <p>De 3 a 5 dias úteis</p>

                                                <p>Valor - R$ 33,00</p>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao" value="3">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Escolher" name="formaEnvio">
                                    </form>
                                    <div class="margem"></div>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                                        <a href="formasPagamento.php"><input type="submit" value="Ir para as formas de pagamento" name="formasPagamento" class="text-right"></a>
                                        <a href="excluirCarrinho.php"><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-right"></a>
                                    </tr>
                                </div>
                            </div>
                           <?php if (isset($_POST['formaEnvio'])) {
                               

                           if (isset($_POST['opcao'])) {
                               $forma = $_POST['opcao'];
                               echo "$forma";
                              }
                            }
                            ?>

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
                                        <td>Frete</td>
                                        <th>A escolher</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <th><strong> <strong>R$<?php echo number_format($total,2,',','.');?></strong></strong></th>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
               
</div>
<?php include("rodape.php"); ?>