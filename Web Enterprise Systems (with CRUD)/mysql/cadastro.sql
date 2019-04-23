-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2019 às 16:34
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
