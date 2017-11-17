<?php include("topo.php"); 
	  include("menuSecundario.php")
	  

?>

<div class="container">
	<div class="text-center">
		<h3>Administrativo - Alterar Imagem</h3>
	</div>
	<div class="painel">
		<form action="salvarfoto.php" method="POST" enctype="multipart/form-data">
		<?php
		$Codigo = $_GET["Codigo"];
		include("conexao.php");
		function RetornaProdutoPorId($Codigo){
			$sql = "SELECT * FROM produtos,prodprecos,prodtecnologia,prodestoque,fabricantes,fornecedor WHERE produtos.Codigo = ".$Codigo;
			$conexao = AbreConexao();//abre a conexao com o BD
			$resultado = $conexao->query($sql);
			$conexao->close();//fecha a conexão com o BD
			if(mysqli_num_rows($resultado) > 0){
			$produto = mysqli_fetch_array($resultado);
			return $produto;
			}else{
				return null;
			}
		}	
		$p = RetornaProdutoPorId($Codigo);
		if ($p != null){
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
			$foto = $p["foto"];
		}
		?>
		<input type="hidden" name="Codigo" value="<?php echo $Codigo; ?>">
		<input type="hidden" name="fotoAtual" value="<?php echo $fotoAtual; ?>">
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Codigo de barras:</label>
			<label class="col-form-label"><?php echo $codbarras; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Marca:</label>
			<label class="col-form-label"><?php echo $marca; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Modelo:</label>
			<label class="col-form-label"><?php echo $modelo; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Grupo:</label>
			<label class="col-form-label"><?php echo $grupo; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Descrição:</label>
			<label class="col-form-label"><?php echo $descricao; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Garantia:</label>
			<label class="col-form-label"><?php echo $garantia; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Observação:</label>
			<label class="col-form-label"><?php echo $obs; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">ID Fabricante:</label>
			<label class="col-form-label"><?php echo $idfabricante; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Peso liquido:</label>
			<label class="col-form-label"><?php echo $pesoliquido; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Peso embalagem:</label>
			<label class="col-form-label"><?php echo $pesoembalagem; ?></label>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Foto Atual:</label>
			<img src="fotos/<?php echo $fotoAtual; ?>">
		</div>
</div> 
<div class="form-group row">
	<label class="col-sm-4 col-form-label text-right">Nova Foto:
	</label>
	<div class="col-sm-6">
		<input type="file" name="foto" class="form-control">
	</div>
</div>
<br>
<div class="text-center">
	<input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Foto alterada com sucesso!');">
	<a href="mostraProdutosCadastrados.php" class="btn btn-warning">Cancelar</a>
</div>
</form>
</div>
</div>
<?php include("rodape.php");?>