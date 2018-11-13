-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 13/11/2018 às 16:08
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `dataHorarioInicio` datetime NOT NULL,
  `horarioFinal` time NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `tipo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `tipo`) VALUES
(1, 'Computador'),
(2, 'Console'),
(3, 'Mobile'),
(4, 'Perifericos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CEP` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cidade` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `estado` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `emailEmpresa` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `id_categoria` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `CEP`, `cidade`, `estado`, `emailEmpresa`, `id_categoria`, `id_pessoa`) VALUES
(19, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 1),
(20, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 2),
(21, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 3),
(22, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 4),
(23, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 5),
(24, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 2, 6),
(25, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 7),
(26, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 8),
(27, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 9),
(28, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 10),
(29, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 11),
(30, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 12),
(31, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 13),
(32, 'asd', 'awd', 'GRC', 'PR', 'adsm@gmail.com', 1, 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dataEvento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `nome`, `dataEvento`) VALUES
(1, 'E3', '2018-11-13'),
(2, 'BGS', '2018-11-14'),
(3, 'Tokyo Game Show', '2018-11-15'),
(4, 'Gamescom', '2018-11-16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id_inscricao` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nomeApresentacao` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `inscricao`
--

INSERT INTO `inscricao` (`id_inscricao`, `id_evento`, `id_empresa`, `data`, `nomeApresentacao`) VALUES
(1, 1, 24, '2018-11-13 14:44:52', ''),
(2, 2, 25, '2018-11-13 14:52:15', ''),
(3, 2, 26, '2018-11-13 14:52:20', ''),
(4, 2, 27, '2018-11-13 14:55:08', ''),
(5, 2, 28, '2018-11-13 14:59:14', ''),
(6, 2, 29, '2018-11-13 14:59:18', ''),
(7, 2, 32, '2018-11-13 15:07:57', 'asdwwfff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `numCel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `email`, `nome`, `numCel`, `cpf`) VALUES
(1, 'adsm@gmail.com', 'asd', 'wad', 'awd'),
(2, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(3, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(4, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(5, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(6, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(7, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(8, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(9, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(10, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(11, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(12, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(13, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd'),
(14, 'adsm@gmail.com', 'dwaawd', 'wsad', 'sadawd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa_empresa`
--

CREATE TABLE `pessoa_empresa` (
  `id_empresa` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD UNIQUE KEY `dataHorarioInicio` (`dataHorarioInicio`),
  ADD KEY `evento_agenda_fk` (`id_evento`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_categoria_empresa_fk` (`id_categoria`),
  ADD KEY `pessoa_empresa_fk` (`id_pessoa`);

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices de tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id_inscricao`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices de tabela `pessoa_empresa`
--
ALTER TABLE `pessoa_empresa`
  ADD PRIMARY KEY (`id_empresa`,`id_pessoa`),
  ADD KEY `pessoa_pessoa_empresa_fk` (`id_pessoa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id_inscricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `evento_agenda_fk` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `id_categoria_empresa_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pessoa_empresa_fk` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `pessoa_empresa`
--
ALTER TABLE `pessoa_empresa`
  ADD CONSTRAINT `empresa_pessoa_empresa_fk` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pessoa_pessoa_empresa_fk` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
