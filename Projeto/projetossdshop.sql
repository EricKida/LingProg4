-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 05:48
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetossdshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ssd`
--

CREATE TABLE `ssd` (
  `cd_ssd` int(11) NOT NULL,
  `nm_ssd` varchar(50) NOT NULL,
  `nm_marca_ssd` varchar(50) NOT NULL,
  `qt_armazenamento_ssd` int(11) NOT NULL,
  `vl_preco_ssd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ssd`
--

INSERT INTO `ssd` (`cd_ssd`, `nm_ssd`, `nm_marca_ssd`, `qt_armazenamento_ssd`, `vl_preco_ssd`) VALUES
(1, 'SSD 480GB KINGSTON A400 SATA', 'Kingston', 480, 199),
(2, 'SSD 240GB KINGSTON A400 SATA', 'Kingston', 240, 128),
(3, 'SSD 128GB HUSKY GAMING 2.5\' SATA III', 'Husky', 128, 78),
(4, 'SSD 256GB HUSKY GAMING 2.5\' SATA III', 'Husky', 256, 112),
(5, 'SSD 240GB CRUCIAL BX500 SATA', 'Crucial', 240, 134),
(6, 'SSD 480GB CRUCIAL BX500 SATA', 'Crucial', 480, 207),
(7, 'SSD 240GB SANDISK PLUS SATA', 'SanDisk', 240, 129),
(8, 'SSD 1TB SANDISK PLUS SATA III', 'SanDisk', 1000, 426);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`cd_ssd`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ssd`
--
ALTER TABLE `ssd`
  MODIFY `cd_ssd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
