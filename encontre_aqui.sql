-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2016 às 14:54
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `encontre_aqui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avalias`
--

CREATE TABLE IF NOT EXISTS `avalias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `nota` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servico_id` (`servico_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `avalias`
--

INSERT INTO `avalias` (`id`, `data`, `nota`, `servico_id`, `usuario_id`) VALUES
(1, '0000-00-00', 10, 2, 2),
(2, '0000-00-00', 10, 2, 2),
(8, '0000-00-00', 10, 2, 2),
(9, '0000-00-00', 5, 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `rua` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `bairro` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `cidade` varchar(60) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `tipo_id` (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `valor`, `usuario_id`, `tipo_id`, `rua`, `bairro`, `cidade`) VALUES
(2, 'R$13,00', 1, 1, 'Rua Manoel Carlos, n51', 'Centro', 'Rio Piracicaba'),
(3, 'R$25,00', 1, 3, 'Rua: Qualquer uma', 'Um desses ai', 'Aqui Mesmo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitados`
--

CREATE TABLE IF NOT EXISTS `solicitados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico_id` int(11) NOT NULL,
  `data` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `ofertador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servico_id` (`servico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `solicitados`
--

INSERT INTO `solicitados` (`id`, `servico_id`, `data`, `usuario_id`, `ofertador`) VALUES
(5, 2, '23/04/2015', 2, 1),
(6, 2, '23/08/2016', 2, 1),
(7, 2, '23/07/2017', 2, 1),
(8, 2, '14/08/2016', 2, 1),
(9, 3, '15/08/2016', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `descricao`) VALUES
(1, 'Manicure'),
(2, 'Pedicure'),
(3, 'Garota que faz programa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `email`, `telefone`, `nome`, `senha`) VALUES
(1, 'lanna', 'oliveira.lanna@outlook.com', '31997148506', 'lanna', 'lanna123'),
(2, 'nandarocha', 'nandarocha@yahoo.com.br', '31999887766', 'Fernanda', 'nanda123'),
(3, 'nandaF', 'nandarocha@yahoo.com.br', '31999887766', 'Fernanda', 'nanda123'),
(4, 'nandaL', 'nandarocha@yahoo.com.br', '31999887766', 'Fernanda', 'nanda123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avalias`
--
ALTER TABLE `avalias`
  ADD CONSTRAINT `avaliacao_servico` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`),
  ADD CONSTRAINT `avaliacao_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servico_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `servico_tipo` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`);

--
-- Limitadores para a tabela `solicitados`
--
ALTER TABLE `solicitados`
  ADD CONSTRAINT `solicitado_servico` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
