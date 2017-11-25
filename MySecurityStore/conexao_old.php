<?php

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