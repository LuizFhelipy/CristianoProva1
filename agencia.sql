-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2020 at 11:31 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencia`
--

-- --------------------------------------------------------

--
-- Table structure for table `atendimentos`
--

DROP TABLE IF EXISTS `atendimentos`;
CREATE TABLE IF NOT EXISTS `atendimentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `atividade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `registro` timestamp NULL DEFAULT NULL,
  `atendimento` timestamp NULL DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `nome`, `telefone`, `atividade`, `registro`, `atendimento`, `status`) VALUES
(1, 'Luiz Fhelipy', '35998965783', 'segunda via da conta', '2020-09-23 01:34:00', '2020-09-23 01:51:00', 'atendido'),
(2, 'Luiz Fhelipy', '35998965783', 'segunda via da conta', '2020-09-23 01:37:00', '2020-09-23 02:24:00', 'atendido'),
(3, 'Luiz Fhelipy Rodrigues Teixeira', '35998965783', 'mudanca de endereco', '2020-09-23 02:25:00', '2020-09-23 02:25:00', 'cancelado'),
(4, 'Luiz Fhelipy', '35998965783', 'segunda via da conta', '2020-09-23 02:25:00', '2020-09-23 02:30:00', 'atendido'),
(5, 'Luiz Fhelipy', '35998965783', 'segunda via da conta', '2020-09-23 02:29:00', NULL, 'espera');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
