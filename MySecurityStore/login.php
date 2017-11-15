<?php
	include("topo.php");
	include("menuSecundario.php");
?>

<div class="login_tela">
  <form class="form-signin" method="POST" action="validaUsuario.php" name="login">
    <h3 class="form-signin-heading">Faça seu login</h3>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu email" required="" autofocus="">
    </div><br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Digite sua senha" required="">
    </div><br/>
    <label>
      <input value="Lembre-me" type="checkbox">Lembre-me
    </label><br/>
    <a href="formCadastroUsuario.php" style="float:right;">Não tenho cadastro</a><br/><br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>
</div>

<?
include("rodape.php");
?>