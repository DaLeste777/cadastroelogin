-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 02:14
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `recado` varchar(255) NOT NULL,
  `dataCriacao` datetime NOT NULL,
  `dCriacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `nome`, `recado`, `dataCriacao`, `dCriacao`) VALUES
(5, 'Bruna', 'Eu te amo mais!', '0000-00-00 00:00:00', '2022-06-17 20:44:14'),
(6, 'Matheus', 'Comprar um tênis.', '0000-00-00 00:00:00', '2022-06-20 21:08:11'),
(7, 'Paulo ', 'Terminar de pintar a cozinha.', '0000-00-00 00:00:00', '2022-06-20 21:08:35'),
(8, '1 Venda', 'Camisa vermelha', '0000-00-00 00:00:00', '2022-06-20 21:09:25'),
(9, 'Futebol', 'Palmeiras x São Paulo', '0000-00-00 00:00:00', '2022-06-20 21:10:49'),
(10, 'Compras', 'Escova de Dentes', '0000-00-00 00:00:00', '2022-06-20 21:11:12'),
(11, 'Planeta', 'Terra', '0000-00-00 00:00:00', '2022-06-20 21:12:06'),
(12, 'Matheus', 'Backup Feito', '0000-00-00 00:00:00', '2022-06-20 21:12:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `data_cadastro`) VALUES
(1, 'matheus', '45339359513f09155110f63f7ca91c3e', 'matheus', '2022-06-16 20:27:48'),
(2, 'brunasantiago', 'e10adc3949ba59abbe56e057f20f883e', 'Bruna', '2022-06-17 20:43:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
