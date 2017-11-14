<?php
include("conexao.php");
$Codigo = $_POST["Codigo"];
$fotoAtual = $_POST["fotoAtual"];
$novaFoto = $_FILES["foto"]["name"]; // pega o nome da imagem
if($novaFoto != null) {
if (file_exists('"Imagens/"'.$fotoAtual)) {
unlink('"Imagens/"'.$fotoAtual); // Exclui a foto atual da pasta
}
move_uploaded_file($_FILES["foto"]["tmp_name"], "Imagens/".
$novaFoto); // move o arquivo (imagem) para a pasta de destino
function AlteraFoto($foto, $Codigo){
		//define o comando SQL (update)
		$sql = "UPDATE produtos SET foto = '".$foto."' WHERE Codigo = ".$Codigo;
		//abre a conexão com o BD
		$conexao = AbreConexao();
		//executa o comando SQL
		$conexao->query($sql);
		//fecha a conexao com o BD
		$conexao->close();
	}
AlteraFoto($novaFoto, $Codigo); // Atualiza Foto no BD
}
// Redireciona para a página de lista de pessoas
header("location:mostraProdutosCadastrados.php");
?>