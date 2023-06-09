-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2023 às 17:20
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('12300025262', 'Casimiro', 'Migel', '1993-10-20', '18996320412', 'ceze@outlook.com', 'ceze123'),
('12312312310', 'Roguer', 'Guedes', '1992-03-12', '18912312312', 'guedes10@gmail.com', 'amem123'),
('55566628422', 'Ludmilla', 'Gonçalves', '1993-05-04', '18992220102', 'lud_numanice@outlook.com', 'numanice'),
('77700707007', 'Cristiano', 'Ronaldo', '1987-07-07', '18900070707', 'cr7@gmail.com', 'sete7'),
('77785295623', 'Beyoncé', 'Carter', '1981-09-04', '18996325852', 'beyonce_com_c@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` int(12) NOT NULL,
  `dataNasc` date NOT NULL,
  `telefone` int(47) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `sobrenome`, `cpf`, `dataNasc`, `telefone`, `email`, `salario`) VALUES
('Bruce', 'Wayne', 98034820, '1995-07-07', 321432423, 'eusouajustica@hotmail.com', 1000000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `nome` varchar(200) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nome`, `fabricante`, `descricao`, `valor`) VALUES
('Monster', 'Monster', 'Bebidas Energéticas', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
