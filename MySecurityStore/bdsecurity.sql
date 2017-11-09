-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2017 às 00:58
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsecurity`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contaspagar`
--

CREATE TABLE `contaspagar` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contasreceber`
--

CREATE TABLE `contasreceber` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idpessoa` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entprod`
--

CREATE TABLE `entprod` (
  `lancamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `punit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

CREATE TABLE `entradas` (
  `lancamento` int(11) NOT NULL,
  `notafiscal` int(11) NOT NULL,
  `dtpedido` date NOT NULL,
  `dtentrada` date NOT NULL,
  `idfornecedor` int(11) NOT NULL,
  `totalitens` int(11) NOT NULL,
  `vltotal` float NOT NULL,
  `tipo` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `idtransportador` int(11) NOT NULL,
  `tipopag` int(11) NOT NULL,
  `vlfrete` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `envio`
--

CREATE TABLE `envio` (
  `idenvio` int(11) NOT NULL,
  `forma` int(11) NOT NULL,
  `vlfrete` float NOT NULL,
  `dataenvio` datetime NOT NULL,
  `dataentrega` datetime NOT NULL,
  `idtransportador` int(11) NOT NULL,
  `idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE `fabricantes` (
  `idfabricante` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `origem` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscest` varchar(20) NOT NULL,
  `idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funccontatos`
--

CREATE TABLE `funccontatos` (
  `idfuncionario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` varchar(30) NOT NULL,
  `tipoemail` int(11) NOT NULL,
  `tipofone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcdoc`
--

CREATE TABLE `funcdoc` (
  `idfuncionario` int(11) NOT NULL,
  `rgnro` varchar(14) NOT NULL,
  `rgssp` varchar(2) NOT NULL,
  `rgdata` date NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `ctps` int(11) NOT NULL,
  `titulo` int(11) NOT NULL,
  `reservista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dtnaasc` date NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `dtcadastro` date NOT NULL,
  `idnivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `tipousuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `idnivel` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `lancamento` int(11) NOT NULL,
  `vlpago` float NOT NULL,
  `data` date NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `nrodocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `idpermissao` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicacontatos`
--

CREATE TABLE `pfisicacontatos` (
  `idpfisica` int(11) NOT NULL,
  `tipoemail` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipotelefone` int(11) NOT NULL,
  `fone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicadados`
--

CREATE TABLE `pfisicadados` (
  `idpfisica` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dtnasc` date NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `dtcadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicadoc`
--

CREATE TABLE `pfisicadoc` (
  `idpfisica` int(11) NOT NULL,
  `rgnro` varchar(20) NOT NULL,
  `rgssp` varchar(2) NOT NULL,
  `rgdata` date NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicacontatos`
--

CREATE TABLE `pjuridicacontatos` (
  `idpjuridica` int(11) NOT NULL,
  `contato` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicadados`
--

CREATE TABLE `pjuridicadados` (
  `idpjuridica` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `dtfundacao` date NOT NULL,
  `dtultimaalt` date NOT NULL,
  `dtcadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicadoc`
--

CREATE TABLE `pjuridicadoc` (
  `idpjuridica` int(11) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `inscest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodestoque`
--

CREATE TABLE `prodestoque` (
  `idproduto` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estmin` int(11) NOT NULL,
  `estideal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodprecos`
--

CREATE TABLE `prodprecos` (
  `idproduto` int(11) NOT NULL,
  `data` date NOT NULL,
  `pcusto` float NOT NULL,
  `pmedio` float NOT NULL,
  `pvenda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodpromocao`
--

CREATE TABLE `prodpromocao` (
  `idpromocao` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `desconto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodtecnologia`
--

CREATE TABLE `prodtecnologia` (
  `codproduto` int(11) NOT NULL,
  `codtecnologia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Codigo` int(11) NOT NULL,
  `codbarras` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `grupo` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `garantia` varchar(10) NOT NULL,
  `obs` varchar(100) NOT NULL,
  `idfabricante` int(11) NOT NULL,
  `pesoliquido` float NOT NULL,
  `pesoembalagem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE `promocoes` (
  `idpromocao` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `dtini` date NOT NULL,
  `dtfim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recebimentos`
--

CREATE TABLE `recebimentos` (
  `lancamento` int(11) NOT NULL,
  `nrodocumento` int(11) NOT NULL,
  `vlrecebido` float NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `data` date NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saiprod`
--

CREATE TABLE `saiprod` (
  `lancamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `motivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologias`
--

CREATE TABLE `tecnologias` (
  `idtecnologia` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamentos`
--

CREATE TABLE `tipopagamentos` (
  `idtipo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `paecelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `titularcartao`
--

CREATE TABLE `titularcartao` (
  `idcartao` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `validade` varchar(7) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `bandeira` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transportadora`
--

CREATE TABLE `transportadora` (
  `idtransportadora` int(11) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscest` varchar(20) NOT NULL,
  `idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariopermissoes`
--

CREATE TABLE `usuariopermissoes` (
  `idfuncionario` int(11) NOT NULL,
  `idpermissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `lancamento` int(11) NOT NULL,
  `notafiscal` int(11) NOT NULL,
  `dtvenda` datetime NOT NULL,
  `dtsaida` datetime NOT NULL,
  `totalitens` int(11) NOT NULL,
  `valortotal` float NOT NULL,
  `tipo` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idcartao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contaspagar`
--
ALTER TABLE `contaspagar`
  ADD PRIMARY KEY (`nrodocumento`);

--
-- Indexes for table `contasreceber`
--
ALTER TABLE `contasreceber`
  ADD PRIMARY KEY (`nrodocumento`),
  ADD KEY `ContasRec_vendas` (`lancamento`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idendereco`,`tipo`),
  ADD KEY `end_funcionarios` (`idpessoa`);

--
-- Indexes for table `entprod`
--
ALTER TABLE `entprod`
  ADD KEY `Ent_prod` (`idproduto`),
  ADD KEY `Entprod_entradas` (`lancamento`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`lancamento`),
  ADD KEY `Entradas_tipo` (`tipopag`),
  ADD KEY `Tranportes_ent` (`idtransportador`),
  ADD KEY `Ent_forn` (`idfornecedor`);

--
-- Indexes for table `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`idenvio`),
  ADD KEY `Envio_end` (`idendereco`),
  ADD KEY `Envio_trans` (`idtransportador`);

--
-- Indexes for table `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`idfabricante`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idfornecedor`),
  ADD KEY `Forn_end` (`idendereco`);

--
-- Indexes for table `funccontatos`
--
ALTER TABLE `funccontatos`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `funcdoc`
--
ALTER TABLE `funcdoc`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `func_nivel` (`idnivel`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`,`idcliente`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`idnivel`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD KEY `Pagar` (`nrodocumento`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idpermissao`);

--
-- Indexes for table `pfisicacontatos`
--
ALTER TABLE `pfisicacontatos`
  ADD PRIMARY KEY (`idpfisica`);

--
-- Indexes for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  ADD PRIMARY KEY (`idpfisica`);

--
-- Indexes for table `pfisicadoc`
--
ALTER TABLE `pfisicadoc`
  ADD PRIMARY KEY (`idpfisica`);

--
-- Indexes for table `pjuridicacontatos`
--
ALTER TABLE `pjuridicacontatos`
  ADD PRIMARY KEY (`idpjuridica`);

--
-- Indexes for table `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
  ADD PRIMARY KEY (`idpjuridica`);

--
-- Indexes for table `pjuridicadoc`
--
ALTER TABLE `pjuridicadoc`
  ADD PRIMARY KEY (`idpjuridica`);

--
-- Indexes for table `prodestoque`
--
ALTER TABLE `prodestoque`
  ADD KEY `Prod_estoque` (`idproduto`);

--
-- Indexes for table `prodprecos`
--
ALTER TABLE `prodprecos`
  ADD KEY `Prod_precos` (`idproduto`);

--
-- Indexes for table `prodpromocao`
--
ALTER TABLE `prodpromocao`
  ADD KEY `Promo_prod` (`idproduto`),
  ADD KEY `Prod_promo` (`idpromocao`);

--
-- Indexes for table `prodtecnologia`
--
ALTER TABLE `prodtecnologia`
  ADD KEY `Prod_tec` (`codproduto`),
  ADD KEY `Tec_prod` (`codtecnologia`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `Produtos_fab` (`idfabricante`),
  ADD KEY `Produtos_grupo` (`grupo`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`idpromocao`);

--
-- Indexes for table `recebimentos`
--
ALTER TABLE `recebimentos`
  ADD KEY `Recebimentos` (`nrodocumento`);

--
-- Indexes for table `saiprod`
--
ALTER TABLE `saiprod`
  ADD KEY `Sai_prod` (`idproduto`),
  ADD KEY `sai_vendas` (`lancamento`);

--
-- Indexes for table `tecnologias`
--
ALTER TABLE `tecnologias`
  ADD PRIMARY KEY (`idtecnologia`);

--
-- Indexes for table `tipopagamentos`
--
ALTER TABLE `tipopagamentos`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indexes for table `titularcartao`
--
ALTER TABLE `titularcartao`
  ADD PRIMARY KEY (`idcartao`),
  ADD KEY `Titular_login` (`idcliente`);

--
-- Indexes for table `transportadora`
--
ALTER TABLE `transportadora`
  ADD PRIMARY KEY (`idtransportadora`),
  ADD KEY `Transportes_end` (`idendereco`);

--
-- Indexes for table `usuariopermissoes`
--
ALTER TABLE `usuariopermissoes`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `Usu_permissoes` (`idpermissao`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`lancamento`),
  ADD KEY `Vendas_envio` (`envio`),
  ADD KEY `Vendas_titular` (`idcartao`),
  ADD KEY `Vendas_login` (`idcliente`),
  ADD KEY `Vendas_tipo` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `envio`
--
ALTER TABLE `envio`
  MODIFY `idenvio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `idfabricante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idnivel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idpermissao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  MODIFY `idpfisica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
  MODIFY `idpjuridica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `idpromocao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tecnologias`
--
ALTER TABLE `tecnologias`
  MODIFY `idtecnologia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipopagamentos`
--
ALTER TABLE `tipopagamentos`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `titularcartao`
--
ALTER TABLE `titularcartao`
  MODIFY `idcartao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transportadora`
--
ALTER TABLE `transportadora`
  MODIFY `idtransportadora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contasreceber`
--
ALTER TABLE `contasreceber`
  ADD CONSTRAINT `ContasRec_vendas` FOREIGN KEY (`lancamento`) REFERENCES `vendas` (`lancamento`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `end_funcionarios` FOREIGN KEY (`idpessoa`) REFERENCES `funcionarios` (`idfuncionario`),
  ADD CONSTRAINT `end_pfisica` FOREIGN KEY (`idpessoa`) REFERENCES `pfisicadados` (`idpfisica`),
  ADD CONSTRAINT `end_pjuridica` FOREIGN KEY (`idpessoa`) REFERENCES `pjuridicadados` (`idpjuridica`);

--
-- Limitadores para a tabela `entprod`
--
ALTER TABLE `entprod`
  ADD CONSTRAINT `Ent_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `Entprod_entradas` FOREIGN KEY (`lancamento`) REFERENCES `entradas` (`lancamento`);

--
-- Limitadores para a tabela `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `Ent_forn` FOREIGN KEY (`idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`),
  ADD CONSTRAINT `Entradas_tipo` FOREIGN KEY (`tipopag`) REFERENCES `tipopagamentos` (`idtipo`),
  ADD CONSTRAINT `Tranportes_ent` FOREIGN KEY (`idtransportador`) REFERENCES `transportadora` (`idtransportadora`);

--
-- Limitadores para a tabela `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `Envio_end` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`),
  ADD CONSTRAINT `Envio_trans` FOREIGN KEY (`idtransportador`) REFERENCES `transportadora` (`idtransportadora`);

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `Forn_end` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `func_contatos` FOREIGN KEY (`idfuncionario`) REFERENCES `funccontatos` (`idfuncionario`),
  ADD CONSTRAINT `func_doc` FOREIGN KEY (`idfuncionario`) REFERENCES `funcdoc` (`idfuncionario`),
  ADD CONSTRAINT `func_nivel` FOREIGN KEY (`idnivel`) REFERENCES `nivel` (`idnivel`),
  ADD CONSTRAINT `func_permissoes` FOREIGN KEY (`idfuncionario`) REFERENCES `usuariopermissoes` (`idfuncionario`);

--
-- Limitadores para a tabela `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `funcionarios` (`idfuncionario`),
  ADD CONSTRAINT `login_pfisica` FOREIGN KEY (`idcliente`) REFERENCES `pfisicadados` (`idpfisica`),
  ADD CONSTRAINT `login_pjuridica` FOREIGN KEY (`idcliente`) REFERENCES `pjuridicadados` (`idpjuridica`);

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `Pagar` FOREIGN KEY (`nrodocumento`) REFERENCES `contaspagar` (`nrodocumento`);

--
-- Limitadores para a tabela `pfisicadados`
--
ALTER TABLE `pfisicadados`
  ADD CONSTRAINT `pfisica_contatos` FOREIGN KEY (`idpfisica`) REFERENCES `pjuridicacontatos` (`idpjuridica`),
  ADD CONSTRAINT `pfisica_doc` FOREIGN KEY (`idpfisica`) REFERENCES `pfisicadoc` (`idpfisica`);

--
-- Limitadores para a tabela `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
  ADD CONSTRAINT `pjuridica_contatos` FOREIGN KEY (`idpjuridica`) REFERENCES `pjuridicacontatos` (`idpjuridica`),
  ADD CONSTRAINT `pjuridica_doc` FOREIGN KEY (`idpjuridica`) REFERENCES `pjuridicadoc` (`idpjuridica`);

--
-- Limitadores para a tabela `prodestoque`
--
ALTER TABLE `prodestoque`
  ADD CONSTRAINT `Prod_estoque` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Limitadores para a tabela `prodprecos`
--
ALTER TABLE `prodprecos`
  ADD CONSTRAINT `Prod_precos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Limitadores para a tabela `prodpromocao`
--
ALTER TABLE `prodpromocao`
  ADD CONSTRAINT `Prod_promo` FOREIGN KEY (`idpromocao`) REFERENCES `promocoes` (`idpromocao`),
  ADD CONSTRAINT `Promo_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Limitadores para a tabela `prodtecnologia`
--
ALTER TABLE `prodtecnologia`
  ADD CONSTRAINT `Prod_tec` FOREIGN KEY (`codproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `Tec_prod` FOREIGN KEY (`codtecnologia`) REFERENCES `tecnologias` (`idtecnologia`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `Produtos_fab` FOREIGN KEY (`idfabricante`) REFERENCES `fabricantes` (`idfabricante`),
  ADD CONSTRAINT `Produtos_grupo` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`idgrupo`);

--
-- Limitadores para a tabela `recebimentos`
--
ALTER TABLE `recebimentos`
  ADD CONSTRAINT `Recebimentos` FOREIGN KEY (`nrodocumento`) REFERENCES `contasreceber` (`nrodocumento`);

--
-- Limitadores para a tabela `saiprod`
--
ALTER TABLE `saiprod`
  ADD CONSTRAINT `Sai_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `sai_vendas` FOREIGN KEY (`lancamento`) REFERENCES `vendas` (`lancamento`);

--
-- Limitadores para a tabela `titularcartao`
--
ALTER TABLE `titularcartao`
  ADD CONSTRAINT `Titular_login` FOREIGN KEY (`idcliente`) REFERENCES `login` (`idcliente`);

--
-- Limitadores para a tabela `transportadora`
--
ALTER TABLE `transportadora`
  ADD CONSTRAINT `Transportes_end` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`);

--
-- Limitadores para a tabela `usuariopermissoes`
--
ALTER TABLE `usuariopermissoes`
  ADD CONSTRAINT `Usu_permissoes` FOREIGN KEY (`idpermissao`) REFERENCES `permissoes` (`idpermissao`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `Vendas_envio` FOREIGN KEY (`envio`) REFERENCES `envio` (`idenvio`),
  ADD CONSTRAINT `Vendas_login` FOREIGN KEY (`idcliente`) REFERENCES `login` (`idcliente`),
  ADD CONSTRAINT `Vendas_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipopagamentos` (`idtipo`),
  ADD CONSTRAINT `Vendas_titular` FOREIGN KEY (`idcartao`) REFERENCES `titularcartao` (`idcartao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
