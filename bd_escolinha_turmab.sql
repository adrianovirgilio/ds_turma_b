-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Maio-2019 às 00:07
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_escolinha_turmab`
--
CREATE DATABASE IF NOT EXISTS `bd_escolinha_turmab` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_escolinha_turmab`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `rm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL,
  `serie` int(11) NOT NULL,
  `nome_pai` varchar(50) COLLATE utf8_bin NOT NULL,
  `nome_mae` varchar(50) COLLATE utf8_bin NOT NULL,
  `nome_responsavel` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `celular` varchar(15) COLLATE utf8_bin NOT NULL,
  `escola` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone_escola` varchar(15) COLLATE utf8_bin NOT NULL,
  `id_turma` int(11) NOT NULL,
  PRIMARY KEY (`rm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`rm`, `nome`, `foto`, `data_nasc`, `endereco`, `serie`, `nome_pai`, `nome_mae`, `nome_responsavel`, `telefone`, `celular`, `escola`, `telefone_escola`, `id_turma`) VALUES
(1, 'Adriano', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(2, 'Adriano VirgÃ­lio', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(3, 'Adriano VirgÃ­lio', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(4, 'Adriano VirgÃ­lio', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(5, 'Adriano VirgÃ­lio', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(6, 'Adriano', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(7, 'Adriano', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0),
(8, 'Adriano', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE IF NOT EXISTS `tb_professor` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_professor`
--

INSERT INTO `tb_professor` (`id_professor`, `login`, `senha`, `nome`, `telefone`, `email`) VALUES
(1, 'adriano', '123', 'Adriano Virgílio', '(19) 99638-4745', 'adriano.virgilio@etec.sp.gov.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE IF NOT EXISTS `tb_turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `data_inicial` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `hora_inicial` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `id_atividade` int(11) DEFAULT NULL,
  `id_instrutor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`id_turma`, `data_inicial`, `data_final`, `hora_inicial`, `hora_final`, `id_atividade`, `id_instrutor`) VALUES
(13, '2019-04-09', '2019-04-24', '14:00:00', '16:00:00', NULL, NULL),
(15, '2019-02-04', '2019-07-02', '11:00:00', '16:00:00', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
