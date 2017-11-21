<?php
    include("topo.php");
    include("menu.php");
?>
<div class="cadastro_tela">
    <div class="container theme-showcase" role="main">
        <h3 class="form-signin-heading">Cadastro</h3>      
        <div class="row espaco">
            <div class="pull-left">
                <a href="destroi_sessao.php"><button type='button' class='btn btn-sm btn-success'>Novo Usuário</button></a>
            </div>
        </div><br/>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#pessoa_fisica" aria-controls="pessoa_fisica" role="tab" data-toggle="tab">Pessoa Física</a></li>
                <li role="presentation"><a href="#pessoa_juridica" aria-controls="pessoa_juridica" role="tab" data-toggle="tab">Pessoa Jurídica</a></li>
            </ul>
            <div class="formulario">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="pessoa_fisica">
                        <div style="padding-top:20px;">
                            <form action="cadastroUsuariopf.php" method="POST" id="validate">  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Nome</label>
                                    <div class="col-sm-8">
                                        <input type="text" name='nome' class="form-control" id="nome" placeholder="Digite seu nome completo" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Sexo</label>
                                    <div class="col-sm-8">
                                        <select name="sexo" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Data de Nascimento</label>
                                    <div class="col-sm-8">
                                        <input name="dtnasc" type="text" class="form-control" id="data" placeholder="Data de nascimento" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* CPF</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite seu CPF" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* RG</label>
                                    <div class="col-sm-8">
                                        <input name="rg_nro" type="text" class="form-control" placeholder="Digite o número de seu documento">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Órgão Emissor</label>
                                    <div class="col-sm-8">
                                        <select name="rg_emissao" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="SSP">SSP - Secretaria de Segurança Pública</option>
                                            <option value="COREN">COREN - Conselho Regional de Enfermagem</option>
                                            <option value="CRA">CRA - Conselho Regional de Administração</option>
                                            <option value="CRAS">CRAS - Conselho Regional de Assistentes Sociais</option>
                                            <option value="CRB">CRB - Conselho Regional de Biblioteconomia</option>
                                            <option value="CRC">CRC - Conselho Regional de Contabilidade</option>
                                            <option value="CRE">CRE - Conselho Regional de Estatística</option>
                                            <option value="CREA">CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
                                            <option value="CRECI">CRECI - Conselho Regional de Corretores de Imóveis</option>
                                            <option value="CREFIT">CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                            <option value="CRF">CRF - Conselho Regional de Farmácia</option>
                                            <option value="CRM">CRM - Conselho Regional de Medicina</option>
                                            <option value="CRN">CRN - Conselho Regional de Nutrição</option>
                                            <option value="CRO">CRO - Conselho Regional de Odontologia</option>
                                            <option value="CRP">CRP - Conselho Regional de Psicologia</option>
                                            <option value="CRPRE">CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
                                            <option value="CRQ">CRQ - Conselho Regional de Química</option>
                                            <option value="CRRC">CRRC - Conselho Regional de Representantes Comerciais</option>
                                            <option value="CRMV">CRMV - Conselho Regional de Medicina Veterinária</option>
                                            <option value="DPF">DPF - Polícia Federal</option>
                                            <option value="EST">EST - Documentos Estrangeiros</option>
                                            <option value="I CLA">I CLA - Carteira de Identidade Classista</option>
                                            <option value="MAE">MAE - Ministério da Aeronáutica</option>
                                            <option value="MEX">MEX - Ministério do Exército</option>
                                            <option value="MMA">MMA - Ministério da Marinha</option>
                                            <option value="OAB">OAB - Ordem dos Advogados do Brasil</option>
                                            <option value="OMB">OMB - Ordens dos Músicos do Brasil</option>
                                            <option value="IFP">IFP - Instituto de Identificação Félix Pacheco</option>
                                            <option value="OUT">OUT - Outros Emissores</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* E-mail</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control" placeholder="Digite seu email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Telefone</label>
                                    <div class="col-sm-8">
                                        <input name="telefone" type="text" class="form-control" placeholder="Digite o número de seu telefone" id="telefone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Celular</label>
                                    <div class="col-sm-8">
                                        <input name="celular" type="text" class="form-control" placeholder="Digite o número de seu celular" id="celular">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* CEP</label>
                                    <div class="col-sm-8">
                                        <input name="cep" type="text" class="form-control" placeholder="Digite seu CEP" id="cep">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Endereço</label>
                                    <div class="col-sm-8">
                                        <input name="endereco" type="text" class="form-control" placeholder="Digite seu endereço">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Número</label>
                                    <div class="col-sm-8">
                                        <input name="nro_endereco" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Complemento</label>
                                    <div class="col-sm-8">
                                        <input name="complemento_end" type="text" class="form-control" placeholder="Digite o complemento">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Referência</label>
                                    <div class="col-sm-8">
                                        <input name="referencia_end" type="text" class="form-control" placeholder="Digite a referência">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Bairro</label>
                                    <div class="col-sm-8">
                                        <input name="bairro" type="text" class="form-control" placeholder="Digite o nome de seu bairro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Cidade</label>
                                    <div class="col-sm-8">
                                        <input name="cidade" type="text" class="form-control" placeholder="Digite o nome da sua cidade">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Estado</label>
                                    <div class="col-sm-8">
                                        <select name="estado" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="Exterior">Estado no Exterior</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espirito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* País</label>
                                    <div class="col-sm-8">
                                        <select name="pais" class="form-control">
                                            <option value="África do Sul">África do Sul</option>
                                            <option value="Albânia">Albânia</option>
                                            <option value="Alemanha">Alemanha</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua">Antigua</option>
                                            <option value="Arábia Saudita">Arábia Saudita</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armênia">Armênia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Austrália">Austrália</option>
                                            <option value="Áustria">Áustria</option>
                                            <option value="Azerbaijão">Azerbaijão</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrein">Bahrein</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Bélgica">Bélgica</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermudas">Bermudas</option>
                                            <option value="Botsuana">Botsuana</option>
                                            <option value="Brasil" selected>Brasil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgária">Bulgária</option>
                                            <option value="Burkina Fasso">Burkina Fasso</option>
                                            <option value="botão">botão</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Camarões">Camarões</option>
                                            <option value="Camboja">Camboja</option>
                                            <option value="Canadá">Canadá</option>
                                            <option value="Cazaquistão">Cazaquistão</option>
                                            <option value="Chade">Chade</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                            <option value="Colômbia">Colômbia</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Coréia do Sul">Coréia do Sul</option>
                                            <option value="Costa do Marfim">Costa do Marfim</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croácia">Croácia</option>
                                            <option value="Dinamarca">Dinamarca</option>
                                            <option value="Djibuti">Djibuti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="EUA">EUA</option>
                                            <option value="Egito">Egito</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Emirados Árabes">Emirados Árabes</option>
                                            <option value="Equador">Equador</option>
                                            <option value="Eritréia">Eritréia</option>
                                            <option value="Escócia">Escócia</option>
                                            <option value="Eslováquia">Eslováquia</option>
                                            <option value="Eslovênia">Eslovênia</option>
                                            <option value="Espanha">Espanha</option>
                                            <option value="Estônia">Estônia</option>
                                            <option value="Etiópia">Etiópia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Filipinas">Filipinas</option>
                                            <option value="Finlândia">Finlândia</option>
                                            <option value="França">França</option>
                                            <option value="Gabão">Gabão</option>
                                            <option value="Gâmbia">Gâmbia</option>
                                            <option value="Gana">Gana</option>
                                            <option value="Geórgia">Geórgia</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Grécia">Grécia</option>
                                            <option value="Guadalupe">Guadalupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guiana">Guiana</option>
                                            <option value="Guiana Francesa">Guiana Francesa</option>
                                            <option value="Guiné-bissau">Guiné-bissau</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Holanda">Holanda</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungria">Hungria</option>
                                            <option value="Iêmen">Iêmen</option>
                                            <option value="Ilhas Cayman">Ilhas Cayman</option>
                                            <option value="Ilhas Cook">Ilhas Cook</option>
                                            <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                                            <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                            <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                            <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                            <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                            <option value="Índia">Índia</option>
                                            <option value="Indonésia">Indonésia</option>
                                            <option value="Inglaterra">Inglaterra</option>
                                            <option value="Irlanda">Irlanda</option>
                                            <option value="Islândia">Islândia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Itália">Itália</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japão">Japão</option>
                                            <option value="Jordânia">Jordânia</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Líbano">Líbano</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lituânia">Lituânia</option>
                                            <option value="Luxemburgo">Luxemburgo</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedônia">Macedônia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malásia">Malásia</option>
                                            <option value="Malaui">Malaui</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marrocos">Marrocos</option>
                                            <option value="Martinica">Martinica</option>
                                            <option value="Mauritânia">Mauritânia</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="México">México</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Mônaco">Mônaco</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Nicarágua">Nicarágua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigéria">Nigéria</option>
                                            <option value="Noruega">Noruega</option>
                                            <option value="Nova Caledônia">Nova Caledônia</option>
                                            <option value="Nova Zelândia">Nova Zelândia</option>
                                            <option value="Omã">Omã</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panamá">Panamá</option>
                                            <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                            <option value="Paquistão">Paquistão</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Polinésia Francesa">Polinésia Francesa</option>
                                            <option value="Polônia">Polônia</option>
                                            <option value="Porto Rico">Porto Rico</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Quênia">Quênia</option>
                                            <option value="Rep. Dominicana">Rep. Dominicana</option>
                                            <option value="Rep. Tcheca">Rep. Tcheca</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romênia">Romênia</option>
                                            <option value="Ruanda">Ruanda</option>
                                            <option value="Rússia">Rússia</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa Americana">Samoa Americana</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serra Leone">Serra Leone</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Singapura">Singapura</option>
                                            <option value="Síria">Síria</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                            <option value="St. Lúcia">St. Lúcia</option>
                                            <option value="St. Vincent">St. Vincent</option>
                                            <option value="Sudão">Sudão</option>
                                            <option value="Suécia">Suécia</option>
                                            <option value="Suiça">Suiça</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Tailândia">Tailândia</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tanzânia">Tanzânia</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunísia">Tunísia</option>
                                            <option value="Turquia">Turquia</option>
                                            <option value="Ucrânia">Ucrânia</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Uruguai">Uruguai</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnã">Vietnã</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zâmbia">Zâmbia</option>
                                            <option value="Zimbábue">Zimbábue</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Senha</label>
                                    <div class="col-sm-8">
                                        <input name="senha_1" id="senha_1" type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Confirme a sua senha</label>
                                    <div class="col-sm-8">
                                        <input name="senha_2" id="senha_2" type="password" class="form-control">
                                    </div>
                                </div>
                                <script>
                                    function validarSenha(){
                                        NovaSenha = document.getElementById('senha_1').value;
                                        CNovaSenha = document.getElementById('senha_2').value;
                                        if (NovaSenha != CNovaSenha) {
                                            alert("SENHAS DIFERENTES!\nFAVOR, DIGITE SENHAS IGUAIS"); 
                                        }else{
                                            document.validate.submit();
                                        }
                                    }
                                </script>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" value="Enviar" class="btn btn-success" onClick="validarSenha()">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="pessoa_juridica">
                        <div style="padding-top:20px;">
                            <form action="cadastroUsuariopj.php" method="POST" id="validate">
								<div class="form-group">
                                    <label class="col-sm-2 control-label">Razão Social</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="razaosocial" class="form-control" id="razaosocial" placeholder="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label"> Nome Fantasia</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nfantasia" class="form-control" id="nfantasia" placeholder="Digite o Nome Fantasia" value="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label">* CNPJ</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="Digite o CNPJ" value="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label"> Inscrição Estadual</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="inscEst" class="form-control" id="inscEst" placeholder="Digite a Inscrição Estadual" value="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label">* E-mail</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control" placeholder="Digite seu email">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label">* Senha</label>
                                    <div class="col-sm-8">
                                        <input name="senha_1" id="senha_1" type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Confirme a sua senha</label>
                                    <div class="col-sm-8">
                                        <input name="senha_2" id="senha_2" type="password" class="form-control">
                                    </div>
                                </div>
                                <script>
                                    function validarSenha(){
                                        NovaSenha = document.getElementById('senha_1').value;
                                        CNovaSenha = document.getElementById('senha_2').value;
                                        if (NovaSenha != CNovaSenha) {
                                            alert("SENHAS DIFERENTES!\nFAVOR, DIGITE SENHAS IGUAIS"); 
                                        }else{
                                            document.validate.submit();
                                        }
                                    }
                                </script>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Telefone</label>
                                    <div class="col-sm-8">
                                        <input name="telefone" type="text" class="form-control" placeholder="Digite o número de seu telefone" id="telefone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Celular</label>
                                    <div class="col-sm-8">
                                        <input name="celular" type="text" class="form-control" placeholder="Digite o número de seu celular" id="celular">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* CEP</label>
                                    <div class="col-sm-8">
                                        <input name="cep" type="text" class="form-control" placeholder="Digite seu CEP" id="cep">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Endereço</label>
                                    <div class="col-sm-8">
                                        <input name="endereco" type="text" class="form-control" placeholder="Digite seu endereço">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Número</label>
                                    <div class="col-sm-8">
                                        <input name="nro_endereco" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Complemento</label>
                                    <div class="col-sm-8">
                                        <input name="complemento_end" type="text" class="form-control" placeholder="Digite o complemento">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Referência</label>
                                    <div class="col-sm-8">
                                        <input name="referencia_end" type="text" class="form-control" placeholder="Digite a referência">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Bairro</label>
                                    <div class="col-sm-8">
                                        <input name="bairro" type="text" class="form-control" placeholder="Digite o nome de seu bairro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Cidade</label>
                                    <div class="col-sm-8">
                                        <input name="cidade" type="text" class="form-control" placeholder="Digite o nome da sua cidade">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* Estado</label>
                                    <div class="col-sm-8">
                                        <select name="estado" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="Exterior">Estado no Exterior</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espirito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">* País</label>
                                    <div class="col-sm-8">
                                        <select name="pais" class="form-control">
                                            <option value="África do Sul">África do Sul</option>
                                            <option value="Albânia">Albânia</option>
                                            <option value="Alemanha">Alemanha</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua">Antigua</option>
                                            <option value="Arábia Saudita">Arábia Saudita</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armênia">Armênia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Austrália">Austrália</option>
                                            <option value="Áustria">Áustria</option>
                                            <option value="Azerbaijão">Azerbaijão</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrein">Bahrein</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Bélgica">Bélgica</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermudas">Bermudas</option>
                                            <option value="Botsuana">Botsuana</option>
                                            <option value="Brasil" selected>Brasil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgária">Bulgária</option>
                                            <option value="Burkina Fasso">Burkina Fasso</option>
                                            <option value="botão">botão</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Camarões">Camarões</option>
                                            <option value="Camboja">Camboja</option>
                                            <option value="Canadá">Canadá</option>
                                            <option value="Cazaquistão">Cazaquistão</option>
                                            <option value="Chade">Chade</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                            <option value="Colômbia">Colômbia</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Coréia do Sul">Coréia do Sul</option>
                                            <option value="Costa do Marfim">Costa do Marfim</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croácia">Croácia</option>
                                            <option value="Dinamarca">Dinamarca</option>
                                            <option value="Djibuti">Djibuti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="EUA">EUA</option>
                                            <option value="Egito">Egito</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Emirados Árabes">Emirados Árabes</option>
                                            <option value="Equador">Equador</option>
                                            <option value="Eritréia">Eritréia</option>
                                            <option value="Escócia">Escócia</option>
                                            <option value="Eslováquia">Eslováquia</option>
                                            <option value="Eslovênia">Eslovênia</option>
                                            <option value="Espanha">Espanha</option>
                                            <option value="Estônia">Estônia</option>
                                            <option value="Etiópia">Etiópia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Filipinas">Filipinas</option>
                                            <option value="Finlândia">Finlândia</option>
                                            <option value="França">França</option>
                                            <option value="Gabão">Gabão</option>
                                            <option value="Gâmbia">Gâmbia</option>
                                            <option value="Gana">Gana</option>
                                            <option value="Geórgia">Geórgia</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Granada">Granada</option>
                                            <option value="Grécia">Grécia</option>
                                            <option value="Guadalupe">Guadalupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guiana">Guiana</option>
                                            <option value="Guiana Francesa">Guiana Francesa</option>
                                            <option value="Guiné-bissau">Guiné-bissau</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Holanda">Holanda</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungria">Hungria</option>
                                            <option value="Iêmen">Iêmen</option>
                                            <option value="Ilhas Cayman">Ilhas Cayman</option>
                                            <option value="Ilhas Cook">Ilhas Cook</option>
                                            <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                                            <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                            <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                            <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                            <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                            <option value="Índia">Índia</option>
                                            <option value="Indonésia">Indonésia</option>
                                            <option value="Inglaterra">Inglaterra</option>
                                            <option value="Irlanda">Irlanda</option>
                                            <option value="Islândia">Islândia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Itália">Itália</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japão">Japão</option>
                                            <option value="Jordânia">Jordânia</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Líbano">Líbano</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lituânia">Lituânia</option>
                                            <option value="Luxemburgo">Luxemburgo</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedônia">Macedônia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malásia">Malásia</option>
                                            <option value="Malaui">Malaui</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marrocos">Marrocos</option>
                                            <option value="Martinica">Martinica</option>
                                            <option value="Mauritânia">Mauritânia</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="México">México</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Mônaco">Mônaco</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Nicarágua">Nicarágua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigéria">Nigéria</option>
                                            <option value="Noruega">Noruega</option>
                                            <option value="Nova Caledônia">Nova Caledônia</option>
                                            <option value="Nova Zelândia">Nova Zelândia</option>
                                            <option value="Omã">Omã</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panamá">Panamá</option>
                                            <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                            <option value="Paquistão">Paquistão</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Polinésia Francesa">Polinésia Francesa</option>
                                            <option value="Polônia">Polônia</option>
                                            <option value="Porto Rico">Porto Rico</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Quênia">Quênia</option>
                                            <option value="Rep. Dominicana">Rep. Dominicana</option>
                                            <option value="Rep. Tcheca">Rep. Tcheca</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romênia">Romênia</option>
                                            <option value="Ruanda">Ruanda</option>
                                            <option value="Rússia">Rússia</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa Americana">Samoa Americana</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serra Leone">Serra Leone</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Singapura">Singapura</option>
                                            <option value="Síria">Síria</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                            <option value="St. Lúcia">St. Lúcia</option>
                                            <option value="St. Vincent">St. Vincent</option>
                                            <option value="Sudão">Sudão</option>
                                            <option value="Suécia">Suécia</option>
                                            <option value="Suiça">Suiça</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Tailândia">Tailândia</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tanzânia">Tanzânia</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunísia">Tunísia</option>
                                            <option value="Turquia">Turquia</option>
                                            <option value="Ucrânia">Ucrânia</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Uruguai">Uruguai</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnã">Vietnã</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zâmbia">Zâmbia</option>
                                            <option value="Zimbábue">Zimbábue</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" value="Enviar" class="btn btn-success" onClick="validarSenha()">Cadastrar</button>
                                    </div>
                                </div>
							</form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>
<?php
include("rodape.php");
?>