<?php 
	session_start();
	if(empty($_SESSION['adm']) || $_SESSION['adm']!=1){

		header('location:index.php');
	}
	include("topo.php");
	include("menu.php");
	include 'conexao_teste.php';
?>
<script>
$(document).ready(function(){
$('#preco').mask('000.000.000.000.000,00', {reverse: true});		
});
</script>
<div class="container">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de produto</h2>
				
				<form method="POST" action="incluiProduto.php" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="codbarras">Codigo de barras</label>
						<input required name="txtCodBarras" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="marca">Marca</label>
					<select class="form-control" name="txtMarca">
					  <option value="Intelbras">Intelbras</option>
					  <option value="LuxVision">LuxVision</option>
					  <option value="TecVoz">TecVoz</option>
					   <option value="OUTROS">Outros</option>
					</select>
					</div>
					
					<div class="form-group">
						<label for="modelo">Modelo</label>
						<input required name="txtModelo" type="text" class="form-control">
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
						<input required name="txtDescricao" type="text" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="garantia">Garantia</label>
					<select class="form-control" required name="txtGarantia">
					  <option value="dois">60</option>
					  <option value="tres">90</option>
					  <option value="quatro">120</option>
					  <option value="cinco">150</option>
					  <option value="seis">180</option>
					  <option value="sete">210</option>
					  <option value="oito">240</option>
					  <option value="nove">270</option>
					  <option value="dez">300</option>
					  <option value="onze">330</option>
					  <option value="doze">365</option>
					</select>
					</div>

					<div class="form-group">
					<label for="descricao">Observações</label>
						<textarea rows="5" class="form-control" required name="txtObservacoes"></textarea>
					</div>
					<?php 
       				$consulta2 = $conexao->query('SELECT * FROM `fabricantes`');
     				 ?>
					<div class="form-group">
					<label for="fabricante">ID Fabricante</label>
					<select class="form-control" required name="txtIdFabricante">
					  <option value="selecione">Selecione</option>
					<?php while ($listar2=$consulta2->fetch(PDO::FETCH_ASSOC)){?>
					<option value="<?php echo $listar2 ['idfabricante']; ?>"><?php echo $listar2 ['idfabricante']; ?> - <?php echo $listar2 ['descricao']; ?></option>
					 <?php } ?>
					</select>
					</div>
					
					<div class="form-group">
					<label for="pesoliquido">Peso liquido</label>
					<input type="text" class="form-control" required name="txtPesoLiquido" id="txtPesoLiquido">
					</div>
					
					<div class="form-group">
					<label for="pesobruto">Peso Bruto</label>
					<input type="text" class="form-control" required name="txtPesoEmbalagem" id="txtPesoEmbalagem">
					</div>

					<div class="form-group">
					<label for="precocusto">Preço de custo</label>
					<input type="text" class="form-control" required name="txtPCusto" id="txtPCusto">
					</div>

					<div class="form-group">
					<label for="precomedio">Preço médio</label>
					<input type="text" class="form-control" required name="txtPMedio" id="txtPMedio">
					</div>

					<div class="form-group">
					<label for="precovenda">Preço de venda</label>
					<input type="text" class="form-control" required name="txtPVenda" id="txtPVenda">
					</div>

					<div class="form-group">
					<label for="estoque">Estoque</label>
					<input type="text" class="form-control" required name="txtEstoque" id="txtEstoque">
					</div>

					<div class="form-group">
					<label for="estoquemedio">Estoque médio</label>
					<input type="text" class="form-control" required name="txtEstMin" id="txtEstMin">
					</div>

					<div class="form-group">
					<label for="estoqueideal">Estoque ideal</label>
					<input type="text" class="form-control" required name="txtEstIdeal" id="txtEstIdeal">
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
					<label for="foto1">Foto Principal</label>
					<input type="file" accept="Imagens/*" class="form-control" required name="foto" id="foto">
					</div>
					
					<div class="form-group">
					<label for="foto2">Foto 2</label>
					<input type="file" accept="Imagens/*" class="form-control" required name="foto2" id="foto2">
					</div>
					
					<div class="form-group">
					<label for="foto3">Foto 3</label>
					<input type="file" accept="Imagens/*" class="form-control" required name="foto3" id="foto3">
					</div>
					
							
				<button type="submit" class="btn btn-lg btn-primary">
					<span class="glyphicon glyphicon-pencil"></span> Cadastrar
				</button>
				</form>
				
			</div>
		</div>
	</div>
<?php include ("rodape.php");?>