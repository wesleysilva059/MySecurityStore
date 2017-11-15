<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Fabricantes cadastrados</h3>
		<div class="btn-group" role="group">
			<a href="cadastraFabricantes.php?idfabricante=0" class="btn btn-primary">Cadastrar Novo Fabricante</a>
		</div>
	</div>
	<table class="table">
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaFabricantes(){
			$sql = "SELECT * FROM `fabricantes`"; // Define o comando SQL (select)
			$conexao = AbreConexao(); // Abre conexão com o BD
			$resultado = $conexao->query($sql); // Executa com comando SQL
			$conexao->close(); // Fecha a conexão com o BD
			// Verifica se a consulta retornou pelo menos um registro
			if (mysqli_num_rows($resultado) > 0){
				while($row = mysqli_fetch_array($resultado)){
					// Atribui cada registro da consulta para o vetor $pessoas[]
					$fabricante[] = $row;
				}
				// Retorna o vetor contendo todos os registros da consulta
				return $fabricante;

			}else{ // Se não retornou registro(s)
				return null;
			}
		}
			// Atribui os registros da tabela no vetor
			$vetfabricantes = RetornaFabricantes();
			// Verifica se existe registros na tabela retornada
			if ($vetfabricantes != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vetfabricantes as $fabricante) {
					echo '<tr><td>'.$fabricante['descricao'].'</td>
					<td>'.$fabricante['origem'].'</td>
					<a href="cadastraFabricantes.php?idfabricante='.$fabricante['idfabricante'].'"class="btn btn-primary">Alterar</a>
					<a href="excluirFabricante.php?idfabricante='.$fabricante['idfabricante'].'"class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
					</td>
					</tr>';
				}
			}
			else{
				echo "<tr><td>
					Nenhum fabricante encontrado!
					  </td></tr>";
			}
		?>
	</table>
</div>
