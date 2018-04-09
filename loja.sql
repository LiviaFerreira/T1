-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2018 às 18:41
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `cod_cliente` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`cpf`, `nome`, `email`, `sexo`, `cod_cidade`) VALUES
('10252036111', 'Joana vilarim', 'joana@gmail.com', 'F', 2),
('20150475666', 'rwan daris', 'rwan@gmail.com', 'M', 1),
('20156489477', 'giovany malarim', 'malarim@gmail.com', 'M', 3),
('20173742787', 'Livia Ferreira', 'livia@gmail.com', 'F', 1),
('25069358244', 'Vinicius arturo', 'vine@gmail.com', 'M', 2),
('32165498700', 'mileny giu', 'giu@gmail.com', 'F', 9),
('40695682133', 'luiz victor', 'victor@gmail.com', 'M', 4),
('50164982533', 'Mariano peixoto', 'peixoto@gmail.com', 'M', 6),
('52034968111', 'larisa fazan', 'fazan@gmail.com', 'F', 4),
('56489712300', 'Felipe puin', 'puin@gmail.com', 'M', 10),
('64298345699', 'ramira pavalim', 'pavalim@gmail.com', 'F', 5),
('65143256188', 'mario tuvia', 'tuvia@gmail.com', 'M', 8),
('65298241077', 'luiza meneguel', 'meneguel@gmail.com', 'F', 3),
('74125836900', 'fernando fulu', 'fulu@gmail.com', 'M', 9),
('78632585211', 'Francisco mileno', 'mileno@gmail.com', 'M', 7),
('80564235177', 'Giulia hermes', 'hermes@gmail.com', 'F', 7),
('85269314700', 'clara bonita', 'bonita@gmail.com', 'F', 10),
('86495122344', 'Beatris rogerio', 'bia@gmail.com', 'F', 6),
('96147586255', 'Cristofer agnes', 'agens@gmail.com', 'M', 5),
('98765412300', 'Luciana felin', 'felin@gmail.com', 'F', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Araraquara', 1),
(2, 'Paraty', 2),
(3, 'Guariba', 1),
(4, 'Jabotical', 1),
(5, 'Ubatuba', 1),
(6, 'Ilhabela', 1),
(7, 'Petrópolis', 2),
(8, 'Macaé', 2),
(9, 'Japeri', 2),
(10, 'Rio Bonito', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` char(2) NOT NULL,
  `nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(1, 'SP', 'São Paulo'),
(2, 'RJ', 'Rio de Janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
