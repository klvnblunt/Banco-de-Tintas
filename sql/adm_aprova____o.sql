-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 01:49
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_tinta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_aprovação`
--

CREATE TABLE `adm_aprovação` (
  `id_doação` int(11) NOT NULL,
  `data_validade` varchar(200) NOT NULL,
  `qt_litro` varchar(200) NOT NULL,
  `qt_latas` varchar(200) NOT NULL,
  `cor` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `tamanho` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `contato` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `adm_aprovação`
--

INSERT INTO `adm_aprovação` (`id_doação`, `data_validade`, `qt_litro`, `qt_latas`, `cor`, `tipo`, `tamanho`, `marca`, `nome`, `contato`) VALUES
(1, '2025-05-20', '1_a_2litros', '4', 'branco ', 'alvinaria', '3,6litros', 'teste', 'teste', '11999999999'),
(2, '2025-04-20', '2_a_5litros', '2', 'azul escuro ', 'madeira', '900ml', 'teste', 'tania', '1198765432'),
(3, '2020-03-20', '1litro', '1', 'teste', 'alvinaria', '900ml', 'coral', 'joao', '11912341234'),
(4, '2025-05-20', '10_litros', '6', 'azul', 'madeira', '18litros', 'teste', 'teste', '48170491894'),
(5, '2025-03-20', '5_a_10litros', '3', 'amarelo', 'alvinaria', '3,6litros', 'suvenil', 'joao', '48170491894');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm_aprovação`
--
ALTER TABLE `adm_aprovação`
  ADD PRIMARY KEY (`id_doação`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm_aprovação`
--
ALTER TABLE `adm_aprovação`
  MODIFY `id_doação` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
