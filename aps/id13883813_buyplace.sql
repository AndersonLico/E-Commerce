-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04-Jun-2020 às 22:06
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id13883813_buyplace`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `titulo`) VALUES
(1, 'Chinelos'),
(2, 'Camisas'),
(3, 'Brmudas'),
(4, 'Cuecas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `nome`) VALUES
(1, 'Grátis'),
(2, 'Pagseguro'),
(3, 'Paypal'),
(4, 'Boleto'),
(5, 'MoIP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `imagem` varchar(36) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_categoria`, `nome`, `imagem`, `preco`, `quantidade`, `descricao`) VALUES
(1, 1, 'Chinelo', 'chinelo.jpg', 35, 45, 'Descrição do meu produto 1'),
(2, 2, 'Camisa', 'camisas.jpg', 75, 75, 'Descrição do meu produto 2'),
(3, 3, 'Bermudas', 'bermuda.jpg', 55, 55, 'Descrição do meu produto 3'),
(4, 4, 'Cueca', 'cueca3.jpg', 25, 43, 'Descrição do meu produto 4'),
(5, 4, 'Cueca', 'cueca1.jpg', 25, 43, 'Descrição do meu produto 5'),
(6, 3, 'Bermudas', 'bermuda1.jpg', 55, 55, 'Descrição do meu produto 6'),
(7, 2, 'Camisa', 'camisas2.jpg', 55, 75, 'Descrição do meu produto 7'),
(8, 1, 'Chinelo', 'chinelo1.jpg', 35, 45, 'Descrição do meu produto 8'),
(9, 4, 'Cueca', 'cueca2.jpg', 25, 43, 'Descrição do meu produto 9'),
(10, 2, 'Camisa', 'camisas3.jpg', 75, 75, 'Descrição do meu produto 10'),
(11, 3, 'Bermudas', 'bermuda2.jpg', 55, 55, 'Descrição do meu produto 11'),
(12, 1, 'Chinelo', 'chinelo2.jpg', 35, 45, 'Descrição do meu produto 12'),
(13, 3, 'Bermudas', 'bermuda3.jpg', 55, 55, 'Descrição do meu produto 13'),
(14, 1, 'Chinelo', 'chinelo.jpg', 35, 45, 'Descrição do meu produto 14'),
(15, 2, 'Camisa', 'camisas4.jpg', 75, 75, 'Descrição do meu produto 15'),
(16, 1, 'Chinelo', 'chinelo3.jpg', 35, 45, 'Descrição do meu produto 16'),
(17, 1, 'Chinelo', 'chinelo4.jpg', 35, 45, 'Descrição do meu produto 17'),
(18, 3, 'Bermudas', 'bermuda4.jpg', 55, 55, 'Descrição do meu produto 18'),
(19, 2, 'Camisa', 'camisas2.jpg', 75, 75, 'Descrição do meu produto 19'),
(20, 1, 'Chinelo', 'chinelo4.jpg', 35, 45, 'Descrição do meu produto 20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Allan', 'allan@buyplace.com', '123456'),
(2, 'Alan', 'alan@buyplace.com', '123456'),
(5, 'Caio', 'caiofaustino99@buyplace.com', '123456'),
(7, '', 'elenogata@buyplace.com', '123456'),
(8, 'Mayumi', 'mayumi@buyplace.com', '123456'),
(9, 'Zé Andisu', 'zeca@gmail.com', '37392028'),
(10, 'elen', 'elenogata@gmail.com', 'allan'),
(11, 'pacocamaluca', 'pacoca@pacoca.com.br', 'amendoim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `forma_pg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
