<?php
    session_start();
    include'conexao.php';
    if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
    include("topo.php");
    include("menu.php");
    if (empty($_SESSION['idPagamento'])){
        $_SESSION['idPagamento']=0;
    }
?>
<div class="container">
    <div class="col-md-12">
                <h1 class="text-center">Formas de pagamento</h1><br><br>
    </div>
    <div class="col-lg-9">
                <ul class="nav nav-pills">
                    <li class="disabled"><a href="#"><i class="fa fa-truck"></i> Formas de entrega</a></li>
                    <li class="active"><a href="#"><i class="fa fa-money"></i> Formas de pagamento</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i> Meus produtos</a></li>
                </ul>
                            <div class="margem"></div>
                            <div class="content">
                                <div class="row">
                                   <form name="form" method="POST">
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>Boleto bancário</h4>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao1" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>Cartão de credito</h4>
                                                <div class="text-center">

                                                    <input type="radio" name="opcao1" value="2">
                                                </div>
                                            </div>
                                        </div>       
                                        <div class="col-sm-4 box">
                                           <div class="text-center">

                                                <h4>Cartão de debito</h4>

                                                <div class="text-center">

                                                    <input type="radio" name="opcao1" value="3">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Escolha" name="formaPagamento">
                                    </form>
                                    <div class="margem"></div>

                                       <?php if (isset($_POST['formaPagamento'])) {
                                           

                                       if (isset($_POST['opcao1'])) {
                                           $forma = $_POST['opcao1'];
                                           if($forma == 1){
                                            unset($_SESSION['idPagamento']);
                                            unset($_SESSION['opcPag']);
                                            unset($_SESSION['nBoleto']);
                                            unset($_SESSION['nomecartao']);
                                            unset($_SESSION['bandeiracartao']);
                                            unset($_SESSION['validadecartao']);
                                            unset($_SESSION['numerocartao']);
                                            unset($_SESSION['numeroparcelas']);
                                            $_SESSION['idPagamento']=1;
                                            $_SESSION['opcPag'] = "Boleto";
                                            $_SESSION['nBoleto'] = "2648359670";
                                           }else if($forma==2){
                                            unset($_SESSION['idPagamento']);
                                            unset($_SESSION['opcPag']);
                                            unset($_SESSION['nBoleto']);
                                            unset($_SESSION['nomecartao']);
                                            unset($_SESSION['bandeiracartao']);
                                            unset($_SESSION['validadecartao']);
                                            unset($_SESSION['numerocartao']);
                                            unset($_SESSION['numeroparcelas']);
                                            $_SESSION['idPagamento']=2;
                                            $_SESSION['opcPag'] = "Credito";
                                            ?>
                                            <form method="POST">
                                                <div class="col-sm-12 box">
                                                            <?php foreach ($_SESSION['carrinho'] as $Codigo => $qnt) { // sessao carrinho criada anteriormente
                                                            $consulta = $conexao->query("SELECT * FROM `produtos`,`prodprecos`,prodestoque WHERE produtos.Codigo = prodprecos.idproduto AND produtos.Codigo = prodestoque.idproduto AND produtos.Codigo = '$Codigo'"); //
                                                            $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
                                                            $preco = $exibe['pvenda'];
                                                            $preco = number_format($exibe['pvenda'],2,',','.');
                                                            $total = $exibe['pvenda'] *$qnt;
                                                             ?>                                                    
                                                    <h2>Cartão de crédito</h2>
                                                    <div class="form-group">
                                                        <label for="numero-parcelas">Número de parcelas</label>
                                                        <select required name="numeroparcelas" class="form-control">
                                                            <option value="selecione">Selecione</option>
                                                            <option value="1">1x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = $comFrete/1;
                                                            echo number_format($parcelas,2,',','.'); ?> sem juros</option>
                                                            <option value="2">2x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = $comFrete/2;
                                                            echo number_format($parcelas,2,',','.'); ?> sem juros</option>
                                                            <option value="3">3x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = $comFrete/3;
                                                            echo number_format($parcelas,2,',','.'); ?> sem juros</option>
                                                            <option value="4">4x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = ($comFrete/4) + 13;
                                                            echo number_format($parcelas,2,',','.'); ?> com juros</option>
                                                            <option value="5">5x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = ($comFrete/5) + 13 ;
                                                            echo number_format($parcelas,2,',','.'); ?> com juros</option>
                                                            <option value="6">6x de R$<?php $val = $_SESSION['valor'];
                                                            $comFrete = $val + $total;
                                                            $parcelas = ($comFrete/6) + 13;
                                                            echo number_format($parcelas,2,',','.'); ?> com juros</option>
                                                        </select>
                                                    </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label for="numero-cartao">Número - CVV</label>
                                                        <input type="text" class="form-control" id="numero-cartao" required name="numerocartao">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bandeira-cartao">Bandeira <span class="fa fa-cc-mastercard" aria-hidden="true"></span> <i class="fa fa-cc-visa" aria-hidden="true"></i> <i class="fa fa-cc-amex" aria-hidden="true"></i></label>
                                                        <select required name="bandeiracartao" id="bandeira-cartao" class="form-control">
                                                            <option value="selecione">Selecione</option>
                                                            <option value="master">MasterCard</option>
                                                            <option value="visa">VISA</option>
                                                            <option value="amex">American Express</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validade-cartao">Validade</label>
                                                        <input type="month" class="form-control" id="validadecartao" required name="validadecartao">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validade-cartao">Nome no cartão</label>
                                                        <input type="text" class="form-control" id="nomecartao" required name="nomecartao">
                                                    </div>
                                                    <button type="submit" class="pull-right" name="Cartao1">
                                                    Confirmar</button>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['Cartao1'])){
                                                if
                                                (isset($_POST["numerocartao"]) AND 
                                                isset($_POST["bandeiracartao"]) AND
                                                isset($_POST["validadecartao"]) AND
                                                isset($_POST["nomecartao"]) AND
                                                isset($_POST["numeroparcelas"])){
                                                $numero = $_POST["numerocartao"];
                                                $bandeira = $_POST["bandeiracartao"];
                                                $validade = $_POST["validadecartao"];
                                                $nome = $_POST["nomecartao"];
                                                $numeroparcelas = $_POST["numeroparcelas"];
                                                $_SESSION['nomecartao'] = $nome;
                                                $_SESSION['bandeiracartao'] = $bandeira;
                                                $_SESSION['validadecartao'] = $validade;
                                                $_SESSION['numerocartao'] = $numero;
                                                $teste = $_SESSION['nomecartao'];
                                                echo "$teste";
                                                }
                                            }
                                             ?>
                                            <?php
                                           }else if($forma==3){
                                            unset($_SESSION['idPagamento']);
                                            unset($_SESSION['opcPag']);
                                            unset($_SESSION['nBoleto']);
                                            unset($_SESSION['nomecartao']);
                                            unset($_SESSION['bandeiracartao']);
                                            unset($_SESSION['validadecartao']);
                                            unset($_SESSION['numerocartao']);
                                            unset($_SESSION['numeroparcelas']);
                                            $_SESSION['idPagamento']=3;
                                            $_SESSION['opcPag'] = "Debito";
                                            ?>
                                            <form method="POST">
                                                <div class="col-sm-12 box">
                                                    <h2>Cartão de débito</h2>
                                                    <div class="form-group">
                                                        <label for="numero-cartao">Número - CVV</label>
                                                        <input type="text" class="form-control" id="numero-cartao" name="numerocartao2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bandeira-cartao">Bandeira <span class="fa fa-cc-mastercard" aria-hidden="true"></span> <i class="fa fa-cc-visa" aria-hidden="true"></i> <i class="fa fa-cc-amex" aria-hidden="true"></i></label>
                                                        <select name="bandeiracartao2" id="bandeira-cartao" class="form-control">
                                                            <option value="master">MasterCard</option>
                                                            <option value="visa">VISA</option>
                                                            <option value="amex">American Express</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validade-cartao">Validade</label>
                                                        <input type="month" class="form-control" id="validade-cartao" name="validadecartao2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validade-cartao">Nome no cartão</label>
                                                        <input type="text" class="form-control" id="nome-cartao" name="nomecartao2">
                                                    </div>
                                                    <button type="submit" class="pull-right" name="Cartao2">
                                                    Confirmar</button>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['Cartao2'])){
                                            
                                                if (isset($_POST["numerocartao2"]) AND 
                                                isset($_POST["bandeiracartao2"]) AND
                                                isset($_POST["validadecartao2"]) AND
                                                isset($_POST["nomecartao2"])){
                                                $numero = $_POST["numerocartao2"];
                                                $bandeira = $_POST["bandeiracartao2"];
                                                $validade = $_POST["validadecartao2"];
                                                $nome = $_POST["nomecartao2"];
                                                $_SESSION['nomecartao'] = $nome;
                                                $_SESSION['bandeiracartao'] = $bandeira;
                                                $_SESSION['validadecartao'] = $validade;
                                                $_SESSION['numerocartao'] = $numero;

                                                }
                                            }
                                            }
                                          }
                                        }
                                        $idpag = $_SESSION['idPagamento'];
                                        ?>
                                        <?php if (empty($idpag)){?>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-left"></a>
                                        <a href="excluirCarrinho.php"><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-left"></a>
                                    </tr>
                                        <?php }else{ ?>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-left"></a>
                                        <a title="Cancelar" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-left"></a>
                                        <a href="revisao.php"><input type="submit" value="Revisar o carrinho" name="revisarCarrinho" class="pull-right"></a>
                                        
                                        <?php } ?>
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
                                        <td>Pagamento</td>
                                        <?php if(empty($idpag)){ ?>
                                        <th>A escolher</th>
                                        <?php }else{ ?>
                                        <th><?php $frm = $_SESSION['opcPag']; 
                                        echo $frm ?></th>
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
                                </tbody>
                            </table>
                        </div>

                </div>

            </div>
               
</div>
<?php include("rodape.php"); ?>