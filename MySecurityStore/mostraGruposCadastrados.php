<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Grupos de produtos cadastrados</h3>
		<div class="btn-group" role="group">
			<a href="cadastraGrupos.php?idgrupo=0" class="btn btn-primary">Cadastrar Novo Grupo de produtos</a>
		</div>
	</div>
	<table class="table">
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaGrupos(){
			$sql = "SELECT * FROM `grupo`"; // Define o comando SQL (select)
			$conexao = AbreConexao(); // Abre conexão com o BD
			$resultado = $conexao->query($sql); // Executa com comando SQL
			$conexao->close(); // Fecha a conexão com o BD
			// Verifica se a consulta retornou pelo menos um registro
			if (mysqli_num_rows($resultado) > 0){
				while($row = mysqli_fetch_array($resultado)){
					// Atribui cada registro da consulta para o vetor $pessoas[]
					$grupo[] = $row;
				}
				// Retorna o vetor contendo todos os registros da consulta
				return $grupo;

			}else{ // Se não retornou registro(s)
				return null;
			}
		}
			// Atribui os registros da tabela no vetor
			$vetgrupos = RetornaGrupos();
			// Verifica se existe registros na tabela retornada
			if ($vetgrupos != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vetgrupos as $grupo) {
					echo '<tr><td>'.$grupo['descricao'].'</td>
					<a href="cadastraGrupos.php?idgrupo='.$grupo['idgrupo'].'"class="btn btn-primary">Alterar</a>
					<a href="excluirGrupo.php?idgrupo='.$grupo['idgrupo'].'"class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
					</td>
					</tr>';
				}
			}
			else{
				echo "<tr><td>
					Nenhum grupo encontrado!
					  </td></tr>";
			}
		?>
	</table>
</div>
