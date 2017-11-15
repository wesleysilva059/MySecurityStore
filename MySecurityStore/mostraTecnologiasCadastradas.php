<!-- Em desenvolvimento-->
<?php include("topo.php"); 
	  include("menuSecundario.php")
?>
<div class="container">
	<div class="text-center">
		<h3>Administrativo - Grupos de tecnologias cadastradas</h3>
		<div class="btn-group" role="group">
			<a href="cadastraTecnologias.php?idtecnologia=0" class="btn btn-primary">Cadastrar Nova tecnologia</a>
		</div>
	</div>
	<table class="table">
		<?php include("conexao.php"); 
			// Função que Retorna os registros da tabela
		function RetornaTecnologias(){
			$sql = "SELECT * FROM `tecnologias`"; // Define o comando SQL (select)
			$conexao = AbreConexao(); // Abre conexão com o BD
			$resultado = $conexao->query($sql); // Executa com comando SQL
			$conexao->close(); // Fecha a conexão com o BD
			// Verifica se a consulta retornou pelo menos um registro
			if (mysqli_num_rows($resultado) > 0){
				while($row = mysqli_fetch_array($resultado)){
					// Atribui cada registro da consulta para o vetor $pessoas[]
					$tecnologia[] = $row;
				}
				// Retorna o vetor contendo todos os registros da consulta
				return $tecnologia;

			}else{ // Se não retornou registro(s)
				return null;
			}
		}
			// Atribui os registros da tabela no vetor
			$vettecnologias = RetornaTecnologias();
			// Verifica se existe registros na tabela retornada
			if ($vettecnologias != null){
				// Existe pelo menos um registro (pessoa na tabela do BD)
				foreach ($vettecnologias as $tecnologia) {
					echo '<tr><td>'.$tecnologia['descricao'].'</td>
					     <td>'.$tecnologia['caracteristicas'].'</td>
					<a href="cadastraTecnologias.php?idtecnologia='.$tecnologia['idtecnologia'].'"class="btn btn-primary">Alterar</a>
					<a href="excluirTecnologia.php?idtecnologia='.$tecnologia['idtecnologia'].'"class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a>
					</td>
					</tr>';
				}
			}
			else{
				echo "<tr><td>
					Nenhuma tecnologia encontrado!
					  </td></tr>";
			}
		?>
	</table>
</div>
