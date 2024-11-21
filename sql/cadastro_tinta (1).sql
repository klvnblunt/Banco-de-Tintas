-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 01:51
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `aprovados_beneficiario`
--

CREATE TABLE `aprovados_beneficiario` (
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `aprovados_doacao`
--

CREATE TABLE `aprovados_doacao` (
  `id_doação` int(11) NOT NULL,
  `data_validade` date NOT NULL,
  `qt_litro` varchar(200) NOT NULL,
  `qt_latas` varchar(200) NOT NULL,
  `cor` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `tamanho` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `contato` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `doacao`
--

CREATE TABLE `doacao` (
  `id_doação` int(11) NOT NULL,
  `data_validade` date NOT NULL,
  `qt_litro` varchar(60) NOT NULL,
  `qt_latas` varchar(60) NOT NULL,
  `cor` varchar(200) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `tamanho` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `contato` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_nacimento` date NOT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_pessoa`, `nome`, `endereco`, `telefone`, `email`, `data_nacimento`, `senha`) VALUES
(36, 'tania', 'rua lala', '11999999999', 'taniakkj@gmail.com', '2003-03-24', '$2y$10$pwB7H2Ix8'),
(40, 'Jonas Kelvin Costa', 'Rua Londrina Vila Maringa', '11944494173', 'jonasklvn1234@gmail.com', '2003-03-24', '$2y$10$g49JypO/Vz6f4AXPLqMLluxgVOBitVTMSPgs0/YLTWDbQGYmcc3.6'),
(44, 'teste', 'teste', '11999999999', 'teste@gmail.com', '2003-03-24', '$2y$10$tldqdAWu15DLIpT4cntGOOXOO.zbDnq4lNee.0GpeULEhdu36iufu'),
(45, 'joao', 'tal', '123213232', 'joao@gmail.com', '2006-06-28', '$2y$10$fKZCtXYs25xerE1p83shNOSQr8eSCqP12agXwlWlDFHlNbh..UeOK'),
(46, '', '', '', '', '0000-00-00', '$2y$10$SxjYIy2IceqxxxYNMaiTLeZT69.qYCupKygucUGhZOTs6oSf6Ieg2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_adm`
--

CREATE TABLE `usuario_adm` (
  `id_adm` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `RA` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario_adm`
--

INSERT INTO `usuario_adm` (`id_adm`, `nome`, `email`, `curso`, `RA`, `senha`) VALUES
(3, 'Jonas Kelvin Costa', 'jonas.costa6@fatec.sp.gov.br', 'Analise e Desenvolvimento de Sistemas', '765436543', '$2y$10$bcWh9QrWcJZnas1kMgp0E.qEezddWkO034MBgE2x4Us9YMeX.HvXu');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm_aprovação`
--
ALTER TABLE `adm_aprovação`
  ADD PRIMARY KEY (`id_doação`);

--
-- Índices de tabela `aprovados_beneficiario`
--
ALTER TABLE `aprovados_beneficiario`
  ADD PRIMARY KEY (`id_doação`);

--
-- Índices de tabela `aprovados_doacao`
--
ALTER TABLE `aprovados_doacao`
  ADD PRIMARY KEY (`id_doação`);

--
-- Índices de tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id_doação`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices de tabela `usuario_adm`
--
ALTER TABLE `usuario_adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm_aprovação`
--
ALTER TABLE `adm_aprovação`
  MODIFY `id_doação` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `aprovados_beneficiario`
--
ALTER TABLE `aprovados_beneficiario`
  MODIFY `id_doação` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `aprovados_doacao`
--
ALTER TABLE `aprovados_doacao`
  MODIFY `id_doação` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id_doação` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `usuario_adm`
--
ALTER TABLE `usuario_adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
