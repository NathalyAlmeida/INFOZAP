-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Dez-2019 às 00:28
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zapmoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `moveis`
--

CREATE TABLE `moveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `movel` varchar(40) NOT NULL,
  `preco` int(4) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jezmael', 'Basilio', 'jezmael@info.com', '$2y$10$LDRX3vHgz9/wPPTPOVcFtOOGdnMj5S8MyMFSGgtg43COIthE5bSz2', '2019-09-18 00:00:00', '2019-09-18 16:29:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `moveis`
--
ALTER TABLE `moveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `moveis`
--
ALTER TABLE `moveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
