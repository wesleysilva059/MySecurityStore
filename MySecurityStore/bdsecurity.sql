-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 02:42 AM
-- Server version: 10.1.25-MariaDB
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
-- Table structure for table `contaspagar`
--

CREATE TABLE `contaspagar` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contaspagar`
--

INSERT INTO `contaspagar` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 20, 11111);

-- --------------------------------------------------------

--
-- Table structure for table `contasreceber`
--

CREATE TABLE `contasreceber` (
  `lancamento` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` float NOT NULL,
  `nrodocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contasreceber`
--

INSERT INTO `contasreceber` (`lancamento`, `vencimento`, `parcela`, `valor`, `nrodocumento`) VALUES
(1, '0000-00-00', 1, 66, 3241);

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE `enderecos` (
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
  `idendereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enderecos`
--

INSERT INTO `enderecos` (`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`, `idendereco`) VALUES
(1, 1, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 1),
(19, 1, 'rua Varginha', '220', 'Jardim Primavera', 'Passos', '37903-214', 'MG', 'Brasil', '', '', 12),
(20, 1, '', '', '', '', '', '', 'Brasil', '', '', 13),
(21, 2, 'rua 7 de setembro', '100', 'centro', 'passos', '37903214', 'MG', 'Brasil', '', '', 14),
(22, 1, 'Aparecida Bulgari', '75', 'vila formosa', 'são sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'padaria', 'casa', 15),
(1, 2, 'Rua Lopes Trovão', '14', 'mocoquinha', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'qualquer uma', 'casa', 17),
(23, 1, 'Aparecida Bulgari', '75', 'vila formosa', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'padaria', 'casa', 18),
(23, 2, 'Rua Lopes Trovão', '43', 'mocoquinha', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'qualquer uma', 'casa', 19);

-- --------------------------------------------------------

--
-- Table structure for table `entprod`
--

CREATE TABLE `entprod` (
  `lancamento` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `punit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entprod`
--

INSERT INTO `entprod` (`lancamento`, `idproduto`, `qtde`, `punit`) VALUES
(1, 1, 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `entradas`
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
-- Dumping data for table `entradas`
--

INSERT INTO `entradas` (`lancamento`, `notafiscal`, `dtpedido`, `dtentrada`, `idfornecedor`, `totalitens`, `vltotal`, `tipo`, `situacao`, `idtransportador`, `tipopag`, `vlfrete`) VALUES
(1, 1010, '0000-00-00', '0000-00-00', 1, 1, 12, 1, 1, 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `envio`
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
-- Dumping data for table `envio`
--

INSERT INTO `envio` (`idenvio`, `forma`, `vlfrete`, `dataenvio`, `dataentrega`, `idtransportador`, `idendereco`) VALUES
(1, 1, 52, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(2, 1, 17, '2017-11-22 00:00:00', '2017-12-12 00:00:00', 2, 1),
(3, 1, 33, '2017-11-22 00:00:00', '2017-12-12 00:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabricantes`
--

CREATE TABLE `fabricantes` (
  `idfabricante` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `origem` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabricantes`
--

INSERT INTO `fabricantes` (`idfabricante`, `descricao`, `origem`) VALUES
(1, 'FAB', 'NACIONAL'),
(2, 'Lux Vision S.A.', 'São Paulo - '),
(3, 'Lux Vision S.A.', 'São Paulo - '),
(4, 'TecVoz S.A.', 'São Paulo - ');

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor`
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
-- Dumping data for table `fornecedor`
--

INSERT INTO `fornecedor` (`idfornecedor`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'RS', 'NF', '1212', '2121', 0);

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `descrigrupo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descrigrupo`) VALUES
(1, 'CAMERAS');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `adm` int(1) NOT NULL,
  `tipousuario` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
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
(21, 1, 0, 'teste@teste.com.br', '123', 6),
(22, 0, 1, 'belini.higor@gmail.com', '1234', 23),
(23, 0, 1, 'belini@gmail.com', '1234', 24);

-- --------------------------------------------------------

--
-- Table structure for table `pagamentos`
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
-- Dumping data for table `pagamentos`
--

INSERT INTO `pagamentos` (`lancamento`, `vlpago`, `data`, `desconto`, `acrescimo`, `situacao`, `nrodocumento`) VALUES
(1, 20, '0000-00-00', 0, 0, '1', 11111);

-- --------------------------------------------------------

--
-- Table structure for table `permissoes`
--

CREATE TABLE `permissoes` (
  `idpermissao` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissoes`
--

INSERT INTO `permissoes` (`idpermissao`, `descricao`) VALUES
(1, 'CADASTRAR');

-- --------------------------------------------------------

--
-- Table structure for table `pfisicacontatos`
--

CREATE TABLE `pfisicacontatos` (
  `idpfcontato` int(11) NOT NULL,
  `tipoemail` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipotelefone` int(11) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pfisicacontatos`
--

INSERT INTO `pfisicacontatos` (`idpfcontato`, `tipoemail`, `email`, `tipotelefone`, `fone`, `idcliente`) VALUES
(1, 1, 'asdg@asdf10', 1, '(12) 3123-1231', 17),
(2, 1, 'wesleysilva059@gmail.com', 1, '(35) 3521-7373', 18),
(3, 1, 'wesleysilva059@gmail.com.br', 1, '(35) 3521-7373', 19),
(4, 1, 'wesleysilva059@gmail', 1, '(35) 3521-7373', 20),
(5, 1, 'wesleysilva059@gmail.br', 1, '(35) 3521-7373', 21),
(6, 1, '', 1, '', 22),
(7, 1, 'belini.higor@gmail.com', 1, '(35) 3531-7961', 23),
(8, 1, 'belini@gmail.com', 1, '(35) 9982-4018', 24);

-- --------------------------------------------------------

--
-- Table structure for table `pfisicadados`
--

CREATE TABLE `pfisicadados` (
  `idpfisica` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dtnasc` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `orgEmissor` varchar(10) NOT NULL,
  `dtcadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pfisicadados`
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
(22, '', '', '0000-00-00', '', '', '', '0000-00-00'),
(23, 'Higor Belini Pereira', '1', '0000-00-00', '122.173.786-43', 'mg-19.075.', 'SSP', '0000-00-00'),
(24, 'Higor Belini Pereira', '1', '0000-00-00', '122.173.786-44', 'mg-19.075.', 'SSP', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pjuridicacontatos`
--

CREATE TABLE `pjuridicacontatos` (
  `idpjcontato` int(11) NOT NULL,
  `tipoemail` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipotelefone` int(11) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pjuridicacontatos`
--

INSERT INTO `pjuridicacontatos` (`idpjcontato`, `tipoemail`, `email`, `tipotelefone`, `fone`, `idcliente`) VALUES
(1, 1, 'teste@teste.com.br', 1, '123123123', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pjuridicadados`
--

CREATE TABLE `pjuridicadados` (
  `idpjuridica` int(11) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `nomefantasia` varchar(50) NOT NULL,
  `cnpj` int(18) NOT NULL,
  `inscest` int(20) NOT NULL,
  `dtcadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pjuridicadados`
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
-- Table structure for table `prodestoque`
--

CREATE TABLE `prodestoque` (
  `idproduto` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estmin` int(11) NOT NULL,
  `estideal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodestoque`
--

INSERT INTO `prodestoque` (`idproduto`, `estoque`, `estmin`, `estideal`) VALUES
(1, 0, 2, 5),
(3, 2, 4, 4),
(4, 10, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `prodprecos`
--

CREATE TABLE `prodprecos` (
  `idproduto` int(11) NOT NULL,
  `data` date NOT NULL,
  `pcusto` float NOT NULL,
  `pmedio` float NOT NULL,
  `pvenda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodprecos`
--

INSERT INTO `prodprecos` (`idproduto`, `data`, `pcusto`, `pmedio`, `pvenda`) VALUES
(1, '0000-00-00', 12, 12, 22),
(3, '0000-00-00', 300, 300, 399),
(4, '0000-00-00', 10, 13, 299);

-- --------------------------------------------------------

--
-- Table structure for table `prodpromocao`
--

CREATE TABLE `prodpromocao` (
  `idpromocao` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `desconto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodpromocao`
--

INSERT INTO `prodpromocao` (`idpromocao`, `idproduto`, `desconto`) VALUES
(1, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `prodtecnologia`
--

CREATE TABLE `prodtecnologia` (
  `codproduto` int(11) NOT NULL,
  `codtecnologia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodtecnologia`
--

INSERT INTO `prodtecnologia` (`codproduto`, `codtecnologia`) VALUES
(1, 1),
(1, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
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
  `pesoembalagem` float NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`Codigo`, `codbarras`, `marca`, `modelo`, `grupo`, `descricao`, `garantia`, `obs`, `idfabricante`, `pesoliquido`, `pesoembalagem`, `foto`, `foto2`, `foto3`) VALUES
(1, '99999999', 'MARC', '10M', 1, 'CAMERA AHCD E IP', '120', 'OTIMO', 1, 10, 2, '', '', ''),
(2, '9999999888', 'MARC', '10M', 1, 'CAMERA IP', '90', 'OTIMO', 1, 10, 2, '', '', ''),
(3, '78966652436', 'Intelbras', 'TTTTT', 1, 'KIT 24 CAMERAS', 'seis', 'Melhor da loja', 1, 2000, 2500, 'bd061f8dd14af1f81d226056ffa843bd.jpg', 'b54843d7acfcae32d6246fa52fa5edaf.jpg', '44b97d56b8b15b030f35271e7fc48033.jpg'),
(4, '78966652436', 'TecVoz', '5', 1, 'KIT 10 CAMERAS', '120', 'MUITO BOM', 1, 44, 66, '01c44e61d36cd20c284bda09243201b9.jpg', 'fdd1083d552d78f9c79101bfd7d4623d.jpg', '7a994b5c064a4b2808d8ffce745eaaf9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE `promocoes` (
  `idpromocao` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `dtini` date NOT NULL,
  `dtfim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promocoes`
--

INSERT INTO `promocoes` (`idpromocao`, `descricao`, `dtini`, `dtfim`) VALUES
(1, 'NATAL2017', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `recebimentos`
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
-- Dumping data for table `recebimentos`
--

INSERT INTO `recebimentos` (`lancamento`, `nrodocumento`, `vlrecebido`, `desconto`, `acrescimo`, `data`, `situacao`) VALUES
(1, 3241, 66, 0, 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saiprod`
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
-- Table structure for table `tecnologias`
--

CREATE TABLE `tecnologias` (
  `idtecnologia` int(11) NOT NULL,
  `descritec` varchar(50) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tecnologias`
--

INSERT INTO `tecnologias` (`idtecnologia`, `descritec`, `caracteristicas`) VALUES
(1, 'IP', 'CONECTA SEM FIO ATRAVES DE PROTOCOLO DA INTERNET'),
(2, 'AHCD', 'OTIMA IMAGEM DIGITAL');

-- --------------------------------------------------------

--
-- Table structure for table `tipopagamentos`
--

CREATE TABLE `tipopagamentos` (
  `idtipo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `parcelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipopagamentos`
--

INSERT INTO `tipopagamentos` (`idtipo`, `descricao`, `parcelas`) VALUES
(1, '3X', 3);

-- --------------------------------------------------------

--
-- Table structure for table `titularcartao`
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
-- Dumping data for table `titularcartao`
--

INSERT INTO `titularcartao` (`idcartao`, `nome`, `numero`, `validade`, `cpf`, `bandeira`, `idlogin`) VALUES
(1, 'EU', 2147483647, '10/23', '012', 'VISA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportadora`
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
-- Dumping data for table `transportadora`
--

INSERT INTO `transportadora` (`idtransportadora`, `razaosocial`, `nomefantasia`, `cnpj`, `inscest`, `idendereco`) VALUES
(1, 'Correios', 'Correios', '2134523345', '2654356', 1),
(2, 'pac', 'PAC', '2345778654', '098745678', 2),
(3, 'Transportador jadlog', 'JADLOG Transportadora', '2327658531', '224364788876', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuariopermissoes`
--

CREATE TABLE `usuariopermissoes` (
  `idfuncionario` int(11) NOT NULL,
  `idpermissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuariopermissoes`
--

INSERT INTO `usuariopermissoes` (`idfuncionario`, `idpermissao`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendas`
--

CREATE TABLE `vendas` (
  `lancamento` int(11) NOT NULL,
  `notafiscal` varchar(15) NOT NULL,
  `dtvenda` date NOT NULL,
  `totalitens` int(11) NOT NULL,
  `valortotal` float NOT NULL,
  `situacao` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `tipopagamento` varchar(15) NOT NULL,
  `idendereco` int(11) NOT NULL,
  `tipoentrega` int(11) NOT NULL,
  `nomeproduto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendas`
--

INSERT INTO `vendas` (`lancamento`, `notafiscal`, `dtvenda`, `totalitens`, `valortotal`, `situacao`, `idlogin`, `tipopagamento`, `idendereco`, `tipoentrega`, `nomeproduto`) VALUES
(1, '11', '0000-00-00', 1, 200, 0, 1, '0', 0, 0, ''),
(28, '5a18c9d38dba0', '2017-11-25', 1, 399, 1, 23, '1', 18, 1, 'KIT 24 CAMERAS');

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
  ADD PRIMARY KEY (`idendereco`) USING BTREE,
  ADD KEY `fk_endlogin` (`idlogin`) USING BTREE;

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
  ADD PRIMARY KEY (`idpfcontato`);

--
-- Indexes for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  ADD PRIMARY KEY (`idpfisica`);

--
-- Indexes for table `pjuridicacontatos`
--
ALTER TABLE `pjuridicacontatos`
  ADD PRIMARY KEY (`idpjcontato`);

--
-- Indexes for table `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
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
  ADD KEY `Vendas_login` (`idlogin`),
  ADD KEY `Vendas_endereco` (`idendereco`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `envio`
--
ALTER TABLE `envio`
  MODIFY `idenvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `idfabricante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idpermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pfisicacontatos`
--
ALTER TABLE `pfisicacontatos`
  MODIFY `idpfcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  MODIFY `idpfisica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pjuridicacontatos`
--
ALTER TABLE `pjuridicacontatos`
  MODIFY `idpjcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pjuridicadados`
--
ALTER TABLE `pjuridicadados`
  MODIFY `idpjuridica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `idtransportadora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contasreceber`
--
ALTER TABLE `contasreceber`
  ADD CONSTRAINT `ContasRec_vendas` FOREIGN KEY (`lancamento`) REFERENCES `vendas` (`lancamento`);

--
-- Constraints for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_endLogin` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);

--
-- Constraints for table `entprod`
--
ALTER TABLE `entprod`
  ADD CONSTRAINT `Ent_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `Entprod_entradas` FOREIGN KEY (`lancamento`) REFERENCES `entradas` (`lancamento`);

--
-- Constraints for table `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `Ent_forn` FOREIGN KEY (`idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`),
  ADD CONSTRAINT `Entradas_tipo` FOREIGN KEY (`tipopag`) REFERENCES `tipopagamentos` (`idtipo`),
  ADD CONSTRAINT `Tranportes_ent` FOREIGN KEY (`idtransportador`) REFERENCES `transportadora` (`idtransportadora`);

--
-- Constraints for table `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `Envio_end` FOREIGN KEY (`idendereco`) REFERENCES `enderecos` (`idendereco`),
  ADD CONSTRAINT `Envio_trans` FOREIGN KEY (`idtransportador`) REFERENCES `transportadora` (`idtransportadora`);

--
-- Constraints for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `Pagar` FOREIGN KEY (`nrodocumento`) REFERENCES `contaspagar` (`nrodocumento`);

--
-- Constraints for table `prodestoque`
--
ALTER TABLE `prodestoque`
  ADD CONSTRAINT `Prod_estoque` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Constraints for table `prodprecos`
--
ALTER TABLE `prodprecos`
  ADD CONSTRAINT `Prod_precos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Constraints for table `prodpromocao`
--
ALTER TABLE `prodpromocao`
  ADD CONSTRAINT `Prod_promo` FOREIGN KEY (`idpromocao`) REFERENCES `promocoes` (`idpromocao`),
  ADD CONSTRAINT `Promo_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`);

--
-- Constraints for table `prodtecnologia`
--
ALTER TABLE `prodtecnologia`
  ADD CONSTRAINT `Prod_tec` FOREIGN KEY (`codproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `Tec_prod` FOREIGN KEY (`codtecnologia`) REFERENCES `tecnologias` (`idtecnologia`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `Produtos_fab` FOREIGN KEY (`idfabricante`) REFERENCES `fabricantes` (`idfabricante`),
  ADD CONSTRAINT `Produtos_grupo` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`idgrupo`);

--
-- Constraints for table `recebimentos`
--
ALTER TABLE `recebimentos`
  ADD CONSTRAINT `Recebimentos` FOREIGN KEY (`nrodocumento`) REFERENCES `contasreceber` (`nrodocumento`);

--
-- Constraints for table `saiprod`
--
ALTER TABLE `saiprod`
  ADD CONSTRAINT `Sai_prod` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`Codigo`),
  ADD CONSTRAINT `sai_vendas` FOREIGN KEY (`lancamento`) REFERENCES `vendas` (`lancamento`);

--
-- Constraints for table `titularcartao`
--
ALTER TABLE `titularcartao`
  ADD CONSTRAINT `Titular_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);

--
-- Constraints for table `usuariopermissoes`
--
ALTER TABLE `usuariopermissoes`
  ADD CONSTRAINT `Usu_permissoes` FOREIGN KEY (`idpermissao`) REFERENCES `permissoes` (`idpermissao`);

--
-- Constraints for table `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `Vendas_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
