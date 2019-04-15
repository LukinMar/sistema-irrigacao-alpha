-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Abr-2019 às 19:04
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemairrigacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(11) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `comercial` varchar(15) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `celular`, `comercial`, `mensagem`) VALUES
(3, 'lucas&#39;', 'lucas@lucas', '21976844161', '2138337061', 'adadadsfasdfiuasdhgfuioasdhfioasduhfuioasdfh\r\n'),
(4, 'adasd', 'asdasd@asda', 'asdasd', 'asdasd', 'asd'),
(5, '1312312', '123123@1231', '123123', '123123', '123123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `temp` varchar(10) NOT NULL,
  `ur` varchar(10) NOT NULL,
  `us` varchar(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `temp`, `ur`, `us`, `data`) VALUES
(1, '29.00', '69.00', '68', '2019-04-14 06:12:26'),
(2, '28.80', '68.00', '65', '2019-04-14 06:13:26'),
(3, '28.10', '71.00', '61', '2019-04-14 06:14:27'),
(4, '28.00', '72.00', '60', '2019-04-14 06:15:27'),
(5, '27.90', '71.00', '59', '2019-04-14 06:16:27'),
(6, '28.30', '71.00', '60', '2019-04-14 06:17:27'),
(7, '28.30', '71.00', '59', '2019-04-14 06:18:28'),
(8, '28.50', '70.00', '59', '2019-04-14 06:19:28'),
(9, '28.60', '69.00', '60', '2019-04-14 06:20:28'),
(10, '28.90', '69.00', '60', '2019-04-14 06:21:28'),
(11, '29.00', '69.00', '59', '2019-04-14 06:22:29'),
(12, '28.90', '68.00', '59', '2019-04-14 06:23:29'),
(13, '28.40', '70.00', '58', '2019-04-14 06:24:29'),
(14, '28.30', '71.00', '59', '2019-04-14 06:25:29'),
(15, '28.60', '70.00', '59', '2019-04-14 06:26:30'),
(16, '28.40', '70.00', '59', '2019-04-14 06:27:30'),
(17, '28.30', '71.00', '58', '2019-04-14 06:28:30'),
(18, '28.60', '69.00', '60', '2019-04-14 06:29:30'),
(19, '28.60', '70.00', '59', '2019-04-14 06:30:31'),
(20, '28.60', '69.00', '60', '2019-04-14 06:31:31'),
(21, '28.70', '69.00', '59', '2019-04-14 06:32:31'),
(22, '28.90', '68.00', '59', '2019-04-14 06:33:31'),
(23, '29.00', '70.00', '59', '2019-04-14 06:34:32'),
(24, '28.20', '71.00', '59', '2019-04-14 06:35:32'),
(25, '27.90', '71.00', '60', '2019-04-14 06:36:32'),
(26, '15', '50', '75', '2019-04-15 16:27:37'),
(27, '15', '50', '75', '2019-04-15 16:28:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `acesso` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`, `email`, `acesso`, `id`) VALUES
('root', '1234', 'lucas@email.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
