<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Produtos cadastrados</h3>
		<div class="btn-group" role="group">
			<a href="cadastraProdutos.php?Codigo=0" class="btn btn-primary">Cadastrar Novo produto</a>
		</div>
	</div>
	<table class="table">
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaProdutos(){
			$sql = "SELECT * FROM produtos"; // Define o comando SQL (select)
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
					<td><img class="tamanhofoto"
					src="fotos/'.$produto['foto'].'"/></td>
					<td><a href="foto.php?id='.$produto['Codigo'].'" class="btn btn sucess">foto</a>
					<td><a href="formpessoa.php?id='.$produto['Codigo'].'"class="btn btn-primary">Alterar</a>
					<a href="excluir.php?id='.$produto['Codigo'].'&foto='.$produto['foto'].'" class="btn btn-danger" 
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
<?php include("rodape.php"); ?>