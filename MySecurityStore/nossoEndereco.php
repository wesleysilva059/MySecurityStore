<?php
include("topo.php");
include("menu.php");
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center">Nossa localização</h1>
			<div class="painel">
	           			<div class="col-sm-6 text-center">
	               			<h3><i class="fa fa-map-marker"></i>&nbspEndereço</h3>
	                   		<p>Rua Aparecida Bulgari,75
	                        <br>
	                        Loteamento ACMA
	                        <br>
	                        São Sebastião do Paraiso	
	                       	<br>
	                       	Minas Gerais
	                        <br>
	                        <strong>Brasil</strong>
	                    </p>
	                    </div>
	                    <div class="col-sm-6 text-center">
                            <h3><i class="fa fa-whatsapp"></i>&nbspContatos</h3>
                                <p><span class="fa fa-whatsapp" aria-hidden="true"></span> Cláudio Maia - (35)98816-1903
                                <br><span class="fa fa-whatsapp" aria-hidden="true"></span> Higor Belini - (35)99824-0185
                                <br><span class="fa fa-whatsapp" aria-hidden="true"></span> Júnior César - (37)99904-4728
                                <br><span class="fa fa-whatsapp" aria-hidden="true"></span> Wesley Silva - (35)99975-9812</p>
	                    </div>
						<div class="text-center">
  						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7453.850894260263!2d-46.97166099999996!3d-20.915318900000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b719d26f7cbf15%3A0xb491db9dfad385ee!2sR.+Aparecida+P+B%2C+75+-+Lot.+A+C+M+A%2C+S%C3%A3o+Sebasti%C3%A3o+do+Para%C3%ADso+-+MG%2C+37950-000!5e0!3m2!1spt-BR!2sbr!4v1510662597495" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
			<h2 class="fonte_subtitulo">Dúvidas? Envie sua mensagem...</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Nome</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Sobrenome</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Assunto</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>

                                </div>
                            </div>
                        </form>
            </div>
        </div>
	</div>
</div>
<?php include("rodape.php"); ?>


