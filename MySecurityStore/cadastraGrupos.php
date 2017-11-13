<!-- Em desenvolvimento-->
<?php

	if (!isset($_GET["idgrupo"])){
		$idgrupo = 0;
	}
	else{
		$idgrupo = $_GET["idgrupo"];
	}
	if ($idgrupo == 0){ // Novo Registro na tabela
		$descricao = "";
	}
	else{ // Alterar um Registro Existente da Tabela
		// Busca os dados do BD
		include("conexao.php");
		function RetornaGruposPorId($idgrupo){
			$sql = "SELECT * FROM grupo WHERE grupo.idgrupo = ".$idgrupo;
			$conexao = AbreConexao();//abre a conexao com o BD
			$resultado = $conexao->query($sql);
			$conexao->close();//fecha a conexão com o BD
			if(mysqli_num_rows($resultado) > 0){
			$grupo = mysqli_fetch_array($resultado);
			return $grupo;
			}else{
				return null;
			}
		}
		// Retorna o registro de uma pessoa da tabela
		$g = RetornaGruposPorId($idgrupo);
		// Verifica se retornou um registro
		if ($g!= null){
			$descricao = $g["descricao"];
		}
	}
    include("topo.php");
    include("menuSecundario.php");
?>
<div class="container theme-showcase" role="main">
        <h3 class="form-signin-heading">Cadastro de grupo de produtos</h3>      
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#produto" aria-controls="produto" role="tab" data-toggle="tab">Grupos</a></li>
            </ul>
        </div>
        <div class="formulario">
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="produto">
                    <div style="padding-top:20px;">
                     	<form action="salvarGrupo.php" method="POST">
 							<input type="hidden" name="idgrupo" value="<?php echo $idgrupo; ?>">
 								<div class="form-group row">
 									<label class="col-sm-2 col-form-label text-right" for="cDescr">Descrição</label>
 										<div class="col-sm-8">
 											<input class="form-control"  type="text" name="txtDescricao" id="cDescr" placeholder="Descrição" value="<?php echo $descricao; ?>">
 										</div>
 								</div>
 								</div>
 								<div class="form-group row">
 								<div class="text-center">
 									<input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Dados salvos com sucesso!');">
 										<a href="mostraGruposCadastrados.php" class="btn btn-warning">Cancelar</a>
 								</div>
 						</form>
                    </div>
                </div>
        	</div>
        </div>
</div>