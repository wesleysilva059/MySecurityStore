-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2017 às 03:42
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idlogin`, `tipo`, `logradouro`, `numero`, `bairro`, `cidade`, `cep`, `uf`, `pais`, `referencia`, `complemento`, `idendereco`) VALUES
(1, 1, 'AA', 'NN', 'BB', 'CC', '123', 'MG', 'PP', 'RR', 'CC', 1),
(19, 1, 'rua Varginha', '220', 'Jardim Primavera', 'Passos', '37903-214', 'MG', 'Brasil', '', '', 12),
(20, 1, '', '', '', '', '', '', 'Brasil', '', '', 13),
(21, 2, 'rua 7 de setembro', '100', 'centro', 'passos', '37903214', 'MG', 'Brasil', '', '', 14),
(22, 1, 'Aparecida Bulgari', '75', 'vila formosa', 'são sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'padaria', 'casa', 15),
(1, 2, 'Rua Lopes Trovão', '14', 'mocoquinha', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'qualquer uma', 'casa', 17),
(23, 1, 'Aparecida Bulgari', '75', 'vila formosa', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'padaria', 'casa', 18),
(23, 2, 'Rua Lopes Trovão', '43', 'mocoquinha', 'São Sebastião do Paraiso', '37950-000', 'MG', 'Brasil', 'qualquer uma', 'casa', 19),
(24, 1, 'Rua Varginha', '220', 'Jardim Primavera', 'Passos', '37903-214', 'MG', 'Brasil', '', '', 20),
(25, 1, 'asdf', '12', 'centro', 'CAPITOLIO', '00100-110', 'MG', 'Brasil', '', '', 21);

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
(1, 'Intelbras S.A.', 'Nacional'),
(3, 'Lux Vision S.A.', 'Nacional'),
(4, 'TecVoz S.A.', 'Nacional'),
(5, 'Giga S.A.', 'Nacional');

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
(1, 'Revendedor autorizado Intelbras', 'Intelbras Minas', '13242435475', '34657895674', 12),
(2, 'Revendedor autorizado TecVoz', 'TecVoz Minas', '34573678854', '34478643571', 14),
(4, 'Revendedor autorizado LuxVision', 'LuxVision Minas', '23465673456', '34658980986', 12),
(5, 'Revendedor autorizado GIGA', 'Giga Minas', '2346567234', '34657895629', 1);

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
(1, 'Câmeras'),
(5, 'Kits completos'),
(6, 'Cabeamentos'),
(7, 'DVRs'),
(8, 'Controladores de acesso'),
(9, 'NVRs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
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
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idlogin`, `adm`, `tipousuario`, `email`, `senha`, `idcliente`) VALUES
(1, 1, 0, 'CONTATOCLAUDIOMAIA@GMAIL.COM', '1234', 1),
(2, 2, 0, 'CRAUDIO@GMAIL.COM', '1234', 1),
(3, 1, 0, 'EMAIL@EMAIL', '321', 1),
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
(20, 1, 0, '', '', 22),
(21, 1, 0, 'teste@teste.com.br', '123', 6),
(22, 0, 1, 'belini.higor@gmail.com', '1234', 23),
(23, 0, 1, 'belini@gmail.com', '1234', 24),
(24, 0, 1, 'wesleysilva059@gmail.com', '123', 25),
(25, 0, 1, 'juniorcesarto@gmail.com', '123', 26);

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
  `idpfcontato` int(11) NOT NULL,
  `telefonefixo` varchar(15) NOT NULL,
  `telefonecelular` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pfisicacontatos`
--

INSERT INTO `pfisicacontatos` (`idpfcontato`, `telefonefixo`, `telefonecelular`, `idcliente`) VALUES
(1, '(12) 3123-1231', '0', 17),
(2, '(35) 3521-7373', '0', 18),
(3, '(35) 3521-7373', '0', 19),
(4, '(35) 3521-7373', '0', 20),
(5, '(35) 3521-7373', '0', 21),
(6, '', '0', 22),
(7, '(35) 3531-7961', '0', 23),
(8, '(35) 9982-4018', '0', 24),
(9, '(35) 3521-1382', '(35) 99975-9812', 25),
(10, '(35) 1231-2312', '(35) 12312-3123', 26);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pfisicadados`
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
(22, '', '', '0000-00-00', '', '', '', '0000-00-00'),
(23, 'Higor Belini Pereira', '2', '0000-00-00', '122.173.786-43', 'mg-19.075.', 'CRM', '0000-00-00'),
(24, 'Higor Belini Pereira', '1', '0000-00-00', '122.173.786-44', 'mg-19.075.', 'COREN', '0000-00-00'),
(25, 'Wesley Samuel da Silva', '1', '0000-00-00', '059.149.186-93', 'mg11271963', 'SSP', '2017-11-25'),
(26, 'Junior Cesar', '1', '0000-00-00', '000.111.222-44', 'asdf123123', 'CRE', '2017-11-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicacontatos`
--

CREATE TABLE `pjuridicacontatos` (
  `idpjcontato` int(11) NOT NULL,
  `telefonefixo` varchar(15) NOT NULL,
  `telefonecelular` varchar(15) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pjuridicacontatos`
--

INSERT INTO `pjuridicacontatos` (`idpjcontato`, `telefonefixo`, `telefonecelular`, `idcliente`) VALUES
(1, '123123123', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pjuridicadados`
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
(4, 10, 3, 5),
(5, 10, 10, 10),
(6, 10, 10, 10),
(7, 10, 10, 10),
(8, 10, 10, 10),
(9, 10, 10, 10),
(10, 10, 10, 10),
(11, 10, 10, 10),
(12, 10, 10, 10),
(13, 10, 10, 10),
(14, 10, 10, 10),
(15, 10, 10, 10),
(16, 10, 10, 10),
(17, 10, 10, 10),
(18, 10, 10, 10),
(22, 10, 10, 10),
(23, 10, 10, 10),
(24, 10, 10, 10),
(25, 10, 10, 10),
(26, 10, 10, 10),
(27, 10, 10, 10);

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
(4, '0000-00-00', 10, 13, 299),
(5, '2017-11-25', 1000, 1559, 1559),
(6, '2017-11-25', 800, 1135, 1135),
(7, '2017-11-25', 1300, 1925, 1925),
(8, '2017-11-25', 2000, 2499, 2499),
(9, '2017-11-25', 1800, 2086, 2086),
(10, '2017-11-25', 2200, 2579, 2579),
(11, '2017-11-25', 180, 235, 235),
(12, '2017-11-25', 200, 270, 270),
(13, '2017-11-25', 250, 309, 309),
(14, '2017-11-25', 190, 263, 263),
(15, '2017-11-25', 250, 312, 312),
(16, '2017-11-25', 150, 195, 195),
(17, '2017-11-25', 1900, 2290, 2290),
(18, '2017-11-25', 600, 711, 711),
(22, '2017-11-26', 1100, 1387, 1387),
(23, '2017-11-26', 1100, 1231, 1231),
(24, '2017-11-26', 3700, 3999, 3999),
(25, '2017-11-26', 30, 43, 43),
(26, '2017-11-26', 80, 112, 112),
(27, '2017-11-26', 89, 119, 119);

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
(4, 2),
(5, 6),
(6, 6),
(7, 8),
(8, 5),
(9, 7),
(10, 6),
(11, 6),
(12, 8),
(13, 8),
(14, 1),
(15, 3),
(16, 7),
(17, 3),
(18, 6),
(22, 2),
(23, 8),
(24, 3),
(25, 5),
(26, 7),
(27, 3);

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
(5, '78946434246', 'Intelbras', 'MHDX 1008', 5, 'KIT CFTV COMPLETO 7 CÂMERAS INTELBRAS', '365', '- 01 DVR\r\n- 07 CÂMERAS HDCVI \r\n- 01 Dísco Rígido HD\r\n- 01 Fonte \r\n- 01 Rolo de Cabo\r\n', 1, 2000, 2300, '15e886e6be77893a6b95106fa47c8b1b.jpg', '98896e9554c20b35985316dbf01cea5d.jpg', 'f93232e652a2402482bc797d718cee2d.jpg'),
(6, '78934546322', 'Intelbras', 'MHDX 1004', 5, 'KIT CFTV COMPLETO 4 CÂMERAS INTELBRAS', '365', '01 DVR\r\n- 02 CÂMERAS HDCVI HB 2000;\r\n- 02 CÂMERAS HDCVI HB 306;\r\n- 01 Dísco Rígido HD\r\n- 01 Fonte\r\n-', 1, 1400, 1700, '38380e81d17e3b9494eaad7fbd7cea8d.jpg', 'ff2c44c9628f22b701411d0a20c6d5ec.jpg', 'a239aad5d084a44a4855305198622062.jpg'),
(7, '78893453454', 'Intelbras', 'MHDX 1008', 5, 'KIT CFTV COMPLETO INTELBRAS 8 CÂMERAS ', '365', '04 CÂMERAS INTELBRAS \r\n01 Dísco Rígido HD\r\n01 Fonte\r\n01 Rolo de Cabo\r\n', 1, 2100, 2510, '4100327629a5f9297e386c8cb79d7796.jpg', '3e6d9f3ace9496ec9b24d52ddf848ce4.jpg', '8b50e7803fca8fac0faa9fd9f9219b1e.jpg'),
(8, '78916665336', 'OUTROS', 'G1004A', 5, 'KIT CFTV COMPLETO 8 CAMERAS GIGA TCIP', '180', '04 Câmeras Dome \r\n04 Câmeras Bullet \r\n01 Dvr Giga \r\n01 HD\r\n08 Fontes \r\n01 Rolo de Cabo \r\n', 5, 1000, 1200, '003020747516fecc8f376540804c3e5a.jpg', '689bc022402663c01ffb21ebc2c7b9a3.jpg', '6ca05820315430c44557fd82d0ed3260.jpg'),
(9, '7896665222', 'TecVoz', 'QCB-128P ', 5, 'KIT CFTV COMPLETO 12 CÂMERAS INFRA HD TEC VOZ', '365', '01 - DVR TecVoz\r\n12 Câmera Bullet \r\n01 Cabo Coaxial\r\n01 Fonte Chaveada \r\n', 4, 2200, 2450, '6092dc45ac4dd6cdafe279cab8de0bbe.jpg', 'b984f88e1431754c5f8ea54ece97998c.jpg', 'e44dc701332f8f3bd8ddfcf1c95ce8c0.jpg'),
(10, '78966869999', 'LuxVision', 'LV2001A', 5, 'KIT CFTV COMPLETO LUX VISION DVR 24 CAMERAS', '365', '24 Câmeras IR 20M 1/4 720P AHD 2.8MM IP67 LV;\r\nCanais de vídeo: 08 BNC\r\nCanais de áudio: 04 RCA\r\n', 3, 3000, 3350, '264c46134d613bbdf957bf98b6e7a587.jpg', '043da409a9854d4deae0fd7c40d9b36b.jpg', '92332cd04e9045dd91dc1647f94d1b51.jpg'),
(11, '789666555444', 'Intelbras', 'VIP S3020 G2', 1, 'CÂMERA INTELBRAS VIP S3020 G2 IR INTELIGENTE LENTE', '180', '- Resolução de 1 MP\r\n- Lente fixa de 3,6 mm\r\n- IR inteligente com alcance de 20 metros\r\n-Instalação ', 1, 150, 200, 'c3a8b7daba7dadfea54266cd403c0530.jpg', '2861011fa9c98849cb0dd846dea39aa7.jpg', '0828758ceaaaf7ffe1276749651a62d8.jpg'),
(12, '78966651111', 'TecVoz', 'TW-ICB100', 1, 'CAMERA TEC VOZ TW-ICB100 MULTI STREAMING 3D LENTE ', '365', '- Resolução de 1.0 Mega Pixels (720p)\r\n- Lente Fixa 3.6mm\r\n- Multi-Streaming / H.264\r\n- 3D DNR / D-W', 4, 320, 400, '89bd6cc29fd8a681bb8010e42eeef614.jpg', '1c5318c52d1dbeff55da57e746acd9e3.jpg', 'ced26858ebfae9fd1f14ea9de72c626f.jpg'),
(13, '78966631111', 'Intelbras', 'IC3', 1, 'CÁMERA INTELBRAS HD IC3 ARMAZENAMENTO EM CARTÃO MI', '365', '- Conexão Wi-Fi\r\n- Armazenamento em cartão micro-SD2\r\n- Campo de visão de 111° (diagonal)3\r\n- Imagen', 1, 120, 140, '8b72a9bc87e750e2a64d4a8b91d2c0e5.jpg', '838102f52eb9f8c92614c0e36ed5218b.jpg', '4285ca410a9e1499a4dda5df5530e822.jpg'),
(14, '78966622222', 'TecVoz', 'TV-ICB202vm ', 1, 'CÂMERA TECVOZ TV-ICB202vm IP BULLET VARIFOCAL MULT', '365', '- Modelo: TV-ICB202vm\r\n- Tipo: Câmera IP Bullet Varifocal Infra Red 50m Mega\r\n- Tecnologia compatíve', 4, 200, 250, '9daeb3ea088fce49b9ceac38ac808e39.jpg', '54d041fabbd5274065d68aa04887aa1c.jpg', '4ac42ee4f51162cca609bc2ea6d16fa5.jpg'),
(15, '78916665116', 'TecVoz', 'TW-ICB400v', 1, 'CAMERA TEC VOZ  CÂMERA IP BULLET INFRA TW-ICB400v', '365', '- Modelo: TW-ICB400v\r\n- Tipo: Câmera IP Bullet Varifocal Infra Red 50m Mega\r\n- Tecnologias compatíve', 4, 350, 390, '367266e1a2a556871e0806810dd7503d.jpg', '461475b3f3197f10bab56d7edfaf7915.jpg', 'f685beca43f915e00b44f29c51a4a1a9.jpg'),
(16, '78966652444', 'TecVoz', 'TW-U1032 ', 7, 'DVR TEC VOZ TW-U1032 STAND ALONE PENTAPLEX MON', '365', '- Tipo: Stand Alone\r\n- Modo Operacional: PENTAPLEX (Monitora, Grava, Busca, Backup e Acesso Remoto)\r', 4, 2600, 3000, 'e14506cf101c95b515e3c89a99473e82.jpg', '9db3a70a47946a9dc2767ecd8deddd37.jpg', '554a50f905abab5861c62903935fc4c6.jpg'),
(17, '78916665337', 'TecVoz', ' TW-P3032 ', 7, 'DVR TEC VOZ TW-P3032 STAND ALONE PENTAPLEX', '365', '- Tipo: Stand Alone\r\n- Modo Operacional: PENTAPLEX (Monitora, Grava, Busca, Backup e Acesso Remoto)\r', 4, 3500, 4100, '9e1544a83dfbceefec466f6e6c3ed3a2.jpg', 'df3240ce19635590aa908f435bbbfc30.jpg', '846e9aca4ed9594af48ea98c10f26acf.jpg'),
(18, '78966652429', 'TecVoz', 'TW-E316(m) ', 7, 'DVR TEC VOZ TW-E316(m) STAND ALONE MODO PENTAPLEX', '365', '- Tipo: Stand Alone\r\n- Modo Operacional: PENTAPLEX (Monitora, Grava, Busca, Backup e Acesso Remoto)\r', 4, 2800, 3100, '6c744be0183cf17380cc4d9ce73f49ba.jpg', '4aa4c09348cabda4b8bf5d86b46a5bd9.jpg', '91531a7ff1915ab8363696fa8ec02ba8.jpg'),
(19, '78893453454', 'Intelbras', 'MHDX 1008', 5, 'KIT CFTV COMPLETO INTELBRAS 8 CÂMERAS ', '365', '04 CÂMERAS INTELBRAS \r\n01 Dísco Rígido HD\r\n01 Fonte\r\n01 Rolo de Cabo\r\n', 1, 2100, 2510, '4100327629a5f9297e386c8cb79d7796.jpg', '3e6d9f3ace9496ec9b24d52ddf848ce4.jpg', '8b50e7803fca8fac0faa9fd9f9219b1e.jpg'),
(20, '78934546322', 'Intelbras', 'MHDX 1004', 5, 'KIT CFTV COMPLETO 4 CÂMERAS INTELBRAS', '365', '01 DVR\r\n- 02 CÂMERAS HDCVI HB 2000;\r\n- 02 CÂMERAS HDCVI HB 306;\r\n- 01 Dísco Rígido HD\r\n- 01 Fonte\r\n-', 1, 1400, 1700, '38380e81d17e3b9494eaad7fbd7cea8d.jpg', 'ff2c44c9628f22b701411d0a20c6d5ec.jpg', 'a239aad5d084a44a4855305198622062.jpg'),
(22, '78966652555', 'LuxVision', 'HVR ECD ALL HD DE 16 CANAIS', 9, 'HVR LUX VISION ECD ALL HD DE 16 CANAIS AHD, HDCVI,', '365', 'O sistema reconhece automaticamente a tecnologia da câmera conectada e renomeia o canal com as inici', 3, 3000, 3400, 'f5e32cce97d154997a1e98ac0c32fee7.jpg', 'c62cf0327ceac5c5b479980c167cd447.jpg', 'a6b4c14a57ce3dae4d7a5c60ce90efeb.jpg'),
(23, '78966688888', 'LuxVision', 'DVR AHD-H 8 CANAIS SMART HÍBRI', 7, 'DVR AHD-H 8 CANAIS SMART HÍBRIDO ANALÓGICA, IP OU ', '365', 'o	Canais de vídeo: 08 BNC\r\nCanais de áudio: 04 RCA\r\nQualidade de imagem: AHD-H (1920×1080)\r\nAcesso c', 3, 2900, 3100, '940407645944e5b761b17e2e8a608081.jpg', '143f6b42cce80e62bf115ea9ca025e20.jpg', 'b7169ed50efcde95e257adeeccf016aa.jpg'),
(24, '78266652436', 'Intelbras', 'MHDX 5016', 7, 'DVR MHDX 5016 INTELBRAS SERIE 5000 RESOLUÇÃO FULL ', '60', '-Série 5000: performance\r\n- Mais facilidade com acesso remoto\r\n- Possível visualizar até 16 câmeras ', 1, 1800, 2200, 'c1dcea3173954020ec2d6b5b2e6e471e.jpg', 'b7de83a5424401ff4685ecf53f49b59b.jpg', '5eb39970ef1e317d71d53d13e44684c2.jpg'),
(25, '68655447679', 'OUTROS', 'CABO', 6, 'CABO COAXIAL CFTV FLEXÍVEL 4MM BIPOLAR 2 VIAS 40% ', '365', 'Condutor Interno: Fio de cobre nu flexível 26AWG ou 24AWG\r\n- Isolação Interna: Polietileno de baixa ', 5, 4000, 4050, 'b26bb12a4a30c1e789d1de4d575d3bd0.jpg', 'c381f33ec042af033745996172feb09f.jpg', 'de3989b3db030f116ab6c32b1a436895.jpg'),
(26, '98655447679', 'OUTROS', 'CABO COAXIAL MALHA 95 RG 6 ROL', 6, 'CABO COAXIAL MALHA 95 RG 6 ROLO 100 MTS ANATEL AÇO', '365', 'Dados Técnicos: \r\nCondutor:  Aço Acobreado \r\nIsolação: Polietileno \r\nBlindagem:   Fios De Alumínio T', 5, 4000, 4050, '0defe7c19d16b52542b7732a29b55af9.jpg', 'bdeec6f7979c8c444644659a93d93c4e.jpg', '7abf3ba6a50b6207f2f1ae79fef4dc8c.jpg'),
(27, '78866652436', 'OUTROS', 'COAXIAL RGE 06 60 BRANCO ROLO ', 6, 'COAXIAL RGE 06 60 BRANCO PRETO ROLO 100M CABLETECH', '365', 'Descrição Marca: Cabletech Modelo: Rge 06 60 Características Aplicação: Catv Blindagem: 60 Cor: Bran', 5, 4000, 4050, '13f563a2d02faf1999efce817d00c8d1.jpg', '44496f9487d7f18832bb0313fb8265a6.jpg', '39679d6dd8a5459f2221d720ab90817f.jpg');

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
  `descritec` varchar(50) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnologias`
--

INSERT INTO `tecnologias` (`idtecnologia`, `descritec`, `caracteristicas`) VALUES
(1, 'IP', 'Sem fio'),
(2, 'AHCD', 'Otima imagem digital'),
(3, 'FULL HD', '1.920 colunas de pixels e 1.080 linhas'),
(5, 'Analógico', 'Gravação analógica em alta definição'),
(6, 'HDCVI', 'Método diferente e inovador de transmitir os sinais de vídeo.'),
(7, 'HDTVI', 'Trabalha em uma arquitetura aberta'),
(8, 'AHD', 'Alta Definição Analógica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopagamentos`
--

CREATE TABLE `tipopagamentos` (
  `idtipo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `parcelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipopagamentos`
--

INSERT INTO `tipopagamentos` (`idtipo`, `descricao`, `parcelas`) VALUES
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
(1, 'Correios', 'Correios', '2134523345', '2654356', 1),
(2, 'pac', 'PAC', '2345778654', '098745678', 2),
(3, 'Transportador jadlog', 'JADLOG Transportadora', '2327658531', '224364788876', 3);

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
-- Extraindo dados da tabela `vendas`
--
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
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idpermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pfisicacontatos`
--
ALTER TABLE `pfisicacontatos`
  MODIFY `idpfcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pfisicadados`
--
ALTER TABLE `pfisicadados`
  MODIFY `idpfisica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  ADD CONSTRAINT `Vendas_login` FOREIGN KEY (`idlogin`) REFERENCES `login` (`idlogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
