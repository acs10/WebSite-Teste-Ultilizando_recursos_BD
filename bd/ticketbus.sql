-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2018 às 20:34
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketbus`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `alterar` (IN `id` INT, IN `email_p` VARCHAR(50), IN `senha_p` VARCHAR(50), IN `login_p` VARCHAR(50))  BEGIN
	UPDATE usuario SET login = login_p, email=email_p, senha=senha_p where id_usuario = id; 
ENd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastrar` (IN `login` VARCHAR(50), IN `email` VARCHAR(50), IN `senha` VARCHAR(50))  BEGIN
	insert into usuario(login,email,senha) values (login, email, senha);
ENd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mensagem` (IN `nome_p` VARCHAR(50), IN `email_p` VARCHAR(80), IN `msg_p` VARCHAR(200))  BEGIN
insert into mensagem_de_contato(nome, email, mensagem) values (nome_p, email_p, msg_p);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_user` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `mensagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_user`, `email`, `mensagem`) VALUES
(1, 'vbrito677@gmail.com', 'sistema lixo'),
(2, 'andre-shippuden3711@hotmail.com', 'tudo lixo'),
(3, 'vbrito677@gmail.com', 'Sistema lixo'),
(4, 'vbrito677@gmail.com', 'lixo'),
(5, 'vbrito677@gmail.com', 'lixo2'),
(6, 'vbrito677@gmail.com', 'lixo22'),
(7, 'eugenio@gmail.com', 'Descobrimos hoje.'),
(8, 'eugenio@gmail.com', 'Descobrimos hoje.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_de_contato`
--

CREATE TABLE `mensagem_de_contato` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `mensagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem_de_contato`
--

INSERT INTO `mensagem_de_contato` (`id_usuario`, `nome`, `email`, `mensagem`) VALUES
(1, 'ANDRE', 'vbrito677@gmail.com', 'e isso po'),
(2, 'ANDRE', 'vbrito677@gmail.com', 'sistema lixo'),
(3, 'testefinal', 'andre-shippuden3711@hotmail.com', 'tudo lixo'),
(4, 'teste3', 'vbrito677@gmail.com', 'Sistema lixo'),
(5, '', 'vbrito677@gmail.com', 'lixo'),
(6, '', 'vbrito677@gmail.com', 'lixo2'),
(7, '', 'vbrito677@gmail.com', 'lixo22'),
(8, 'Eugenio Ã© viado', 'eugenio@gmail.com', 'Descobrimos hoje.'),
(9, 'Eugenio Ã© viado', 'eugenio@gmail.com', 'Descobrimos hoje.');

--
-- Acionadores `mensagem_de_contato`
--
DELIMITER $$
CREATE TRIGGER `Tr_mensagem` AFTER INSERT ON `mensagem_de_contato` FOR EACH ROW BEGIN

declare email varchar(80);
declare mensagem varchar(200);

insert into adm(email, mensagem) values (new.email, new.mensagem);
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `mostrar`
-- (See below for the actual view)
--
CREATE TABLE `mostrar` (
`id_usuario` int(11)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`, `email`) VALUES
(1121, 'pedro', 'soueu', 'pedro@admin.com'),
(1122, 'pedro', 'soueu', 'pedro@admin.com'),
(1123, 'teste', '123', 'sthefanetavares1@hotmail.com'),
(1124, 'soueu', 'administrador@admin.com', 'administrador'),
(1125, 'oloko', 'oloko', 'andre-shippuden3711@hotmail.com'),
(1126, '123', 'andre-shippuden3711@hotmail.com', 'teste44'),
(1127, 'F', 'F', 'Sthefanetavares2013@hotmail.com');

-- --------------------------------------------------------

--
-- Structure for view `mostrar`
--
DROP TABLE IF EXISTS `mostrar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostrar`  AS  select `usuario`.`id_usuario` AS `id_usuario`,`usuario`.`email` AS `email` from `usuario` order by `usuario`.`id_usuario` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mensagem_de_contato`
--
ALTER TABLE `mensagem_de_contato`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mensagem_de_contato`
--
ALTER TABLE `mensagem_de_contato`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
