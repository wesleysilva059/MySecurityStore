<!-- Em desenvolvimento-->
<?php

	if (!isset($_GET["idtecnologia"])){
		$idtecnologia = 0;
	}
	else{
		$idtecnologia = $_GET["idtecnologia"];
	}
	if ($idtecnologia == 0){ // Novo Registro na tabela
		$descricao = "";
		$caracteristicas = "";
		
	}
	else{ // Alterar um Registro Existente da Tabela
		// Busca os dados do BD
		include("conexao.php");
		function RetornaTecnologiaPorId($idtecnologia){
			$sql = "SELECT * FROM tecnologias WHERE tecnologias.idtecnologia = ".$idtecnologia;
			$conexao = AbreConexao();//abre a conexao com o BD
			$resultado = $conexao->query($sql);
			$conexao->close();//fecha a conexão com o BD
			if(mysqli_num_rows($resultado) > 0){
			$tecnologia = mysqli_fetch_array($resultado);
			return $tecnologia;
			}else{
				return null;
			}
		}
		// Retorna o registro de uma pessoa da tabela
		$t = RetornaTecnologiaPorId($idtecnologia);
		// Verifica se retornou um registro
		if ($t!= null){
			$descricao = $t["descricao"];
			$caracteristicas = $t["caracteristicas"];
		}
	}
    include("topo.php");
    include("menuSecundario.php");
?>
<div class="container theme-showcase" role="main">
        <h3 class="form-signin-heading">Cadastro Tecnologia</h3>      
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#produto" aria-controls="produto" role="tab" data-toggle="tab">Tecnologia</a></li>
                <li role="presentation"><a href="#produtopreco" aria-controls="produtopreco" role="tab" data-toggle="tab">Preco</a></li>
            </ul>
        </div>
        <div class="formulario">
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="produto">
                    <div style="padding-top:20px;">
                     	<form action="salvarTecnologia.php" method="POST">
 							<input type="hidden" name="idtecnologia" value="<?php echo $idtecnologia; ?>">
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cDescricao">Descricao</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtDescricao" id="cDescricao" placeholder="Descricao" value="<?php echo $descricao; ?>">
 										</div>
 								</div>
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cCar">Caracteristicas</label>
 										<div class="col-sm-8">
 											<input class="form-control" type="text" name="txtCaracteristicas" id="cCar" placeholder="Caracteristicas" value="<?php echo $caracteristicas; ?>">
 										</div>
 								<div class="text-center">
 									<input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Dados salvos com sucesso!');">
 										<a href="mostraTecnologiasCadastradas.php" class="btn btn-warning">Cancelar</a>
 								</div>
 						</form>
                    </div>
                </div>
        	</div>
        </div>
</div>