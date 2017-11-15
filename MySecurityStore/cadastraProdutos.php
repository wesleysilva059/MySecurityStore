<!-- Em desenvolvimento-->
<?php

	if (!isset($_GET["Codigo"])){
		$Codigo = 0;
	}
	else{
		$Codigo = $_GET["Codigo"];
	}
	if ($Codigo == 0){ // Novo Registro na tabela
		$codbarras = "";
		$marca = "";
		$modelo = "";
		$grupo = "";
		$descricao = "";
		$garantia = "";
		$obs = "";
		$idfabricante = "";
		$pesoliquido = "";
		$pesoembalagem = "";
	}
	else{ // Alterar um Registro Existente da Tabela
		// Busca os dados do BD
		include("conexao.php");
		function RetornaPessoaPorId($Codigo){
			$sql = "SELECT * FROM produtos,prodprecos,prodtecnologia,prodestoque,fabricantes,fornecedor WHERE produtos.Codigo = ".$Codigo;
			$conexao = AbreConexao();//abre a conexao com o BD
			$resultado = $conexao->query($sql);
			$conexao->close();//fecha a conexão com o BD
			if(mysqli_num_rows($resultado) > 0){
			$pessoa = mysqli_fetch_array($resultado);
			return $pessoa;
			}else{
				return null;
			}
		}
		// Retorna o registro de uma pessoa da tabela
		$p = RetornaProdutoPorId($Codigo);
		// Verifica se retornou um registro
		if ($p!= null){
			$codbarras = $p["codbarras"];
			$marca = $p["marca"];
			$modelo = $p["modelo"];
			$grupo = $p["grupo"];
			$descricao = $p["descricao"];
			$garantia = $p["garantia"];
			$obs = $p["obs"];
			$idfabricante = $p["idfabricante"];
			$pesoliquido = $p["pesoliquido"];
			$pesoembalagem = $p["pesoembalagem"];
		}
	}
    include("topo.php");
    include("menuSecundario.php");
?>
<div class="container theme-showcase" role="main">
        <h3 class="form-signin-heading">Cadastro produto</h3>      
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#produto" aria-controls="produto" role="tab" data-toggle="tab">Produto</a></li>
                <li role="presentation"><a href="#produtopreco" aria-controls="produtopreco" role="tab" data-toggle="tab">Preco</a></li>
            </ul>
        </div>
        <div class="formulario">
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="produto">
                    <div style="padding-top:20px;">
                     	<form action="salvarProduto.php" method="POST">
 							<input type="hidden" name="Codigo" value="<?php echo $Codigo; ?>">
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cBarras">Codigo de barras</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtCodBarras" id="cBarras" placeholder="Codigo de barras" value="<?php echo $codbarras; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cMarca">Marca</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtMarca" id="cMarca" placeholder="Marca" value="<?php echo $marca; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cModelo">Modelo</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtModelo" id="cModelo" placeholder="Modelo" value="<?php echo $modelo; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cGrupo">Grupo</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtGrupo" id="cGrupo" placeholder="Grupo" value="<?php echo $grupo; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cDescricao">Descrição</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtDescricao" id="cDescricao" placeholder="Descrição" value="<?php echo $descricao; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cGarantia">Garantia</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtGarantia" id="cGarantia" placeholder="Garantia" value="<?php echo $garantia; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cObservacao">Observação</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtObservacao" id="cObservacao" placeholder="Observação" value="<?php echo $obs; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cBarras">Id Fabricante</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtIdFabricante" id="cIdFabricante" placeholder="Id fabricante" value="<?php echo $idfabricante; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cPesoLiquido">Peso liquido</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtPesoLiquido" id="cPesoLiquido" placeholder="Peso liquido" value="<?php echo $pesoliquido; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cPesoEmbalagem">Peso Embalagem</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtPesoEmbalagem" id="cPesoEmbalagem" placeholder="Peso Embalagem" value="<?php echo $pesoembalagem; ?>">
 										</div>
 								</div>
 								<div class="text-center">
 									<input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Dados salvos com sucesso!');">
 										<a href="mostraProdutosCadastrados.php" class="btn btn-warning">Cancelar</a>
 								</div>
 						</form>
                    </div>
                </div>
        	</div>
        </div>
</div>