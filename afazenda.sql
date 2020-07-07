-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/07/2020 às 19:19
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `afazenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_coleta_leite`
--

CREATE TABLE `tb_coleta_leite` (
  `CD_CODIGO` int(11) NOT NULL,
  `CD_CRIADOR` int(11) NOT NULL,
  `DT_COLETA` date NOT NULL,
  `CD_GADO_LEITEIRO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_criador`
--

CREATE TABLE `tb_criador` (
  `CD_CODIGO` int(11) NOT NULL,
  `NM_NOME` varchar(100) NOT NULL,
  `DT_NASC` date NOT NULL,
  `NM_CPF` varchar(11) NOT NULL,
  `NM_RG` varchar(9) NOT NULL,
  `NM_SEXO` varchar(1) NOT NULL,
  `NM_ENDERECO` varchar(100) NOT NULL,
  `VL_SALARIO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_fazendeiro`
--

CREATE TABLE `tb_fazendeiro` (
  `CD_CODIGO` int(11) NOT NULL,
  `NM_NOME` varchar(100) NOT NULL,
  `DT_NASC` date NOT NULL,
  `NM_CPF` varchar(11) NOT NULL,
  `NM_RG` varchar(9) NOT NULL,
  `NM_SEXO` varchar(1) NOT NULL,
  `NM_ENDERECO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_gado`
--

CREATE TABLE `tb_gado` (
  `CD_CODIGO` int(11) NOT NULL,
  `CD_REBANHO` int(11) NOT NULL,
  `NM_NOME` varchar(20) NOT NULL,
  `DT_NASC` date NOT NULL,
  `NM_SEXO` varchar(1) NOT NULL,
  `CD_PAI` int(11) NOT NULL,
  `CD_MAE` int(11) NOT NULL,
  `VL_PRECO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_gado_leiteiro`
--

CREATE TABLE `tb_gado_leiteiro` (
  `CD_CODIGO` int(11) NOT NULL,
  `CD_GADO` int(11) NOT NULL,
  `CD_CRIADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_rebanho`
--

CREATE TABLE `tb_rebanho` (
  `CD_CODIGO` int(11) NOT NULL,
  `CD_FAZENDEIRO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_coleta_leite`
--
ALTER TABLE `tb_coleta_leite`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- Índices de tabela `tb_criador`
--
ALTER TABLE `tb_criador`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- Índices de tabela `tb_fazendeiro`
--
ALTER TABLE `tb_fazendeiro`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- Índices de tabela `tb_gado`
--
ALTER TABLE `tb_gado`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- Índices de tabela `tb_gado_leiteiro`
--
ALTER TABLE `tb_gado_leiteiro`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- Índices de tabela `tb_rebanho`
--
ALTER TABLE `tb_rebanho`
  ADD PRIMARY KEY (`CD_CODIGO`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_coleta_leite`
--
ALTER TABLE `tb_coleta_leite`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_criador`
--
ALTER TABLE `tb_criador`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_fazendeiro`
--
ALTER TABLE `tb_fazendeiro`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_gado`
--
ALTER TABLE `tb_gado`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_gado_leiteiro`
--
ALTER TABLE `tb_gado_leiteiro`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_rebanho`
--
ALTER TABLE `tb_rebanho`
  MODIFY `CD_CODIGO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
