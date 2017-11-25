<?php
    session_start();
    include'conexao.php';
    if (empty($_SESSION['id'])){//se usuario não está logado
        header('location:login.php');//vai até a tela de login
    }
    include("topo.php");
    include("menu.php");
    if (empty($_SESSION['idtransportadora'])){
        $_SESSION['idtransportadora']=0;
    }
    if (empty($_SESSION['idendereco'])){
        $_SESSION['idendereco']=0;
    }
   
?>
<div class="container">
    <div class="col-md-12">
                <h1 class="text-center">Formas de entrega</h1><br><br>
    </div>
    <div class="col-md-9">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#"><i class="fa fa-truck"></i> Formas de entrega</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-money"></i> Formas de pagamento</a></li>
                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i> Meus produtos</a></li>
                </ul>
                            <div class="margem"></div>
                            <div class="content">
                            <?php
                            $idlogin = $_SESSION['id'];
                            $consulta3 = $conexao->query("SELECT * FROM `enderecos`, login WHERE enderecos.idlogin = login.idlogin AND login.idlogin = '$idlogin'");
                           while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){ 
                                $tipoendereco = $listar3['tipo'];
                                if($tipoendereco==1){
                            ?>  
                            <form name="form" method="POST">
                                <div class="row">
                                    <div class="col-sm-6 box">
                                        <h4 class="text-center">Endereço principal</h4>
                                        <p>Rua: <?php echo $listar3['logradouro']; ?></p>
                                        <p>Número: <?php echo $listar3['numero']; ?></p>
                                        <p>Bairro: <?php echo $listar3['bairro']; ?></p>
                                        <p>CEP: <?php echo $listar3['cep']; ?></p>
                                        <p>Estado: <?php echo $listar3['uf']; ?></p>
                                        <?php $sessao = $listar3['idendereco']; ?>
                                        <h4 class="text-center"><strong>Escolher este endereço</strong></h4>
                                        <div class="text-center">
                                            <input type="radio" name="opcaoend" value="1">
                                        </div>
                                    </div>
                                    <?php }else{ ?>    
                                    <div class="col-sm-6 box">
                                        <h4 class="text-center">Endereço Alternativo</h4>
                                        <p>Rua: <?php echo $listar3['logradouro']; ?></p>
                                        <p>Número: <?php echo $listar3['numero']; ?></p>
                                        <p>Bairro: <?php echo $listar3['bairro']; ?></p>
                                        <p>CEP: <?php echo $listar3['cep']; ?></p>
                                        <p>Estado: <?php echo $listar3['uf']; ?></p>
                                        <?php $sessao2 = $listar3['idendereco']; ?>
                                        <h4 class="text-center"><strong>Escolher este endereço</strong></h4>
                                        <div class="text-center">
                                            <input type="radio" name="opcaoend" value="2">
                                        </div>
                                    </div>
                                      <?php } }?>
                                    <input type="submit" value="Escolher" name="endEnvio">
                                </div>
                            </form>
                            <br>
                            <?php $idlogin = $_SESSION['id'];
                            $consulta3 = $conexao->query("SELECT * FROM `enderecos`, login WHERE enderecos.idlogin = login.idlogin AND login.idlogin = '$idlogin'");
                           while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){ 
                                $tipoendereco = $listar3['tipo']; ?>
                                <?php if (isset($_POST['endEnvio'])) {
                                           

                                       if (isset($_POST['opcaoend'])) {
                                           $forma = $_POST['opcaoend'];
                                           if($forma == 1){
                                            unset($_SESSION['idendereco']);
                                            $_SESSION['idendereco']=$sessao;
                                            }else if($forma==2){
                                            unset($_SESSION['idendereco']);
                                            $_SESSION['idendereco']=$sessao2;
                                            }
                                          }
                                        }
                                    }
                                        ?>

                                <a href="endereco.php?idendereco=<?php echo $idendereco ?>"><input type="submit" value="Atualizar endereço principal" name="enderecoPrincipal" class="button pull-left"></a>
                                <a href="endereco.php"><input type="submit" value="Cadastrar ou editar endereço Alternativo" name="outroEndereco" class="button pull-right"></a>


<div class="container">
                                <div class="col-md-11">
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
                                    <div class="margem"></div>

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
                                        <?php if ($idtrans==0){?>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                                        <a title="Cancelar" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-right"></a>
                                    </tr>
                                        <?php }else{ ?>
                                    <tr>
                                        <a href="index.php"><input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-right"></a>
                                        <a title="Cancelar" class="remove" href="excluirCarrinho.php?Codigo=<?php echo $Codigo; ?> "><input type="submit" value="Cancelar compra" name="cancelarCompra" class="text-right"></a>
                                        <a href="pagamento.php"><input type="submit" value="Ir para as formas de pagamento" name="formasPagamento" class="pull-right"></a>
                                        <?php } ?>
                                    </tr>
                                </div>
                            </div>
                        </div>
                    </div>
           <br><br><br><br><br><br><br>
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