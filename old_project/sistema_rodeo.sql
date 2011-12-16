-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 14, 2011 as 11:29 AM
-- Versão do Servidor: 5.1.53
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistema_rodeo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `pos` int(2) NOT NULL,
  `vis` int(1) NOT NULL,
  `supercategoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `pos`, `vis`, `supercategoria`) VALUES
(1, 'Blusinha', 1, 1, 1),
(2, 'Cal%C3%A7a+Fem.', 2, 1, 1),
(3, 'Camisete', 3, 1, 1),
(4, 'Coletes', 4, 1, 1),
(5, 'Jaquetas', 5, 1, 1),
(6, 'Polo+Fem.', 6, 1, 1),
(7, 'Blusa', 1, 1, 2),
(8, 'Cal%C3%A7a', 2, 1, 2),
(9, 'Coletes', 3, 1, 2),
(10, 'Jaquetas', 4, 1, 2),
(11, 'Polos', 5, 1, 2),
(12, 'Bon%C3%A9s', 1, 1, 3),
(13, 'Chap%C3%A9us', 2, 1, 3),
(14, 'Bota', 1, 1, 4),
(15, 'T%C3%AAnis', 2, 1, 4),
(16, 'T%C3%AAnis+Country', 3, 1, 4),
(17, 'Cintos', 1, 1, 5),
(18, 'Fivelas+RS', 1, 1, 6),
(19, 'Master', 2, 1, 6),
(20, 'Pelegrini', 3, 1, 6),
(21, 'Sumetal', 4, 1, 6),
(22, 'Acess%C3%B3rios', 1, 1, 7),
(23, 'Bon%C3%A9s', 2, 1, 7),
(24, 'Camisas', 3, 1, 7),
(25, 'Camisetes', 4, 1, 7),
(26, 'Cintos', 5, 1, 7),
(27, 'Canivetes', 1, 1, 8),
(28, 'Carteiras', 2, 1, 8),
(29, 'Porta+Fumo', 3, 1, 8),
(30, 'Aulas+de+Dan%C3%A7a', 1, 1, 9),
(31, 'Conserto+de+Chap%C3%A9us', 2, 1, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mural`
--

CREATE TABLE IF NOT EXISTS `mural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `desc` varchar(3000) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `mural`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `conteudo` varchar(10000) NOT NULL,
  `vis` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `nome`, `conteudo`, `vis`) VALUES
(1, 'Home', 'Conteudo da Home', 1),
(2, 'Loja', 'Funcao da Loja', 1),
(3, 'Galeria', 'Conteudo da Galeria', 1),
(4, 'Contato', 'Conteudo da area de contato', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `venda` int(1) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descr`, `venda`, `categoria`) VALUES
(1, 'Produto1', 'Descri%C3%A7%C3%A3o+simples', 0, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `pos` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `slides`
--

INSERT INTO `slides` (`id`, `nome`, `desc`, `img`, `pos`, `tipo`) VALUES
(1, 'Item1', 'descricao do item1', 'slide_eventos/1.jpg', 1, 'eventos'),
(2, 'Item1', 'descricao do item1', 'slide_produtos/1.jpg', 1, 'produto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `supercategorias`
--

CREATE TABLE IF NOT EXISTS `supercategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `pos` int(2) NOT NULL,
  `vis` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `supercategorias`
--

INSERT INTO `supercategorias` (`id`, `nome`, `pos`, `vis`) VALUES
(1, 'cowgirl', 1, 1),
(2, 'cowboy', 2, 1),
(3, 'chapeu', 3, 1),
(4, 'bota_tenis', 4, 1),
(5, 'cintos', 5, 1),
(6, 'fivelas', 6, 1),
(7, 'exclusivos', 7, 1),
(8, 'acessorios', 8, 1),
(9, 'servicos', 9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nivel` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usuarios`
--

