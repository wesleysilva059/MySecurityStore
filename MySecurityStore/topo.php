<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/tour.css">
   	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/jqueryeasing.1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-sticky.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script src="js/tour.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/font-awesome.js"></script>
	<link href="css/lightbox.css" rel="stylesheet">
	<script src="js/lightbox.js"></script>
	<title>My Security Store - A loja de segurança perfeita para você</title>
	</head>

<body>
<?php include("conexao.php"); ?>
<nav class="navbar navbar-inverse  navbar-expand-lg navbar-fixed-top">
  <div class="container-fluid">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">                    
        <span class="sr-only">Navegação Responsiva</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                
     </button>                
  	<div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
           	<div class="navbar-header">
                <a class="dropdown navbar-brand" data-toggle="dropdown" href="dropdown-menu"><span class="fa fa-whatsapp" aria-hidden="true"></span> Contatos<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="fa fa-whatsapp" aria-hidden="true"></span> Cláudio Maia - (35)98816-1903</a></li>
                    <li><a href="#"><span class="fa fa-whatsapp" aria-hidden="true"></span> Higor Belini - (35)99824-0185</a></li>
                    <li><a href="#"><span class="fa fa-whatsapp" aria-hidden="true"></span> Júnior César - (37)99904-4728</a></li>
                    <li><a href="#"><span class="fa fa-whatsapp" aria-hidden="true"></span> Wesley Silva - (35)99975-9812</a></li>
                </ul>
            </div>
            <div class="navbar-header">
            	<a class="navbar-brand"><span class="fa fa-phone" aria-hidden="true"></span> Televendas - (35)3531-7961</a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="nossoEndereco.php"><span class="fa fa-map-marker" aria-hidden="true"></span> Nosso endereço</a>
            </div> 
        </ul>
		<?php
	  		if (empty($_SESSION['id'])) {
	  	?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Entrar</a></li>
					  <li><a href="formCadastroUsuario.php"><span class="glyphicon glyphicon-log-in"></span>  Cadastre-se</a></li>
	  			</ul>
				<?php } else { 
						
					if($_SESSION['adm']==0){	
						if($_SESSION['tipousuario']==1){
							$consulta_user = $conexao->query("SELECT nome FROM pfisicadados WHERE idpfisica = '$_SESSION[id]'");
							$exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
				?>
							<ul class="nav navbar-nav navbar-right">	
								<li><a href="areausuario.php"><span class="glyphicon glyphicon-user"></span>  <?php echo $exibe_user['nome'];?></a></li>
								<li><a href="sair.php"><span class="glyphicon glyphicon-off"></span>  Sair</a></li>
							</ul>
							<?php } else {
							$consulta_user = $conexao->query("SELECT razaosocial FROM pjuridicadados WHERE idpjuridica = '$_SESSION[id]'");
							$exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
							?>
						<ul class="nav navbar-nav navbar-right">	
							<li><a href="areausuario.php"><span class="glyphicon glyphicon-user"></span>  <?php echo $exibe_user['razaosocial'];?></a></li>
							<li><a href="sair.php"><span class="glyphicon glyphicon-off"></span>  Sair</a></li>
						</ul>
						<?php	} ?>

			<li><a href="formCadastroUsuario.php"><span class="glyphicon glyphicon-log-in"></span>  Cadastre-se</a></li>
	  	</ul>
		<?php } else { 	
			if($_SESSION['adm']==0){	
				if($_SESSION['tipousuario']==1){
					$consulta_user = $conexao->query("SELECT nome FROM pfisicadados WHERE idpfisica = '$_SESSION[id]'");
					$exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
		?>
		<ul class="nav navbar-nav navbar-right">	
			<li><a href="areausuario.php"><span class="glyphicon glyphicon-user"></span>  <?php echo $exibe_user['nome'];?></a></li>
			<li><a href="sair.php"><span class="glyphicon glyphicon-off"></span>  Sair</a></li>
		</ul>
		<?php } else {
			$consulta_user = $conexao->query("SELECT razaosocial FROM pjuridicadados WHERE idpjuridica = '$_SESSION[id]'");
			$exibe_user = $consulta_user->fetch(PDO::FETCH_ASSOC);
		?>
		<ul class="nav navbar-nav navbar-right">	
			<li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $exibe_user['razaosocial'];?></a></li>
			<li><a href="sair.php"><span class="glyphicon glyphicon-off"></span>  Sair</a></li>
		</ul>
		<?php	}
					}
		else { ?>
		<ul class="nav navbar-nav navbar-right">	
			<li><a href="admIndex.php"><button class="btn btn-sm btn-danger">  Adm</button></a></li>
			<li><a href="sair.php"><span class="glyphicon glyphicon-off"></span>  Sair</a></li>
		</ul>
		<?php
	}

				}
			}
		?>    
  	</div>
</nav>
<div class="container container-inicio">
    <div class="row">
    	<div class="topo">
      		<div class="busca">
        		<a href="index.php"><img src="Imagens/logo.png" class="tam_img"></a>
        		<form method="GET" action="busca.php" class="entrada">
          			<input type="text" name="txtBusca" placeholder="O que você deseja buscar?">
         			<button class="btn btn-danger btn-lg" name="btnBuscar" value=""><span class="glyphicon glyphicon-search"></span>
        			</button>
        		</form>
      		</div>
       		<div class="col-sm-push-8">
            	<div>
                	<div class="text-center nav navbar-nav">
                    	<li><a href="carrinhoCompras.php"><img src="Imagens/shoppingcart.png"><span class="badge" id="txtqtecarrinho">
                    	<?php include('mostraCarrinho.php');?></span></a></li>
                	</div>
            	</div> 
        	</div>
    	</div>    
    </div>
</div>