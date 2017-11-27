<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$Codigo = $_GET['Codigo'];
	include("topo.php");
	include("menu.php");
	include 'conexao.php';

?>
<script>
$(document).ready(function(){
$('#pvenda').mask('000.000.000.000.000,00', {reverse: true});		
$('#pcusto').mask('000.000.000.000.000,00', {reverse: true});
$('#pmedio').mask('000.000.000.000.000,00', {reverse: true});
});
</script>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM produtos,prodprecos,prodtecnologia,prodestoque WHERE prodprecos.idproduto = produtos.Codigo AND prodtecnologia.codproduto = produtos.Codigo AND prodestoque.idproduto = produtos.Codigo AND produtos.Codigo = '$Codigo'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de produto</h2>
				
				<form method="POST" action="alterarProduto.php?Codigo=<?php echo $Codigo;?>" name="alteraProd" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Codigo de barras</label>
						<input name="txtCodBarras" value="<?php echo $exibe['codbarras']; ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
					<label for="marca">Marca</label>
					<select class="form-control" name="txtMarca">
					  <option value="Intelbras">Intelbras</option>
					  <option value="LuxVision">LuxVision</option>
					  <option value="TecVoz">TecVoz</option>
					   <option value="Outros">OUTROS</option>
					</select>
					</div>
					
					<div class="form-group">
						<label for="modelo">Modelo</label>
						<input name="txtModelo" value="<?php echo $exibe['modelo']; ?>" type="text" class="form-control">
					</div>
					<?php 
       				$consulta1 = $conexao->query('SELECT * FROM `grupo`');
     				 ?>
					<div class="form-group">
					<label for="grupo">Grupo</label>
					<select class="form-control" required name="txtGrupo">
					  <option value="selecione">Selecione</option>
					 <?php 
        			while ($listar1=$consulta1->fetch(PDO::FETCH_ASSOC)){
      				?>
					  <option value="<?php echo $listar1['idgrupo'];?>"><?php echo $listar1['idgrupo'];?> - <?php echo $listar1 ['descrigrupo']; ?></option>
					<?php } ?>
					</select>
					</div>
					
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input name="txtDescricao" value="<?php echo $exibe['descricao']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="garantia">Garantia</label>
					<select class="form-control" required name="txtGarantia">
					  <option value="60">60</option>
					  <option value="90">90</option>
					  <option value="120">120</option>
					  <option value="150">150</option>
					  <option value="180">180</option>
					  <option value="210">210</option>
					  <option value="240">240</option>
					  <option value="270">270</option>
					  <option value="300">300</option>
					  <option value="330">330</option>
					  <option value="365">365</option>
					</select>
					</div>

					<div class="form-group">
					<label for="descricao">Observações</label>
						<textarea rows="5" class="form-control" value="<?php echo $exibe['obs']; ?>" name="txtObservacoes"></textarea>
					</div>
					<?php 
       				$consulta2 = $conexao->query('SELECT * FROM `fabricantes`');
     				 ?>
					<div class="form-group">
					<label for="fabricante">ID Fabricante</label>
					<select class="form-control" name="txtIdFabricante">
					  <option value="selecione">Selecione</option>
					<?php while ($listar2=$consulta2->fetch(PDO::FETCH_ASSOC)){?>
					<option value="<?php echo $listar2 ['idfabricante'];?>"><?php echo $listar2 ['idfabricante'];?> - <?php echo $listar2 ['descricao'];?></option>
					 <?php } ?>
					</select>
					</div>
					
					<div class="form-group">
					<label for="pesoliquido">Peso liquido</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pesoliquido']; ?>" name="txtPesoLiquido" id="txtPesoLiquido">
					</div>
					
					<div class="form-group">
					<label for="pesobruto">Peso Bruto</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pesoembalagem']; ?>" name="txtPesoEmbalagem" id="txtPesoEmbalagem">
					</div>

					<div class="form-group">
					<label for="precocusto">Preço de custo</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pcusto']; ?>" name="txtPCusto" id="txtPCusto">
					</div>

					<div class="form-group">
					<label for="precomedio">Preço médio</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pmedio']; ?>" name="txtPMedio" id="txtPMedio">
					</div>

					<div class="form-group">
					<label for="precovenda">Preço de venda</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pvenda']; ?>" name="txtPVenda" id="txtPVenda">
					</div>

					<div class="form-group">
					<label for="estoque">Estoque</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estoque']; ?>" name="txtEstoque" id="txtEstoque">
					</div>

					<div class="form-group">
					<label for="estoquemedio">Estoque médio</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estmin']; ?>" name="txtEstMin" id="txtEstMin">
					</div>

					<div class="form-group">
					<label for="estoqueideal">Estoque ideal</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estideal']; ?>" name="txtEstIdeal" id="txtEstIdeal">
					</div>
					<?php 
       				$consulta3 = $conexao->query('SELECT * FROM `tecnologias`');
     				 ?>
					<div class="form-group">
					<label for="codigotecnologia"> Código tecnologia</label>
					<select class="form-control" name="txtCodTecnologia">
					  <option value="selecione">Selecione</option>
					  <?php while ($listar3=$consulta3->fetch(PDO::FETCH_ASSOC)){?>
					  <option value="<?php echo $listar3 ['idtecnologia']; ?>"><?php echo $listar3 ['idtecnologia']; ?> - <?php echo $listar3 ['descritec']; ?></option>
					 <?php } ?>
					</select>
					</div>
					
					
					<div class="form-group">
					<label for="foto">Foto 1</label>
					<input type="file" accept="Imagens/*" class="form-control" name="foto" id="foto">
					</div>
					<div class="form-group">	
					<img src="Imagens/<?php echo $exibe['foto']; ?>" name="foto" width="100px" >	
					</div>
					
					<div class="form-group">
					<label for="foto2">Foto 2</label>
					<input type="file" accept="Imagens/*" class="form-control" name="foto2" id="foto2">
					</div>
					<div class="form-group">	
					<img src="Imagens/<?php echo $exibe['foto2']; ?>" name="foto2" width="100px" >	
					</div>
					
					<div class="form-group">
					<label for="foto3">Foto 3</label>
					<input type="file" accept="Imagens/*" class="form-control" name="foto3" id="foto3">
					</div>
					<div class="form-group">	
					<img src="Imagens/<?php echo $exibe['foto3']; ?>" name="foto3" width="100px" >	
					</div>
					
							
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>