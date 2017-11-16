<?php

	//Conexao com o banco, conforme aulas prof Fernando
	
	/* -- Conexão da Aulo do Fernandinho
	define("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("SENHA", "");
	define("BANCO", "bdsecurity");

	function AbreConexao(){
		$con = new mysqli(SERVIDOR,USUARIO,SENHA,BANCO);
		return $con;
	} */

	// Usando nova classe de conexão do php PDO
	
	try{
		
		//Criando objeto da classe PDO como parametro
		$conexao = new PDO('mysql:host=localhost;dbname=bdsecurity;charset=utf8','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e){
		
		echo 'Erro na conexão: '.$e->getMessage().'<br>';
		echo 'Código do Erro: '.$e->getCode();

	}
	


	
?>