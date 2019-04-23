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
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
