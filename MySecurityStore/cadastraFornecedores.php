<!-- Em desenvolvimento-->
<?php

	if (!isset($_GET["idfornecedor"])){
		$idfornecedor = 0;
	}
	else{
		$idfornecedor = $_GET["idfornecedor"];
	}
	if ($idfornecedor == 0){ // Novo Registro na tabela
		$razaosocial = "";
		$nomefantasia = "";
		$cnpj = "";
		$inscest = "";
		$idendereco = "";
	}
	else{ // Alterar um Registro Existente da Tabela
		// Busca os dados do BD
		include("conexao.php");
		function RetornaFornecedorPorId($idfornecedor){
			$sql = "SELECT * FROM fornecedor, enderecos WHERE fornecedor.idfornecedor = ".$idfornecedor;
			$conexao = AbreConexao();//abre a conexao com o BD
			$resultado = $conexao->query($sql);
			$conexao->close();//fecha a conexão com o BD
			if(mysqli_num_rows($resultado) > 0){
			$fornecedor = mysqli_fetch_array($resultado);
			return $fornecedor;
			}else{
				return null;
			}
		}
		// Retorna o registro de uma pessoa da tabela
		$f = RetornaFornecedorPorId($idfornecedor);
		// Verifica se retornou um registro
		if ($f!= null){
			$razaosocial = $f["razaosocial"];
			$nomefantasia = $f["nomefantasia"];
			$cnpj = $f["cnpj"];
			$inscest = $f["inscest"];
			$idendereco = $f["idendereco"];
		}
	}
    include("topo.php");
    include("menuSecundario.php");
?>
<div class="container theme-showcase" role="main">
        <h3 class="form-signin-heading">Cadastro fornecedor</h3>      
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#produto" aria-controls="produto" role="tab" data-toggle="tab">Fornecedor</a></li>
                <li role="presentation"><a href="#produtopreco" aria-controls="produtopreco" role="tab" data-toggle="tab">Preco</a></li>
            </ul>
        </div>
        <div class="formulario">
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="produto">
                    <div style="padding-top:20px;">
                     	<form action="salvarFornecedor.php" method="POST">
 							<input type="hidden" name="idfornecedor" value="<?php echo $idfornecedor; ?>">
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cRazao">Razão Social</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtRazaoSocial" id="cRazao" placeholder="Razão social" value="<?php echo $razaosocial; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cFant">Nome Fantasia</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtNomeFantasia" id="cFant" placeholder="Nome Fantasia" value="<?php echo $nomefantasia; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cCnpj">CNPJ</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtCNPJ" id="cCnpj" placeholder="CNPJ" value="<?php echo $cnpj; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cInscest">Inscrição Estadual</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtInscEst" id="cInscest" placeholder="Inscrição estadual" value="<?php echo $inscest; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cIdEndereco">ID Endereço</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtIdEndereco" id="cIdEndereco" placeholder="ID endereço" value="<?php echo $idendereco; ?>">
 										</div>
 								<div class="text-center">
 									<input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Dados salvos com sucesso!');">
 										<a href="mostraFornecedoresCadastrados.php" class="btn btn-warning">Cancelar</a>
 								</div>
 						</form>
                    </div>
                </div>
        	</div>
        </div>
</div>