<?php
	/* -- Verificar estrutura
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "celke";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	*/

	//Conexao com o banco, conforme aulas prof Fernando
	define("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("SENHA", "");
	define("BANCO", "bdsecurity");

	function AbreConexao(){
		$con = new mysqli(SERVIDOR,USUARIO,SENHA,BANCO);
		return $con;
	}

?>