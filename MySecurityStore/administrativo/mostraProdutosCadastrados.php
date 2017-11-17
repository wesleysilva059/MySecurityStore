<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container ">
	<div class="text-center">
		<h3>Administrativo - Produtos cadastrados</h3>
		<div class="btn-group" role="group">
			<a href="cadastraProdutos.php?Codigo=0" class="btn btn-primary">Cadastrar Novo produto</a>
		</div>
	</div>
	<br>
	<table class="table">
		<tr>
			<td>Descrição</td>
			<td>Barras</td>
			<td>Marca</td>
			<td>Modelo</td>
			<td>Grupo</td>
			<td>Garantia</td>
			<td>Observações</td>
			<td>Fab.</td>
			<td>P. Liq.</td>
			<td>P. Brt.</td>
			<td>Data</td>
			<td>P. Cus.</td>
			<td>P. Md.</td>
			<td>P. Vd.</td>
			<td>Est.</td>
			<td>Est. Min</td>
			<td>Est. Idl</td>
			<td>Foto</td>
			<td>Edit. foto</td>
		</tr>
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaProdutos(){
			$sql = "SELECT * FROM produtos,prodprecos,prodestoque"; // Define o comando SQL (select)
			$conexao = AbreConexao(); // Abre conexão com o BD
			$resultado = $conexao->query($sql); // Executa com comando SQL
			$conexao->close(); // Fecha a conexão com o BD

			// Verifica se a consulta retornou pelo menos um registro
			if (mysqli_num_rows($resultado) > 0){
				while($row = mysqli_fetch_array($resultado)){
					// Atribui cada registro da consulta para o vetor $pessoas[]
					$produto[] = $row;
				}
				// Retorna o vetor contendo todos os registros da consulta
				return $produto;

			}else{ // Se não retornou registro(s)
				return null;
			}
		}
			// Atribui os registros da tabela no vetor
			$vetprodutos = RetornaProdutos();
			// Verifica se existe registros na tabela retornada
			if ($vetprodutos != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vetprodutos as $produto) {
					echo '<tr><td>'.$produto['descricao'].'</td>
					<td>'.$produto['codbarras'].'</td>
					<td>'.$produto['marca'].'</td>
					<td>'.$produto['modelo'].'</td>
					<td>'.$produto['grupo'].'</td>
					<td>'.$produto['garantia'].'</td>
					<td>'.$produto['obs'].'</td>
					<td>'.$produto['idfabricante'].'</td>
					<td>'.$produto['pesoliquido'].'</td>
					<td>'.$produto['pesoembalagem'].'</td>
					<td>'.$produto['data'].'</td>
					<td>'.$produto['pcusto'].'</td>
					<td>'.$produto['pmedio'].'</td>
					<td>'.$produto['pvenda'].'</td>
					<td>'.$produto['estoque'].'</td>
					<td>'.$produto['estmin'].'</td>
					<td>'.$produto['estideal'].'</td>
					<td><img class="tamanhofoto"
					src="Imagens/'.$produto['foto'].'"/></td>
					<td><a href="foto.php?Codigo='.$produto['Codigo'].'" class="btn btn sucess">foto</a>
					<td><a href="cadastraProdutos.php?Codigo='.$produto['Codigo'].'"class="btn btn-primary">Alterar</a>
					<a href="excluirProduto.php?Codigo='.$produto['Codigo'].'&foto='.$produto['foto'].'" class="btn btn-danger" 
					onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
					</td>
					</tr>';
				}
			}
			else{
				echo "<tr><td>
					Nenhum produto encontrado!
					  </td></tr>";
			}
		?>
	</table>
</div>
