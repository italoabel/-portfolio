-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2019 às 16:32
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL DEFAULT 'fisico',
  `cpf-cnpj` varchar(50) NOT NULL,
  `nome-razao` varchar(128) DEFAULT NULL,
  `rg-municipal` varchar(50) DEFAULT NULL,
  `inscricao-estadual` varchar(50) DEFAULT NULL,
  `endereco` varchar(128) DEFAULT NULL,
  `cep` varchar(25) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(3) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `tel1` varchar(25) DEFAULT NULL,
  `tel2` varchar(25) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `tipo`, `cpf-cnpj`, `nome-razao`, `rg-municipal`, `inscricao-estadual`, `endereco`, `cep`, `cidade`, `uf`, `email`, `tel1`, `tel2`, `senha`) VALUES
(5, 'juridico', '65572981000197', 'Empresa', '59595', '57448', '', 'cep', '', 'non', '', '', '', '4b38ca5257c4a9da7e244362cf27fe199c5a948f'),
(17, 'fisico', '89359865001', 'teste1', '', '', '', '', '', 'non', '', '', '', NULL),
(18, 'juridico', '36153684000109', 'teste2', '', '', '', '', '', 'non', '', '', '', NULL),
(24, 'fisico', '03344579126', 'alow', '', '', '', '', '', 'MT', '', '', '', '4b38ca5257c4a9da7e244362cf27fe199c5a948f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `codigo` int(11) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`codigo`, `sigla`, `descricao`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins'),
(28, 'AC', 'AC'),
(29, 'AL', 'AL'),
(30, 'AP', 'AP'),
(31, 'AM', 'AM'),
(32, 'BA', 'BA'),
(33, 'CE', 'CE'),
(34, 'DF', 'DF'),
(35, 'ES', 'ES'),
(36, 'GO', 'GO'),
(37, 'MA', 'MA'),
(38, 'MT', 'MG'),
(39, 'MS', 'MS'),
(40, 'MG', 'MG'),
(41, 'PA', 'PA'),
(42, 'PB', 'PB'),
(43, 'PR', 'PR'),
(44, 'PE', 'PE'),
(45, 'PI', 'PI'),
(46, 'RJ', 'RJ'),
(47, 'RN', 'RN'),
(48, 'RS', 'RS'),
(49, 'RO', 'RO'),
(50, 'RR', 'RR'),
(51, 'SC', 'SC'),
(52, 'SP', 'SP'),
(53, 'SE', 'SE'),
(54, 'TO', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `ssid` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf`, `email`, `cargo`, `usuario`, `senha`, `ssid`) VALUES
(5, 'top', '03344579126', 'top@top', 'top', 'top', '43775dffac83153e7af57895dc3f6f8b766c8995', 'irviPGCb94nAoyvTQORixbdRLXm82dqcUVgNC3peNhQqMk7amS3aRSFytYkVAGRAVkY7PugKfsPRcQmFn1MDxgkFnwtCEMDz1r7jy6gPSVInbBCCJj9Ko4sYLJHbOTgnUw9tStpG8SZkQnMXt7bhUzAmJx0fmeYyC4qvmFrSrmf6DDqh5j1x3bMKDo8MZQ7TJGHTZnVelWaMDvV2vbbficjAwuLeXxUb2DKYnfjOBIjJYH4ndfNj0BH3lCbEDpDv'),
(6, 'bah', '', '', '', 'bah', '4afa9319cdf1a0acf4f79b9392d776b7ad16c276', '5VBVPI1aw8Kh47ovWJlGJpPFZUaF8kekBNcaf0XfU7tLh0m5U1m5LEkOMb4Zsu634lmb0Q4UygriatqEcTGaV9abqHRdJR40UIRbaQs1OSkBuHyWoe0Z9SNEQDIN3PI6HLerf9mbBMUw7gXQQIjFTfLVL2MRwgDsbJQZoG29c9oSEebKYEfyaoPhKCYjg0aHsgbTXmy3kBr02LpsP2xSc3AVeKPhHiwwaDAqcqN0a5wVuwwkQFkxpQ6upmSABZue'),
(21, 'aaaaa', '717', '', 'aaaaa', 'aaaaa', '12f2fe9d57e6178eb2c199683e66f3bfd7007d69', ''),
(22, 'aaaaa', '123123', '', 'aaaaa', 'bbbbbbbb', '12f2fe9d57e6178eb2c199683e66f3bfd7007d69', ''),
(29, 'top', '1234', '', 'top', 'toptop', 'f8b68b6a7118c3c09f0ae77e68dcabae18f71d4c', ''),
(30, 'vaivai', '51878615', '', 'vaivai', 'vaivai', 'beb6e10d087f23104ddfd39c59b6296dabb11d1f', ''),
(31, 'semnet', '02314874', 'semnet@semnet', 'semnet', 'semnet', 'd3c553e2baa618e414ef7567911e41f2903cc04d', 'yDtyOzBEI3tsHXLK9Tqb7Rs2N9yJq0gN4UXmrdLprLMhkPxakaJ36elUr5HVkD39rOdsCRxGk48VHHxIN66mrJP7gae5sMMBC2KjD1yrM8Dk1fs4Pryqa5Ef53gPQKzH2TkwoNemjVGHYC87H8VXGSFWam8EoC5kBoFqJpevKETLTNSo0yuXZMZTbuQmKqgCZnSky4jFdv8zngAosAiXKu47kAjziSUSU5KFjUjPgiqcCCHWb4P7uW9FdD8rC3oJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf-cnpj` (`cpf-cnpj`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
