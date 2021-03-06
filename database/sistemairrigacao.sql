-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2019 às 06:49
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
CREATE DATABASE IF NOT EXISTS `sistemairrigacao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistemairrigacao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `comercial` varchar(15) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '29.00', '69.00', '68', '2019-04-15 09:12:26'),
(2, '28.80', '68.00', '65', '2019-04-15 09:13:26'),
(3, '28.10', '71.00', '61', '2019-04-15 09:14:27'),
(4, '28.00', '72.00', '60', '2019-04-15 09:15:27'),
(5, '27.90', '71.00', '59', '2019-04-15 09:16:27'),
(6, '28.30', '71.00', '60', '2019-04-15 09:17:27'),
(7, '28.30', '71.00', '59', '2019-04-15 09:18:28'),
(8, '28.50', '70.00', '59', '2019-04-15 09:19:28'),
(9, '28.60', '69.00', '60', '2019-04-15 09:20:28'),
(10, '28.90', '69.00', '60', '2019-04-15 09:21:28'),
(11, '29.00', '69.00', '59', '2019-04-15 09:22:29'),
(12, '28.90', '68.00', '59', '2019-04-15 09:23:29'),
(13, '28.40', '70.00', '58', '2019-04-15 09:24:29'),
(14, '28.30', '71.00', '59', '2019-04-15 09:25:29'),
(15, '28.60', '70.00', '59', '2019-04-15 09:26:30'),
(16, '28.40', '70.00', '59', '2019-04-15 09:27:30'),
(17, '28.30', '71.00', '58', '2019-04-15 09:28:30'),
(18, '28.60', '69.00', '60', '2019-04-15 09:29:30'),
(19, '28.60', '70.00', '59', '2019-04-15 09:30:31'),
(20, '28.60', '69.00', '60', '2019-04-15 09:31:31'),
(21, '28.70', '69.00', '59', '2019-04-15 09:32:31'),
(22, '28.90', '68.00', '59', '2019-04-15 09:33:31'),
(23, '29.00', '70.00', '59', '2019-04-15 09:34:32'),
(24, '28.20', '71.00', '59', '2019-04-15 09:35:32'),
(25, '27.90', '71.00', '60', '2019-04-15 09:36:32'),
(27, '28.80', '68.00', '65', '2019-04-15 09:38:26'),
(28, '28.10', '71.00', '61', '2019-04-15 09:39:27'),
(29, '28.00', '72.00', '60', '2019-04-15 09:40:27'),
(30, '27.90', '71.00', '59', '2019-04-15 09:41:27'),
(31, '28.30', '71.00', '60', '2019-04-15 09:42:27'),
(32, '28.30', '71.00', '59', '2019-04-15 09:43:28'),
(33, '28.50', '70.00', '59', '2019-04-15 09:44:28'),
(34, '28.60', '69.00', '60', '2019-04-15 09:45:28'),
(35, '28.90', '69.00', '60', '2019-04-15 09:46:28'),
(36, '29.00', '69.00', '59', '2019-04-15 09:47:29'),
(37, '28.90', '68.00', '59', '2019-04-15 09:48:29'),
(38, '28.40', '70.00', '58', '2019-04-15 09:49:29'),
(39, '28.30', '71.00', '59', '2019-04-15 09:50:29'),
(40, '28.60', '70.00', '59', '2019-04-15 09:51:30'),
(41, '28.40', '70.00', '59', '2019-04-15 09:52:30'),
(42, '28.30', '71.00', '58', '2019-04-15 09:53:30'),
(43, '28.60', '69.00', '60', '2019-04-15 09:54:30'),
(44, '28.60', '70.00', '59', '2019-04-15 09:55:31'),
(45, '28.60', '69.00', '60', '2019-04-15 09:56:31'),
(46, '28.70', '69.00', '59', '2019-04-15 09:57:31'),
(47, '28.90', '68.00', '59', '2019-04-15 09:58:31'),
(48, '29.00', '70.00', '59', '2019-04-15 09:59:32'),
(49, '28.20', '71.00', '59', '2019-04-15 10:00:32'),
(50, '27.90', '71.00', '60', '2019-04-15 10:01:32'),
(51, '29.00', '69.00', '68', '2019-04-15 10:02:26'),
(52, '28.80', '68.00', '65', '2019-04-15 10:03:26'),
(53, '28.10', '71.00', '61', '2019-04-15 10:04:27'),
(54, '28.00', '72.00', '60', '2019-04-15 10:05:27'),
(55, '27.90', '71.00', '59', '2019-04-15 10:06:27'),
(56, '28.30', '71.00', '60', '2019-04-15 10:07:27'),
(57, '28.30', '71.00', '59', '2019-04-15 10:08:27'),
(58, '28.50', '70.00', '59', '2019-04-15 10:09:27'),
(59, '28.60', '69.00', '60', '2019-04-15 10:10:27'),
(60, '28.90', '69.00', '60', '2019-04-15 10:11:27'),
(61, '29.00', '69.00', '59', '2019-04-15 10:12:27'),
(62, '28.90', '68.00', '59', '2019-04-15 10:13:27'),
(63, '28.40', '70.00', '58', '2019-04-15 10:14:27'),
(64, '28.30', '71.00', '59', '2019-04-15 10:15:27'),
(65, '28.60', '70.00', '59', '2019-04-15 10:16:27'),
(66, '28.40', '70.00', '59', '2019-04-15 10:17:27'),
(67, '28.30', '71.00', '58', '2019-04-15 10:18:27'),
(68, '28.60', '69.00', '60', '2019-04-15 10:19:27'),
(69, '28.60', '70.00', '59', '2019-04-15 10:20:27'),
(70, '28.60', '69.00', '60', '2019-04-15 10:21:27'),
(71, '28.70', '69.00', '59', '2019-04-15 10:22:27'),
(72, '28.90', '68.00', '59', '2019-04-15 10:23:27'),
(73, '29.00', '70.00', '59', '2019-04-15 10:24:27'),
(74, '28.20', '71.00', '59', '2019-04-15 10:25:27'),
(75, '27.90', '71.00', '60', '2019-04-15 10:26:27'),
(154, '29.00', '69.00', '68', '2019-04-15 12:12:26'),
(155, '28.80', '68.00', '65', '2019-04-15 12:13:26'),
(156, '28.10', '71.00', '61', '2019-04-15 12:14:27'),
(157, '28.00', '72.00', '60', '2019-04-15 12:15:27'),
(158, '27.90', '71.00', '59', '2019-04-15 12:15:27'),
(159, '28.30', '71.00', '60', '2019-04-15 12:17:27'),
(160, '28.30', '71.00', '59', '2019-04-15 12:18:28'),
(161, '28.50', '70.00', '59', '2019-04-15 12:19:28'),
(162, '28.60', '69.00', '60', '2019-04-15 12:20:28'),
(163, '28.90', '69.00', '60', '2019-04-15 12:21:28'),
(164, '29.00', '69.00', '59', '2019-04-15 12:22:29'),
(165, '28.90', '68.00', '59', '2019-04-15 12:23:29'),
(166, '28.40', '70.00', '58', '2019-04-15 12:24:29'),
(167, '28.30', '71.00', '59', '2019-04-15 12:25:29'),
(168, '28.60', '70.00', '59', '2019-04-15 12:26:30'),
(169, '28.40', '70.00', '59', '2019-04-15 12:27:30'),
(170, '28.30', '71.00', '58', '2019-04-15 12:28:30'),
(171, '28.60', '69.00', '60', '2019-04-15 12:29:30'),
(172, '28.60', '70.00', '59', '2019-04-15 12:30:31'),
(173, '28.60', '69.00', '60', '2019-04-15 12:31:31'),
(174, '28.70', '69.00', '59', '2019-04-15 12:32:31'),
(175, '28.90', '68.00', '59', '2019-04-15 12:33:31'),
(176, '29.00', '70.00', '59', '2019-04-15 12:34:32'),
(177, '28.20', '71.00', '59', '2019-04-15 12:35:32'),
(178, '27.90', '71.00', '60', '2019-04-15 12:36:32'),
(179, '28.80', '68.00', '65', '2019-04-15 12:38:26'),
(180, '28.10', '71.00', '61', '2019-04-15 12:39:27'),
(181, '28.00', '72.00', '60', '2019-04-15 12:40:27'),
(182, '27.90', '71.00', '59', '2019-04-15 12:41:27'),
(183, '28.30', '71.00', '60', '2019-04-15 12:42:27'),
(184, '28.30', '71.00', '59', '2019-04-15 12:43:28'),
(185, '28.50', '70.00', '59', '2019-04-15 12:44:28'),
(186, '28.60', '69.00', '60', '2019-04-15 12:45:28'),
(187, '28.90', '69.00', '60', '2019-04-15 12:46:28'),
(188, '29.00', '69.00', '59', '2019-04-15 12:47:29'),
(189, '28.90', '68.00', '59', '2019-04-15 12:48:29'),
(190, '28.40', '70.00', '58', '2019-04-15 12:49:29'),
(191, '28.30', '71.00', '59', '2019-04-15 12:50:29'),
(192, '28.60', '70.00', '59', '2019-04-15 12:51:30'),
(193, '28.40', '70.00', '59', '2019-04-15 12:52:30'),
(194, '28.30', '71.00', '58', '2019-04-15 12:53:30'),
(195, '28.60', '69.00', '60', '2019-04-15 12:54:30'),
(196, '28.60', '70.00', '59', '2019-04-15 12:55:31'),
(197, '28.60', '69.00', '60', '2019-04-15 12:56:31'),
(198, '28.70', '69.00', '59', '2019-04-15 12:57:31'),
(199, '28.90', '68.00', '59', '2019-04-15 12:58:31'),
(200, '29.00', '70.00', '59', '2019-04-15 12:59:32'),
(201, '28.20', '71.00', '59', '2019-04-15 13:00:32'),
(202, '27.90', '71.00', '60', '2019-04-15 13:01:32'),
(203, '29.00', '69.00', '68', '2019-04-15 13:02:26'),
(204, '28.80', '68.00', '65', '2019-04-15 13:03:26'),
(205, '28.10', '71.00', '61', '2019-04-15 13:04:27'),
(206, '28.00', '72.00', '60', '2019-04-15 13:05:27'),
(207, '27.90', '71.00', '59', '2019-04-15 13:06:27'),
(208, '28.30', '71.00', '60', '2019-04-15 13:07:27'),
(209, '28.30', '71.00', '59', '2019-04-15 13:08:27'),
(210, '28.50', '70.00', '59', '2019-04-15 13:09:27'),
(211, '28.60', '69.00', '60', '2019-04-15 13:10:27'),
(212, '28.90', '69.00', '60', '2019-04-15 13:11:27'),
(213, '29.00', '69.00', '59', '2019-04-15 13:12:27'),
(214, '28.90', '68.00', '59', '2019-04-15 13:13:27'),
(215, '28.40', '70.00', '58', '2019-04-15 13:14:27'),
(216, '28.30', '71.00', '59', '2019-04-15 13:15:27'),
(217, '28.60', '70.00', '59', '2019-04-15 13:15:27'),
(218, '28.40', '70.00', '59', '2019-04-15 13:17:27'),
(219, '28.30', '71.00', '58', '2019-04-15 13:18:27'),
(220, '28.60', '69.00', '60', '2019-04-15 13:19:27'),
(221, '28.60', '70.00', '59', '2019-04-15 13:20:27'),
(222, '28.60', '69.00', '60', '2019-04-15 13:21:27'),
(223, '28.70', '69.00', '59', '2019-04-15 13:22:27'),
(224, '28.90', '68.00', '59', '2019-04-15 13:23:27'),
(225, '29.00', '70.00', '59', '2019-04-15 13:24:27'),
(226, '28.20', '71.00', '59', '2019-04-15 13:25:27'),
(227, '27.90', '71.00', '60', '2019-04-15 13:26:27'),
(228, '29.00', '69.00', '68', '2019-04-15 13:12:26'),
(229, '28.80', '68.00', '65', '2019-04-15 13:13:26'),
(230, '28.10', '71.00', '61', '2019-04-15 13:14:27'),
(231, '28.00', '72.00', '60', '2019-04-15 13:15:27'),
(232, '27.90', '71.00', '59', '2019-04-15 13:15:27'),
(233, '28.30', '71.00', '60', '2019-04-15 13:17:27'),
(234, '28.30', '71.00', '59', '2019-04-15 13:18:28'),
(235, '28.50', '70.00', '59', '2019-04-15 13:19:28'),
(236, '28.60', '69.00', '60', '2019-04-15 13:20:28'),
(237, '28.90', '69.00', '60', '2019-04-15 13:21:28'),
(238, '29.00', '69.00', '59', '2019-04-15 13:22:29'),
(239, '28.90', '68.00', '59', '2019-04-15 13:23:29'),
(240, '28.40', '70.00', '58', '2019-04-15 13:24:29'),
(241, '28.30', '71.00', '59', '2019-04-15 13:25:29'),
(242, '28.60', '70.00', '59', '2019-04-15 13:26:30'),
(243, '28.40', '70.00', '59', '2019-04-15 13:27:30'),
(244, '28.30', '71.00', '58', '2019-04-15 13:28:30'),
(245, '28.60', '69.00', '60', '2019-04-15 13:29:30'),
(246, '28.60', '70.00', '59', '2019-04-15 13:30:31'),
(247, '28.60', '69.00', '60', '2019-04-15 13:31:31'),
(248, '28.70', '69.00', '59', '2019-04-15 13:32:31'),
(249, '28.90', '68.00', '59', '2019-04-15 13:33:31'),
(250, '29.00', '70.00', '59', '2019-04-15 13:34:32'),
(251, '28.20', '71.00', '59', '2019-04-15 13:35:32'),
(252, '27.90', '71.00', '60', '2019-04-15 13:36:32'),
(253, '28.80', '68.00', '65', '2019-04-15 13:38:26'),
(254, '28.10', '71.00', '61', '2019-04-15 13:39:27'),
(255, '28.00', '72.00', '60', '2019-04-15 13:40:27'),
(256, '27.90', '71.00', '59', '2019-04-15 13:41:27'),
(257, '28.30', '71.00', '60', '2019-04-15 13:42:27'),
(258, '28.30', '71.00', '59', '2019-04-15 13:43:28'),
(259, '28.50', '70.00', '59', '2019-04-15 13:44:28'),
(260, '28.60', '69.00', '60', '2019-04-15 13:45:28'),
(261, '28.90', '69.00', '60', '2019-04-15 13:46:28'),
(262, '29.00', '69.00', '59', '2019-04-15 13:47:29'),
(263, '28.90', '68.00', '59', '2019-04-15 13:48:29'),
(264, '28.40', '70.00', '58', '2019-04-15 13:49:29'),
(265, '28.30', '71.00', '59', '2019-04-15 13:50:29'),
(266, '28.60', '70.00', '59', '2019-04-15 13:51:30'),
(267, '28.40', '70.00', '59', '2019-04-15 13:52:30'),
(268, '28.30', '71.00', '58', '2019-04-15 13:53:30'),
(269, '28.60', '69.00', '60', '2019-04-15 13:54:30'),
(270, '28.60', '70.00', '59', '2019-04-15 13:55:31'),
(271, '28.60', '69.00', '60', '2019-04-15 13:56:31'),
(272, '28.70', '69.00', '59', '2019-04-15 13:57:31'),
(273, '28.90', '68.00', '59', '2019-04-15 13:58:31'),
(274, '29.00', '70.00', '59', '2019-04-15 13:59:32'),
(275, '28.20', '71.00', '59', '2019-04-15 13:00:32'),
(276, '27.90', '71.00', '60', '2019-04-15 13:01:32'),
(277, '29.00', '69.00', '68', '2019-04-15 13:02:26'),
(278, '28.80', '68.00', '65', '2019-04-15 13:03:26'),
(279, '28.10', '71.00', '61', '2019-04-15 13:04:27'),
(280, '28.00', '72.00', '60', '2019-04-15 13:05:27'),
(281, '27.90', '71.00', '59', '2019-04-15 13:06:27'),
(282, '28.30', '71.00', '60', '2019-04-15 13:07:27'),
(283, '28.30', '71.00', '59', '2019-04-15 13:08:27'),
(284, '28.50', '70.00', '59', '2019-04-15 13:10:27'),
(285, '28.60', '69.00', '60', '2019-04-15 13:10:27'),
(286, '28.90', '69.00', '60', '2019-04-15 13:11:27'),
(287, '29.00', '69.00', '59', '2019-04-15 13:12:27'),
(288, '28.90', '68.00', '59', '2019-04-15 13:13:27'),
(289, '28.40', '70.00', '58', '2019-04-15 13:14:27'),
(290, '28.30', '71.00', '59', '2019-04-15 13:15:27'),
(291, '28.60', '70.00', '59', '2019-04-15 13:15:27'),
(292, '28.40', '70.00', '59', '2019-04-15 13:17:27'),
(293, '28.30', '71.00', '58', '2019-04-15 13:18:27'),
(294, '28.60', '69.00', '60', '2019-04-15 13:19:27'),
(295, '28.60', '70.00', '59', '2019-04-15 13:20:27'),
(296, '28.60', '69.00', '60', '2019-04-15 13:21:27'),
(297, '28.70', '69.00', '59', '2019-04-15 13:22:27'),
(298, '28.90', '68.00', '59', '2019-04-15 13:23:27'),
(299, '29.00', '70.00', '59', '2019-04-15 13:24:27'),
(300, '28.20', '71.00', '59', '2019-04-15 13:25:27'),
(301, '27.90', '71.00', '60', '2019-04-15 13:26:27'),
(302, '29.00', '69.00', '68', '2019-04-15 11:12:26'),
(303, '28.80', '68.00', '65', '2019-04-15 11:13:26'),
(304, '28.08', '71.00', '61', '2019-04-15 11:14:27'),
(305, '28.00', '72.00', '60', '2019-04-15 11:15:27'),
(306, '27.90', '71.00', '59', '2019-04-15 11:15:27'),
(307, '28.30', '71.00', '60', '2019-04-15 11:17:27'),
(308, '28.30', '71.00', '59', '2019-04-15 11:18:28'),
(309, '28.50', '70.00', '59', '2019-04-15 11:19:28'),
(310, '28.60', '69.00', '60', '2019-04-15 11:20:28'),
(311, '28.90', '69.00', '60', '2019-04-15 11:21:28'),
(312, '29.00', '69.00', '59', '2019-04-15 11:22:29'),
(313, '28.90', '68.00', '59', '2019-04-15 11:23:29'),
(314, '28.40', '70.00', '58', '2019-04-15 11:24:29'),
(315, '28.30', '71.00', '59', '2019-04-15 11:25:29'),
(316, '28.60', '70.00', '59', '2019-04-15 11:26:30'),
(317, '28.40', '70.00', '59', '2019-04-15 11:27:30'),
(318, '28.30', '71.00', '58', '2019-04-15 11:28:30'),
(319, '28.60', '69.00', '60', '2019-04-15 11:29:30'),
(320, '28.60', '70.00', '59', '2019-04-15 11:30:31'),
(321, '28.60', '69.00', '60', '2019-04-15 11:31:31'),
(322, '28.70', '69.00', '59', '2019-04-15 11:32:31'),
(323, '28.90', '68.00', '59', '2019-04-15 11:33:31'),
(324, '29.00', '70.00', '59', '2019-04-15 11:34:32'),
(325, '28.20', '71.00', '59', '2019-04-15 11:35:32'),
(326, '27.90', '71.00', '60', '2019-04-15 11:36:32'),
(327, '28.80', '68.00', '65', '2019-04-15 11:38:26'),
(328, '28.08', '71.00', '61', '2019-04-15 11:39:27'),
(329, '28.00', '72.00', '60', '2019-04-15 11:40:27'),
(330, '27.90', '71.00', '59', '2019-04-15 11:41:27'),
(331, '28.30', '71.00', '60', '2019-04-15 11:42:27'),
(332, '28.30', '71.00', '59', '2019-04-15 11:43:28'),
(333, '28.50', '70.00', '59', '2019-04-15 11:44:28'),
(334, '28.60', '69.00', '60', '2019-04-15 11:45:28'),
(335, '28.90', '69.00', '60', '2019-04-15 11:46:28'),
(336, '29.00', '69.00', '59', '2019-04-15 11:47:29'),
(337, '28.90', '68.00', '59', '2019-04-15 11:48:29'),
(338, '28.40', '70.00', '58', '2019-04-15 11:49:29'),
(339, '28.30', '71.00', '59', '2019-04-15 11:50:29'),
(340, '28.60', '70.00', '59', '2019-04-15 11:51:30'),
(341, '28.40', '70.00', '59', '2019-04-15 11:52:30'),
(342, '28.30', '71.00', '58', '2019-04-15 11:53:30'),
(343, '28.60', '69.00', '60', '2019-04-15 11:54:30'),
(344, '28.60', '70.00', '59', '2019-04-15 11:55:31'),
(345, '28.60', '69.00', '60', '2019-04-15 11:56:31'),
(346, '28.70', '69.00', '59', '2019-04-15 11:57:31'),
(347, '28.90', '68.00', '59', '2019-04-15 11:58:31'),
(348, '29.00', '70.00', '59', '2019-04-15 11:59:32'),
(349, '28.20', '71.00', '59', '2019-04-15 11:00:32'),
(350, '27.90', '71.00', '60', '2019-04-15 11:01:32'),
(351, '29.00', '69.00', '68', '2019-04-15 11:02:26'),
(352, '28.80', '68.00', '65', '2019-04-15 11:03:26'),
(353, '28.08', '71.00', '61', '2019-04-15 11:04:27'),
(354, '28.00', '72.00', '60', '2019-04-15 11:05:27'),
(355, '27.90', '71.00', '59', '2019-04-15 11:06:27'),
(356, '28.30', '71.00', '60', '2019-04-15 11:07:27'),
(357, '28.30', '71.00', '59', '2019-04-15 11:08:27'),
(358, '28.50', '70.00', '59', '2019-04-15 11:08:27'),
(359, '28.60', '69.00', '60', '2019-04-15 11:08:27'),
(360, '28.90', '69.00', '60', '2019-04-15 11:11:27'),
(361, '29.00', '69.00', '59', '2019-04-15 11:12:27'),
(362, '28.90', '68.00', '59', '2019-04-15 11:13:27'),
(363, '28.40', '70.00', '58', '2019-04-15 11:14:27'),
(364, '28.30', '71.00', '59', '2019-04-15 11:15:27'),
(365, '28.60', '70.00', '59', '2019-04-15 11:15:27'),
(366, '28.40', '70.00', '59', '2019-04-15 11:17:27'),
(367, '28.30', '71.00', '58', '2019-04-15 11:18:27'),
(368, '28.60', '69.00', '60', '2019-04-15 11:19:27'),
(369, '28.60', '70.00', '59', '2019-04-15 11:20:27'),
(370, '28.60', '69.00', '60', '2019-04-15 11:21:27'),
(371, '28.70', '69.00', '59', '2019-04-15 11:22:27'),
(372, '28.90', '68.00', '59', '2019-04-15 11:23:27'),
(373, '29.00', '70.00', '59', '2019-04-15 11:24:27'),
(374, '28.20', '71.00', '59', '2019-04-15 11:25:27'),
(375, '27.90', '71.00', '60', '2019-04-15 11:26:27'),
(376, '28.40', '70.00', '59', '2019-04-15 10:27:30'),
(377, '28.30', '71.00', '58', '2019-04-15 10:28:30'),
(378, '28.60', '69.00', '60', '2019-04-15 10:29:30'),
(379, '28.60', '70.00', '59', '2019-04-15 10:30:31'),
(380, '28.60', '69.00', '60', '2019-04-15 10:31:31'),
(381, '28.70', '69.00', '59', '2019-04-15 10:32:31'),
(382, '28.90', '68.00', '59', '2019-04-15 10:33:31'),
(383, '29.00', '70.00', '59', '2019-04-15 10:34:32'),
(384, '28.20', '71.00', '59', '2019-04-15 10:35:32'),
(385, '27.90', '71.00', '60', '2019-04-15 10:36:32'),
(386, '28.80', '68.00', '65', '2019-04-15 10:38:26'),
(387, '28.07', '71.00', '61', '2019-04-15 10:39:27'),
(388, '28.00', '72.00', '60', '2019-04-15 10:40:27'),
(389, '27.90', '71.00', '59', '2019-04-15 10:41:27'),
(390, '28.30', '71.00', '60', '2019-04-15 10:42:27'),
(391, '28.30', '71.00', '59', '2019-04-15 10:43:28'),
(392, '28.50', '70.00', '59', '2019-04-15 10:44:28'),
(393, '28.60', '69.00', '60', '2019-04-15 10:45:28'),
(394, '28.90', '69.00', '60', '2019-04-15 10:46:28'),
(395, '29.00', '69.00', '59', '2019-04-15 10:47:29'),
(396, '28.90', '68.00', '59', '2019-04-15 10:48:29'),
(397, '28.40', '70.00', '58', '2019-04-15 10:49:29'),
(398, '28.30', '71.00', '59', '2019-04-15 10:50:29'),
(399, '28.60', '70.00', '59', '2019-04-15 10:51:30'),
(400, '28.40', '70.00', '59', '2019-04-15 10:52:30'),
(401, '28.30', '71.00', '58', '2019-04-15 10:53:30'),
(402, '28.60', '69.00', '60', '2019-04-15 10:54:30'),
(403, '28.60', '70.00', '59', '2019-04-15 10:55:31'),
(404, '28.60', '69.00', '60', '2019-04-15 10:56:31'),
(405, '28.70', '69.00', '59', '2019-04-15 10:57:31'),
(406, '28.90', '68.00', '59', '2019-04-15 10:58:31'),
(407, '29.00', '70.00', '59', '2019-04-15 10:59:32');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
