-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2024 às 22:37
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdvoyage`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(50) NOT NULL,
  `sobrenomeAdmin` varchar(50) NOT NULL,
  `cpfAdmin` char(14) NOT NULL,
  `imgAdmin` varchar(100) NOT NULL,
  `tokenAdmin` varchar(50) NOT NULL,
  `senhaAdmin` varchar(50) NOT NULL,
  `emailAdmin` varchar(100) NOT NULL,
  `nascAdmin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpassagem`
--

CREATE TABLE `tbpassagem` (
  `idPassagem` int(11) NOT NULL,
  `nomePais` varchar(70) NOT NULL,
  `capitalPais` varchar(50) NOT NULL,
  `imgPais` varchar(100) NOT NULL,
  `precoPassagem` double NOT NULL,
  `origem` varchar(50) NOT NULL,
  `hospedagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbstatus`
--

CREATE TABLE `tbstatus` (
  `idStatus` int(11) NOT NULL,
  `tipoStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `IdUser` int(11) NOT NULL,
  `nomeUser` varchar(50) NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `imgUser` varchar(100) NOT NULL,
  `nascUser` date NOT NULL,
  `cpfUser` char(15) NOT NULL,
  `foneUser` bigint(20) NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `nacionalidadeUser` varchar(30) NOT NULL,
  `generoUser` varchar(30) NOT NULL,
  `senhaUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tbpassagem`
--
ALTER TABLE `tbpassagem`
  ADD PRIMARY KEY (`idPassagem`);

--
-- Índices para tabela `tbstatus`
--
ALTER TABLE `tbstatus`
  ADD PRIMARY KEY (`idStatus`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `senhaUser` (`senhaUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpassagem`
--
ALTER TABLE `tbpassagem`
  MODIFY `idPassagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbstatus`
--
ALTER TABLE `tbstatus`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
