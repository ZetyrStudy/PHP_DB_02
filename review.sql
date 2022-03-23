-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2022 às 23:19
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `review`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` enum('ativo','inativo','apagado') NOT NULL DEFAULT 'ativo',
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `status`, `data`) VALUES
(1, 'Marineuza Siriliano', 'mari@neuza.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 22:00:59'),
(2, 'Edinalson Marquisano', 'edi@nalson.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 22:00:59'),
(3, 'Setembrino Troque', 'setem@brino.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 22:03:58'),
(4, 'Augustina Oliveira', 'aug@ustina.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 22:03:58'),
(5, 'André Silva', 'andre@silva.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'inativo', '2022-03-22 20:25:38'),
(6, 'Alexandre Silveira', 'alex@silveira.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 20:25:42'),
(7, 'DanielaRiacho','dani@ria.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 20:25:38'),
(8, 'Silvina Silvante', 'sil@sil.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 20:25:38'),
(9, 'Susan Pereira', 'sus@per.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'apagado', '2022-03-22 20:25:38'),
(10, 'Sandra Melo', 'san@mel.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ativo', '2022-03-22 20:25:38');




--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
