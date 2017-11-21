-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2017 às 03:35
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdsecurity`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contaspagar`
--

CREATE TABLE IF NOT EXISTS `contaspagar` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL,
  PRIMARY KEY (`nrodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contaspagar`
--

INSERT INTO `contaspagar` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 20, 11111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contasreceber`
--

CREATE TABLE IF NOT EXISTS `contasreceber` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL,
  PRIMARY KEY (`nrodocumento`),
  KEY `ContasRec_vendas` (`lancamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contasreceber`
--

INSERT INTO `contasreceber` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 66, 3241);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `idlogin` int(11) NOT NULL,
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
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idendereco`) USING BTREE,
  KEY `fk_endlogin` (`idlogin`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`, `idendereco`) VALUES
(1, 1, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 1),
(1, 2, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 2),
(1, 3, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 3),
(1, 4, 'AAAA', '23456', 'BBBBB', 'CCCCC', '123456', 'MG', 'PPPP', 'RERERE', 'CPCPCPC', 4),
(19, 1, 'rua Varginha', '220', 'Jardim Primavera', 'Passos', '37903-214', 'MG', 'Brasil', '', '', 12),
(20, 1, '', '', '', '', '', '', 'Brasil', '', '', 13),
(21, 2, 'rua 7 de setembro', '100', 'centro', 'passos', '37903214', 'MG', 'Brasil', '', '', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entprod`
--

CREATE TABLE IF NOT EXISTS `entprod` (
  `lancamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `punit` float NOT NULL,
  KEY `Ent_prod` (`idproduto`),
  KEY `Entprod_entradas` (`lancamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entprod`
--

INSERT INTO `entprod` (`lancamento`, `idproduto`, `qtde`, `punit`) VALUES
(1, 1, 5, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `lancamento` int(11) NOT NULL AUTO_INCREMENT,
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
  `vlfrete` float NOT NULL,
  PRIMARY KEY (`lancamento`),
  KEY `Entradas_tipo` (`tipopag`),
  KEY `Tranportes_ent` (`idtransportador`),
  KEY `Ent_forn` (`idfornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`lancamento`, `notafiscal`, `dtpedido`, `dtentrada`, `idfornecedor`, `totalitens`, `vltotal`, `tipo`, `situacao`, `idtransportador`, `tipopag`, `vlfrete`) VALUES
(1, 1010, '0000-00-00', '0000-00-00', 1, 1, 12, 1, 1, 1, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `envio`
--

CREATE TABLE IF NOT EXISTS `envio` (
  `idenvio` int(11) NOT NULL AUTO_INCREMENT,
  `forma` int(11) NOT NULL,
  `vlfrete` float NOT NULL,
  `dataenvio` datetime NOT NULL,
  `dataentrega` datetime NOT NULL,
  `idtransportador` int(11) NOT NULL,
  `idendereco` int(11) NOT NULL,
  PRIMARY KEY (`idenvio`),
  KEY `Envio_end` (`idendereco`),
  KEY `Envio_trans` (`idtransportador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `envio`
--

INSERT INTO `envio` (`idenvio`, `forma`, `vlfrete`, `dataenvio`, `dataentrega`, `idtransportador`, `idendereco`) VALUES
(1, 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE IF NOT EXISTS `fabricantes` (
  `idfabricante` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `origem` varchar(12) NOT NULL,
  PRIMARY KEY (`idfabricante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`idfabricante`, `descricao`, `origem`) VALUES
(1, 'FAB', 'NACIONAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscest` varchar(20) NOT NULL,
  `idendereco` int(11) NOT NULL,
  PRIMARY KEY (`idfornecedor`),
  KEY `Forn_end` (`idendereco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idfornecedor`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'RS', 'NF', '1212', '2121', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descrigrupo` varchar(30) NOT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descrigrupo`) VALUES
(1, 'CAMERAS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `adm` int(1) NOT NULL,
  `tipousuario` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idlogin`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idlogin`, `adm`, `tipousuario`, `email`, `senha`, `idcliente`) VALUES
(1, 1, 0, 'CONTATOCLAUDIOMAIA@GMAIL.COM', '1234', 1),
(2, 2, 0, 'CRAUDIO@GMAIL.COM', '1234', 1),
(3, 3, 0, 'EMAIL@EMAIL', '321', 1),
(4, 1, 0, 'wesley@silva', '123', 1),
(5, 2, 0, 'zxcv', '123', 2),
(6, 2, 0, 'zxcv', '123', 5),
(7, 1, 0, 'wesley@silva', '12345', 3),
(8, 1, 0, 'wesley@silva', '12345', 7),
(9, 1, 0, 'wesley@silva', '12345', 3),
(10, 1, 0, 'wesley@silva', '12345', 9),
(11, 1, 0, 'asdg@asdf', '123', 12),
(12, 1, 0, 'asdg@asdf123', '1234', 14),
(13, 1, 0, 'asdg@asdf12', '123', 15),
(14, 1, 0, 'asdg@asdf1', 'asd', 16),
(15, 1, 0, 'asdg@asdf10', 'zxc', 17),
(16, 1, 0, 'wesleysilva059@gmail.com', '123', 18),
(17, 1, 0, 'wesleysilva059@gmail.com.br', '123', 19),
(18, 1, 0, 'wesleysilva059@gmail', '1234', 20),
(19, 1, 0, 'wesleysilva059@gmail.br', '123', 21),
(20, 1, 0, '', '', 22),
(21, 0, 2, 'teste@teste.com.br', '123', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `lancamento` int(11) NOT NULL,
  `vlpago` float NOT NULL,
  `data` date NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `nrodocumento` int(11) NOT NULL,
  KEY `Pagar` (`nrodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`lancamento`, `vlpago`, `data`, `desconto`, `acrescimo`, `situacao`, `nrodocumento`) VALUES
(1, 20, '0000-00-00', 0, 0, '1', 11111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE IF NOT EXISTS `permissoes` (
  `idpermissao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`idpermissao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idpermissao`, `descricao`) VALUES
(1, 'CADASTRAR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicacontatos`
--

CREATE TABLE IF NOT EXISTS `pfisicacontatos` (
  `idpfcontato` int(11) NOT NULL AUTO_INCREMENT,
  `tipoemail` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipotelefone` int(11) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idpfcontato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `pfisicacontatos`
--

INSERT INTO `pfisicacontatos` (`idpfcontato`, `tipoemail`, `email`, `tipotelefone`, `fone`, `idcliente`) VALUES
(1, 1, 'asdg@asdf10', 1, '(12) 3123-1231', 17),
(2, 1, 'wesleysilva059@gmail.com', 1, '(35) 3521-7373', 18),
(3, 1, 'wesleysilva059@gmail.com.br', 1, '(35) 3521-7373', 19),
(4, 1, 'wesleysilva059@gmail', 1, '(35) 3521-7373', 20),
(5, 1, 'wesleysilva059@gmail.br', 1, '(35) 3521-7373', 21),
(6, 1, '', 1, '', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicadados`
--

CREATE TABLE IF NOT EXISTS `pfisicadados` (
  `idpfisica` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dtnasc` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `orgEmissor` varchar(10) NOT NULL,
  `dtcadastro` date NOT NULL,
  PRIMARY KEY (`idpfisica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `pfisicadados`
--

INSERT INTO `pfisicadados` (`idpfisica`, `nome`, `sexo`, `dtnasc`, `cpf`, `rg`, `orgEmissor`, `dtcadastro`) VALUES
(1, 'CRAUDIO ROBERTO', 'M', '0000-00-00', '', '', '', '0000-00-00'),
(2, 'CABELO', 'M', '0000-00-00', '', '', '', '0000-00-00'),
(3, 'CAPIVARA', 'M', '0000-00-00', '', '', '', '0000-00-00'),
(4, 'DUCAPITOLIO', 'M', '0000-00-00', '', '', '', '0000-00-00'),
(9, 'Wesley Samuel da Silva', '1', '0000-00-00', '059.149.186-93', '1232125', 'SSP', '0000-00-00'),
(10, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(11, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(12, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(13, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(14, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(15, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(16, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(17, 'asdf', '2', '0000-00-00', '123.123.123-12', 'cbzs', 'SSP', '0000-00-00'),
(18, 'Wesley', '1', '0000-00-00', '059.149.186-93', 'mg11271963', 'SSP', '0000-00-00'),
(19, 'Wesley', '1', '0000-00-00', '059.149.186-93', 'mg11271963', 'SSP', '0000-00-00'),
(20, 'Wesley', '1', '0000-00-00', '059.149.186-93', 'mg11271963', 'SSP', '0000-00-00'),
(21, 'Wesley', '1', '0000-00-00', '059.149.186-93', 'mg11271963', 'SSP', '0000-00-00'),
(22, '', '', '0000-00-00', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicacontatos`
--

CREATE TABLE IF NOT EXISTS `pjuridicacontatos` (
  `idpjcontato` int(11) NOT NULL AUTO_INCREMENT,
  `tipoemail` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipotelefone` int(11) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idpjcontato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pjuridicacontatos`
--

INSERT INTO `pjuridicacontatos` (`idpjcontato`, `tipoemail`, `email`, `tipotelefone`, `fone`, `idcliente`) VALUES
(1, 1, 'teste@teste.com.br', 1, '123123123', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicadados`
--

CREATE TABLE IF NOT EXISTS `pjuridicadados` (
  `idpjuridica` int(11) NOT NULL AUTO_INCREMENT,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` int(18) NOT NULL,
  `inscest` int(20) NOT NULL,
  `dtcadastro` date NOT NULL,
  PRIMARY KEY (`idpjuridica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `pjuridicadados`
--

INSERT INTO `pjuridicadados` (`idpjuridica`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `dtcadastro`) VALUES
(1, 'LOJA', 'LOJINHA', 0, 0, '0000-00-00'),
(2, '', 'ind', 521, 0, '0000-00-00'),
(3, 'teste', 'teste', 0, 0, '0000-00-00'),
(4, 'teste', 'teste', 0, 0, '0000-00-00'),
(5, 'teste2', 'teste', 0, 0, '0000-00-00'),
(6, 'teste2', 'teste', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodestoque`
--

CREATE TABLE IF NOT EXISTS `prodestoque` (
  `idproduto` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estmin` int(11) NOT NULL,
  `estideal` int(11) NOT NULL,
  KEY `Prod_estoque` (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prodestoque`
--

INSERT INTO `prodestoque` (`idproduto`, `estoque`, `estmin`, `estideal`) VALUES
(1, 0, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodprecos`
--

CREATE TABLE IF NOT EXISTS `prodprecos` (
  `idproduto` int(11) NOT NULL,
  `data` date NOT NULL,
  `pcusto` float NOT NULL,
  `pmedio` float NOT NULL,
  `pvenda` float NOT NULL,
  KEY `Prod_precos` (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prodprecos`
--

INSERT INTO `prodprecos` (`idproduto`, `data`, `pcusto`, `pmedio`, `pvenda`) VALUES
(1, '0000-00-00', 12, 12, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodpromocao`
--

CREATE TABLE IF NOT EXISTS `prodpromocao` (
  `idpromocao` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `desconto` float NOT NULL,
  KEY `Promo_prod` (`idproduto`),
  KEY `Prod_promo` (`idpromocao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prodpromocao`
--

INSERT INTO `prodpromocao` (`idpromocao`, `idproduto`, `desconto`) VALUES
(1, 1, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodtecnologia`
--

CREATE TABLE IF NOT EXISTS `prodtecnologia` (
  `codproduto` int(11) NOT NULL,
  `codtecnologia` int(11) NOT NULL,
  KEY `Prod_tec` (`codproduto`),
  KEY `Tec_prod` (`codtecnologia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prodtecnologia`
--

INSERT INTO `prodtecnologia` (`codproduto`, `codtecnologia`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codbarras` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `grupo` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `garantia` varchar(10) NOT NULL,
  `obs` varchar(100) NOT NULL,
  `idfabricante` int(11) NOT NULL,
  `pesoliquido` float NOT NULL,
  `pesoembalagem` float NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `Produtos_fab` (`idfabricante`),
  KEY `Produtos_grupo` (`grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Codigo`, `codbarras`, `marca`, `modelo`, `grupo`, `descricao`, `garantia`, `obs`, `idfabricante`, `pesoliquido`, `pesoembalagem`, `foto`, `foto2`, `foto3`) VALUES
(1, '99999999', 'MARC', '10M', 1, 'CAMERA AHCD E IP', '120', 'OTIMO', 1, 10, 2, '', '', ''),
(2, '9999999888', 'MARC', '10M', 1, 'CAMERA IP', '90', 'OTIMO', 1, 10, 2, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE IF NOT EXISTS `promocoes` (
  `idpromocao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `dtini` date NOT NULL,
  `dtfim` date NOT NULL,
  PRIMARY KEY (`idpromocao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`idpromocao`, `descricao`, `dtini`, `dtfim`) VALUES
(1, 'NATAL2017', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recebimentos`
--

CREATE TABLE IF NOT EXISTS `recebimentos` (
  `lancamento` int(11) NOT NULL,
  `nrodocumento` int(11) NOT NULL,
  `vlrecebido` float NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `data` date NOT NULL,
  `situacao` int(11) NOT NULL,
  KEY `Recebimentos` (`nrodocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recebimentos`
--

INSERT INTO `recebimentos` (`lancamento`, `nrodocumento`, `vlrecebido`, `desconto`, `acrescimo`, `data`, `situacao`) VALUES
(1, 3241, 66, 0, 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saiprod`
--

CREATE TABLE IF NOT EXISTS `saiprod` (
  `lancamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `desconto` float NOT NULL,
  `acrescimo` float NOT NULL,
  `motivo` int(11) NOT NULL,
  KEY `Sai_prod` (`idproduto`),
  KEY `sai_vendas` (`lancamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologias`
--

CREATE TABLE IF NOT EXISTS `tecnologias` (
  `idtecnologia` int(11) NOT NULL AUTO_INCREMENT,
  `descritec` varchar(50) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  PRIMARY KEY (`idtecnologia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tecnologias`
--

INSERT INTO `tecnologias` (`idtecnologia`, `descritec`, `caracteristicas`) VALUES
(1, 'IP', 'CONECTA SEM FIO ATRAVES DE PROTOCOLO DA INTERNET'),
(2, 'AHCD', 'OTIMA IMAGEM DIGITAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamentos`
--

CREATE TABLE IF NOT EXISTS `tipopagamentos` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `parcelas` int(11) NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tipopagamentos`
--

INSERT INTO `tipopagamentos` (`idtipo`, `descricao`, `parcelas`) VALUES
(1, '3X', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `titularcartao`
--

CREATE TABLE IF NOT EXISTS `titularcartao` (
  `idcartao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `validade` varchar(7) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `bandeira` varchar(20) NOT NULL,
  `idlogin` int(11) NOT NULL,
  PRIMARY KEY (`idcartao`),
  KEY `Titular_login` (`idlogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `titularcartao`
--

INSERT INTO `titularcartao` (`idcartao`, `nome`, `numero`, `validade`, `cpf`, `bandeira`, `idlogin`) VALUES
(1, 'EU', 2147483647, '10/23', '012', 'VISA', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transportadora`
--

CREATE TABLE IF NOT EXISTS `transportadora` (
  `idtransportadora` int(11) NOT NULL AUTO_INCREMENT,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscest` varchar(20) NOT NULL,
  `idendereco` int(11) NOT NULL,
  PRIMARY KEY (`idtransportadora`),
  KEY `Transportes_end` (`idendereco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `transportadora`
--

INSERT INTO `transportadora` (`idtransportadora`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'TRANS', 'TRANSLEVA', '23456789', '98765432', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariopermissoes`
--

CREATE TABLE IF NOT EXISTS `usuariopermissoes` (
  `idfuncionario` int(11) NOT NULL,
  `idpermissao` int(11) NOT NULL,
  PRIMARY KEY (`idfuncionario`),
  KEY `Usu_permissoes` (`idpermissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuariopermissoes`
--

INSERT INTO `usuariopermissoes` (`idfuncionario`, `idpermissao`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `lancamento` int(11) NOT NULL AUTO_INCREMENT,
  `notafiscal` int(11) NOT NULL,
  `dtvenda` datetime NOT NULL,
  `dtsaida` datetime NOT NULL,
  `totalitens` int(11) NOT NULL,
  `valortotal` float NOT NULL,
  `tipo` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `idcartao` int(11) NOT NULL,
  PRIMARY KEY (`lancamento`),
  KEY `Vendas_envio` (`envio`),
  KEY `Vendas_titular` (`idcartao`),
  KEY `Vendas_tipo` (`tipo`),
  KEY `Vendas_login` (`idlogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`lancamento`, `notafiscal`, `dtvenda`, `dtsaida`, `totalitens`, `valortotal`, `tipo`, `situacao`, `envio`, `idlogin`, `idcartao`) VALUES
(1, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 200, 1, 0, 1, 1, 0);

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
  ADD CONSTRAINT `fk_endLogin` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);

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
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `Pagar` FOREIGN KEY (`nrodocumento`) REFERENCES `contaspagar` (`nrodocumento`);

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
  ADD CONSTRAINT `Titular_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);

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
  ADD CONSTRAINT `Vendas_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`),
  ADD CONSTRAINT `Vendas_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipopagamentos` (`idtipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
