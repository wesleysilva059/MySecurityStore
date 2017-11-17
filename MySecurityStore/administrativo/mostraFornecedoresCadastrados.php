<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Fornecedores cadastrados</h3>
		<div class="btn-group" role="group">
			<a href="cadastraFornecedores.php?idfornecedor=0" class="btn btn-primary">Cadastrar Novo Fornecedor</a>
		</div>
	</div>
	<table class="table">
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaFornecedores(){
			$sql = "SELECT * FROM `fornecedor`"; // Define o comando SQL (select)
			$conexao = AbreConexao(); // Abre conexão com o BD
			$resultado = $conexao->query($sql); // Executa com comando SQL
			$conexao->close(); // Fecha a conexão com o BD
			// Verifica se a consulta retornou pelo menos um registro
			if (mysqli_num_rows($resultado) > 0){
				while($row = mysqli_fetch_array($resultado)){
					// Atribui cada registro da consulta para o vetor $pessoas[]
					$fornecedor[] = $row;
				}
				// Retorna o vetor contendo todos os registros da consulta
				return $fornecedor;

			}else{ // Se não retornou registro(s)
				return null;
			}
		}
			// Atribui os registros da tabela no vetor
			$vetfornecedores = RetornaFornecedores();
			// Verifica se existe registros na tabela retornada
			if ($vetfornecedores != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vetfornecedores as $fornecedor) {
					echo '<tr><td>'.$fornecedor['razaosocial'].'</td>
					<td>'.$fornecedor['nomefantasia'].'</td>
					<td>'.$fornecedor['cnpj'].'</td>
					<td>'.$fornecedor['inscest'].'</td>
					<td>'.$fornecedor['idendereco'].'</td>
					<a href="cadastraFornecedores.php?idfornecedor='.$fornecedor['idfornecedor'].'"class="btn btn-primary">Alterar</a>
					<a href="excluirFornecedor.php?idfornecedor='.$fornecedor['idfornecedor'].'"class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
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
