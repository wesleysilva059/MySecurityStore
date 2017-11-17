<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	$Codigo = $_GET['Codigo'];
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';

?>
<script>
$(document).ready(function(){
$('#pvenda').mask('000.000.000.000.000,00', {reverse: true});		
$('#pcusto').mask('000.000.000.000.000,00', {reverse: true});
$('#pmedio').mask('000.000.000.000.000,00', {reverse: true});
});
</script>
<div class="container">
		<?php $consulta = $conexao->query("SELECT * FROM produtos WHERE Codigo='$Codigo'");
		$exibe = $consulta->fetch(PDO::FETCH_ASSOC) ?>
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Alteração de produto</h2>
				
				<form method="POST" action="alterarProduto.php?Codigo=<?php echo $Codigo;?>" name="alteraProd" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Codigo de barras</label>
						<input required name="txtCodBarras" value="<?php echo $exibe['codbarras']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="marca">Marca</label>
					<select class="form-control" name="txtMarca">
					  <option value="<?=($exibe['marca'] == 'Intelbras')?'selected':''?>">Intelbras</option>
					  <option value="<?=($exibe['marca'] == 'LuxVision')?'selected':''?>">LuxVision</option>
					  <option value="<?=($exibe['marca'] == 'Tecvoz')?'selected':''?>">TecVoz</option>
					   <option value="<?=($exibe['marca'] == 'Outros')?'selected':''?>">Outros</option>
					</select>
					</div>
					
					<div class="form-group">
						<label for="modelo">Modelo</label>
						<input required name="txtModelo" value="<?php echo $exibe['modelo']; ?>" type="text" class="form-control">
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
						<input required name="txtDescricao" value="<?php echo $exibe['descricao']; ?>" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="garantia">Garantia</label>
					<select class="form-control" required name="txtGarantia">
					  <option value="<?=($exibe['garantia'] == '60')?'selected':''?>">60</option>
					  <option value="<?=($exibe['garantia'] == '90')?'selected':''?>">90</option>
					  <option value="<?=($exibe['garantia'] == '120')?'selected':''?>">120</option>
					  <option value="<?=($exibe['garantia'] == '150')?'selected':''?>">150</option>
					  <option value="<?=($exibe['garantia'] == '180')?'selected':''?>">180</option>
					  <option value="<?=($exibe['garantia'] == '210')?'selected':''?>">210</option>
					  <option value="<?=($exibe['garantia'] == '240')?'selected':''?>">240</option>
					  <option value="<?=($exibe['garantia'] == '270')?'selected':''?>">270</option>
					  <option value="<?=($exibe['garantia'] == '300')?'selected':''?>">300</option>
					  <option value="<?=($exibe['garantia'] == '330')?'selected':''?>">330</option>
					  <option value="<?=($exibe['garantia'] == '365')?'selected':''?>">365</option>
					</select>
					</div>

					<div class="form-group">
					<label for="descricao">Observações</label>
						<textarea rows="5" class="form-control" value="<?php echo $exibe['obs']; ?>" required name="txtObservacoes"></textarea>
					</div>
					<?php 
       				$consulta2 = $conexao->query('SELECT * FROM `fabricantes`');
     				 ?>
					<div class="form-group">
					<label for="fabricante">ID Fabricante</label>
					<select class="form-control" required name="txtIdFabricante">
					  <option value="selecione">Selecione</option>
					<?php while ($listar2=$consulta2->fetch(PDO::FETCH_ASSOC)){?>
					<option value="<?php echo $listar2 ['idfabricante'];?>"><?php echo $listar2 ['idfabricante'];?> - <?php echo $listar2 ['descricao'];?></option>
					 <?php } ?>
					</select>
					</div>
					
					<div class="form-group">
					<label for="pesoliquido">Peso liquido</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pesoliquido']; ?>" required name="txtPesoLiquido" id="txtPesoLiquido">
					</div>
					
					<div class="form-group">
					<label for="pesobruto">Peso Bruto</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pesoembalagem']; ?>" required name="txtPesoEmbalagem" id="txtPesoEmbalagem">
					</div>

					<div class="form-group">
					<label for="precocusto">Preço de custo</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pcusto']; ?>" required name="txtPCusto" id="txtPCusto">
					</div>

					<div class="form-group">
					<label for="precomedio">Preço médio</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pmedio']; ?>" required name="txtPMedio" id="txtPMedio">
					</div>

					<div class="form-group">
					<label for="precovenda">Preço de venda</label>
					<input type="text" class="form-control" value="<?php echo $exibe['pvenda']; ?>" required name="txtPVenda" id="txtPVenda">
					</div>

					<div class="form-group">
					<label for="estoque">Estoque</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estoque']; ?>" required name="txtEstoque" id="txtEstoque">
					</div>

					<div class="form-group">
					<label for="estoquemedio">Estoque médio</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estmin']; ?>" required name="txtEstMin" id="txtEstMin">
					</div>

					<div class="form-group">
					<label for="estoqueideal">Estoque ideal</label>
					<input type="text" class="form-control" value="<?php echo $exibe['estideal']; ?>" required name="txtEstIdeal" id="txtEstIdeal">
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