-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2017 às 19:35
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

--
-- Extraindo dados da tabela `contaspagar`
--

INSERT INTO `contaspagar` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 20, 11111);

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

--
-- Extraindo dados da tabela `contasreceber`
--

INSERT INTO `contasreceber` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 66, 3241);

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

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idpessoa`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`, `idendereco`) VALUES
(1, 1, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 1),
(1, 2, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 2),
(1, 3, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 3),
(1, 4, 'AAAA', '23456', 'BBBBB', 'CCCCC', '123456', 'MG', 'PPPP', 'RERERE', 'CPCPCPC', 4),
(1, 5, 'AAAA', '23456', 'BBBBB', 'CCCCC', '123456', 'MG', 'PPPP', 'RERERE', 'CPCPCPC', 5);

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

--
-- Extraindo dados da tabela `entprod`
--

INSERT INTO `entprod` (`lancamento`, `idproduto`, `qtde`, `punit`) VALUES
(1, 1, 5, 12);

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

--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`lancamento`, `notafiscal`, `dtpedido`, `dtentrada`, `idfornecedor`, `totalitens`, `vltotal`, `tipo`, `situacao`, `idtransportador`, `tipopag`, `vlfrete`) VALUES
(1, 1010, '0000-00-00', '0000-00-00', 1, 1, 12, 1, 1, 1, 1, 7);

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

--
-- Extraindo dados da tabela `envio`
--

INSERT INTO `envio` (`idenvio`, `forma`, `vlfrete`, `dataenvio`, `dataentrega`, `idtransportador`, `idendereco`) VALUES
(1, 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE `fabricantes` (
  `idfabricante` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `origem` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`idfabricante`, `descricao`, `origem`) VALUES
(1, 'FAB', 'NACIONAL');

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

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idfornecedor`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'RS', 'NF', '1212', '2121', 0);

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

--
-- Extraindo dados da tabela `funccontatos`
--

INSERT INTO `funccontatos` (`idfuncionario`, `email`, `fone`, `tipoemail`, `tipofone`) VALUES
(1, 'CONTATOCLAUDIOMAIA', '(35)98816-1903', 1, 1),
(1, 'CLAUDIO.TECNUS@GMAIL.COM', '(35)3522-7887', 2, 2),
(2, 'WESLEY', '(35)3522-7887', 1, 1),
(3, '@@@@@', '(35)3522-7887', 1, 1),
(4, '@@@@@', '(35)3522-7887', 1, 1);

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

--
-- Extraindo dados da tabela `funcdoc`
--

INSERT INTO `funcdoc` (`idfuncionario`, `rgnro`, `rgssp`, `rgdata`, `cpf`, `ctps`, `titulo`, `reservista`) VALUES
(1, 'm7906903', 'MG', '0000-00-00', '03577578661', 111, 222, 333),
(2, 'm7906903', 'MG', '0000-00-00', '222222', 111, 222, 333),
(3, 'm7906903', 'MG', '0000-00-00', '3333333', 111, 222, 333),
(4, 'm7906903', 'MG', '0000-00-00', '444444', 111, 222, 333);

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

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nome`, `sexo`, `dtnaasc`, `naturalidade`, `nacionalidade`, `dtcadastro`, `idnivel`) VALUES
(1, 'CLAUDIO ROBERTO MAIA', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00', 1),
(2, 'HIGOR', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00', 1),
(3, 'WESLEY', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00', 2),
(4, 'JUNIOR CESAR', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descricao`) VALUES
(1, 'CAMERAS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `tipousuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idlogin`, `tipousuario`, `email`, `senha`, `idcliente`) VALUES
(1, 1, 'CONTATOCLAUDIOMAIA@GMAIL.COM', '1234', 1),
(2, 2, 'CRAUDIO@GMAIL.COM', '1234', 1),
(3, 3, 'EMAIL@EMAIL', '321', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `idnivel` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`idnivel`, `descricao`) VALUES
(1, 'ADM'),
(2, 'USUARIO');

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

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`lancamento`, `vlpago`, `data`, `desconto`, `acrescimo`, `situacao`, `nrodocumento`) VALUES
(1, 20, '0000-00-00', 0, 0, '1', 11111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `idpermissao` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idpermissao`, `descricao`) VALUES
(1, 'CADASTRAR');

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

--
-- Extraindo dados da tabela `pfisicacontatos`
--

INSERT INTO `pfisicacontatos` (`idpfisica`, `tipoemail`, `email`, `tipotelefone`, `fone`) VALUES
(1, 1, 'CRAUDIO@GMAIL.COM', 1, '11111'),
(1, 2, 'CRAUDIO2@HOTMAIL.COM', 2, '323232'),
(2, 1, 'CABELO@HOTMAIL.COM', 21, '3232572');

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

--
-- Extraindo dados da tabela `pfisicadados`
--

INSERT INTO `pfisicadados` (`idpfisica`, `nome`, `sexo`, `dtnasc`, `naturalidade`, `nacionalidade`, `dtcadastro`) VALUES
(1, 'CRAUDIO ROBERTO', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00'),
(2, 'CABELO', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00'),
(3, 'CAPIVARA', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00'),
(4, 'DUCAPITOLIO', 'M', '0000-00-00', 'PASSOS', 'BRASILEIRO', '0000-00-00');

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

--
-- Extraindo dados da tabela `pfisicadoc`
--

INSERT INTO `pfisicadoc` (`idpfisica`, `rgnro`, `rgssp`, `rgdata`, `cpf`) VALUES
(1, 'm7906903', 'MG', '0000-00-00', '3577578661'),
(2, 'm7906903', 'MG', '0000-00-00', '2222222'),
(3, 'm7906903', 'MG', '0000-00-00', '3333333'),
(4, 'm7906903', 'MG', '0000-00-00', '4444');

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

--
-- Extraindo dados da tabela `pjuridicacontatos`
--

INSERT INTO `pjuridicacontatos` (`idpjuridica`, `contato`, `email`, `fone`) VALUES
(1, 'ZE DA LOJA', 'ZEDALOJA@LOJA', '45455656565');

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

--
-- Extraindo dados da tabela `pjuridicadados`
--

INSERT INTO `pjuridicadados` (`idpjuridica`, `tipo`, `razaosocial`, `nomefantasia`, `dtfundacao`, `dtultimaalt`, `dtcadastro`) VALUES
(1, 1, 'LOJA', 'LOJINHA', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicadoc`
--

CREATE TABLE `pjuridicadoc` (
  `idpjuridica` int(11) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `inscest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pjuridicadoc`
--

INSERT INTO `pjuridicadoc` (`idpjuridica`, `cnpj`, `inscest`) VALUES
(1, '0101010', '2929292');

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

--
-- Extraindo dados da tabela `prodestoque`
--

INSERT INTO `prodestoque` (`idproduto`, `estoque`, `estmin`, `estideal`) VALUES
(1, 0, 2, 5);

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

--
-- Extraindo dados da tabela `prodprecos`
--

INSERT INTO `prodprecos` (`idproduto`, `data`, `pcusto`, `pmedio`, `pvenda`) VALUES
(1, '0000-00-00', 12, 12, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodpromocao`
--

CREATE TABLE `prodpromocao` (
  `idpromocao` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `desconto` float NOT NULL
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

CREATE TABLE `prodtecnologia` (
  `codproduto` int(11) NOT NULL,
  `codtecnologia` int(11) NOT NULL
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

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Codigo`, `codbarras`, `marca`, `modelo`, `grupo`, `descricao`, `garantia`, `obs`, `idfabricante`, `pesoliquido`, `pesoembalagem`) VALUES
(1, '99999999', 'MARC', '10M', 1, 'CAMERA AHCD E IP', '120', 'OTIMO', 1, 10, 2),
(2, '9999999888', 'MARC', '10M', 1, 'CAMERA IP', '90', 'OTIMO', 1, 10, 2);

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

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`idpromocao`, `descricao`, `dtini`, `dtfim`) VALUES
(1, 'NATAL2017', '0000-00-00', '0000-00-00');

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

--
-- Extraindo dados da tabela `recebimentos`
--

INSERT INTO `recebimentos` (`lancamento`, `nrodocumento`, `vlrecebido`, `desconto`, `acrescimo`, `data`, `situacao`) VALUES
(1, 3241, 66, 0, 0, '0000-00-00', 1);

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

--
-- Extraindo dados da tabela `tecnologias`
--

INSERT INTO `tecnologias` (`idtecnologia`, `descricao`, `caracteristicas`) VALUES
(1, 'IP', 'CONECTA SEM FIO ATRAVES DE PROTOCOLO DA INTERNET'),
(2, 'AHCD', 'OTIMA IMAGEM DIGITAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamentos`
--

CREATE TABLE `tipopagamentos` (
  `idtipo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `paecelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipopagamentos`
--

INSERT INTO `tipopagamentos` (`idtipo`, `descricao`, `paecelas`) VALUES
(1, '3X', 3);

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
  `idlogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `titularcartao`
--

INSERT INTO `titularcartao` (`idcartao`, `nome`, `numero`, `validade`, `cpf`, `bandeira`, `idlogin`) VALUES
(1, 'EU', 2147483647, '10/23', '012', 'VISA', 1);

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

--
-- Extraindo dados da tabela `transportadora`
--

INSERT INTO `transportadora` (`idtransportadora`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'TRANS', 'TRANSLEVA', '23456789', '98765432', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariopermissoes`
--

CREATE TABLE `usuariopermissoes` (
  `idfuncionario` int(11) NOT NULL,
  `idpermissao` int(11) NOT NULL
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
  `idlogin` int(11) NOT NULL,
  `idcartao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`lancamento`, `notafiscal`, `dtvenda`, `dtsaida`, `totalitens`, `valortotal`, `tipo`, `situacao`, `envio`, `idlogin`, `idcartao`) VALUES
(1, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 200, 1, 0, 1, 1, 0);

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
  ADD PRIMARY KEY (`idlogin`),
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
  ADD KEY `Titular_login` (`idlogin`);

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
  ADD KEY `Vendas_tipo` (`tipo`),
  ADD KEY `Vendas_login` (`idlogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `envio`
--
ALTER TABLE `envio`
  MODIFY `idenvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `idfabricante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `idnivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idpermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  MODIFY `idpfisica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
  MODIFY `idpjuridica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `idpromocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tecnologias`
--
ALTER TABLE `tecnologias`
  MODIFY `idtecnologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipopagamentos`
--
ALTER TABLE `tipopagamentos`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `titularcartao`
--
ALTER TABLE `titularcartao`
  MODIFY `idcartao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportadora`
--
ALTER TABLE `transportadora`
  MODIFY `idtransportadora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- Limitadores para a tabela `funcdoc`
--
ALTER TABLE `funcdoc`
  ADD CONSTRAINT `funcdoc_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionarios` (`idfuncionario`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `func_nivel` FOREIGN KEY (`idnivel`) REFERENCES `nivel` (`idnivel`);

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `Pagar` FOREIGN KEY (`nrodocumento`) REFERENCES `contaspagar` (`nrodocumento`);

--
-- Limitadores para a tabela `pfisicadoc`
--
ALTER TABLE `pfisicadoc`
  ADD CONSTRAINT `pfisicadoc_ibfk_1` FOREIGN KEY (`idpfisica`) REFERENCES `pfisicadados` (`idpfisica`);

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
  ADD CONSTRAINT `Usu_permissoes` FOREIGN KEY (`idpermissao`) REFERENCES `permissoes` (`idpermissao`),
  ADD CONSTRAINT `usuariopermissoes_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionarios` (`idfuncionario`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `Vendas_envio` FOREIGN KEY (`envio`) REFERENCES `envio` (`idenvio`),
  ADD CONSTRAINT `Vendas_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`),
  ADD CONSTRAINT `Vendas_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipopagamentos` (`idtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
