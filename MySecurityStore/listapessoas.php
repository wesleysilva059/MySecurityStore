<?php include("topo.php"); ?>
<div class="container">
	<div class="text-center">
		<h3>Exemplo de Conexão com o BD - Lista Pessoas</h3>
		<div class="btn-group" role="group">
			<a href="formpessoa.php?id=0" class="btn btn-primary">Cadastrar Nova Pessoa</a>
		</div>
	</div>
	<table class="table">
		<?php include("conecta.php"); 
		// Função que Retorna os registros da tabela
	function RetornaPessoas(){
		$sql = "SELECT * FROM tblpessoa ORDER BY nome"; // Define o comando SQL (select)
		$conexao = AbreConexao(); // Abre conexão com o BD
		$resultado = $conexao->query($sql); // Executa com comando SQL
		$conexao->close(); // Fecha a conexão com o BD

		// Verifica se a consulta retornou pelo menos um registro
		if (mysqli_num_rows($resultado) > 0){
			while($row = mysqli_fetch_array($resultado)){
				// Atribui cada registro da consulta para o vetor $pessoas[]
				$pessoas[] = $row;
			}
			// Retorna o vetor contendo todos os registros da consulta
			return $pessoas;

		}else{ // Se não retornou registro(s)
			return null;
		}
	}
			// Atribui os registros da tabela no vetor
			$vetpessoas = RetornaPessoas();
			// Verifica se existe registros na tabela retornada
			if ($vetpessoas != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vetpessoas as $pessoa) {
				echo '<tr>
					<td>'.$pessoa['nome'].'</td>
					<td>'.$pessoa['telefone'].'</td>
					<td>'.$pessoa['email'].'</td>
					<td> <a href="formpessoa.php?id='.$pessoa['idpessoa'].'" class="btn btn-primary">Alterar</a>
					<a href="excluir.php?id='.$pessoa['idpessoa'].'" class="btn btn-danger" 
					onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
					</td>
					</tr>';
				}
			}
			else{
				echo "<tr><td>
					Nenhuma pessoa encontrada!
					  </td></tr>";
			}
		?>
	</table>
</div>
<?php include("rodape.php"); ?>