<?php include("topo.php"); ?>
<?php include("menu.php");?>
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
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove">
                                                <a title="Remover este item" class="remove" href="#"><span class="fa fa-trash-o" aria-hidden="true"></span></a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="conteudoProdutoCompra.php"><img alt="" class="" src="Imagens/kitCompleto1.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="conteudoProdutoCompra.php">KIT 4 CÂMERAS</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">R$2200,00</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">R$2200.00</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="Continuar comprando" name="continuarComprando" class="button text-left">
                                                <input type="submit" value="Fechar compra" name="fecharCompra" class="add_to_cart_button text-left">
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
	                                            <td><span class="amount">R$2200.00</span></td>
	                                        </tr>

	                                        <tr class="shipping">
	                                            <th>Produto</th>
	                                            <td>KIT 4 CÂMERAS</td>
	                                        </tr>

	                                        <tr class="order-total">
	                                            <th>Preço Total</th>
	                                            <td><strong><span class="amount">R$2200.00</span></strong> </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>


                           
                         


                            </div>
                        </div>                        
                    </div>                    
                </div>

    </div>
<?php include("rodape.php");?>