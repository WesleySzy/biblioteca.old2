-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2019 às 22:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(9) NOT NULL,
  `nomeC` varchar(90) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nomeC`, `endereco`, `telefone`) VALUES
(2, 'Wesley', 'Rua Condor, N°170, Arapongas-PR', '43 99925554'),
(3, 'Pedro', 'Rua Juruviara, N°67, Arapongas-PR', '43 96456558'),
(4, 'Joao', 'Rua Bico-Agudo, N°34, Arapongas-PR', '43 9645858'),
(5, 'Maria', 'Rua Pica-Pau, N°350, Arapongas-PR', '43 9648945'),
(6, 'Douglas', 'Rua Tucanos, N°360, Arapongas-PR', '43 96455445'),
(7, 'David', 'Rua Falcao, N°800, Arapongas-PR', '43 9645987'),
(8, 'Josefa', 'Rua Falcao, N°800, Arapongas-PR', '43 9645987'),
(9, 'Aniceto', 'Rua Av.Arapongas, N°785, Arapongas-PR', '43 88328557'),
(10, 'Moacir', 'Rua Jandaia, N°12, Arapongas-PR', '43 8839988'),
(11, 'Jose', 'Rua Jandaia, N°12, Arapongas-PR', '43 99832722');

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_emprestimo`
--

CREATE TABLE `controle_emprestimo` (
  `isbn` int(15) NOT NULL,
  `nome_aluno` varchar(90) NOT NULL,
  `num_emprestimo` int(9) NOT NULL,
  `dt_hora_emprestimo` datetime NOT NULL,
  `dt_hora_devolucao` datetime NOT NULL,
  `prioridade_itens_emprestimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controle_emprestimo`
--

INSERT INTO `controle_emprestimo` (`isbn`, `nome_aluno`, `num_emprestimo`, `dt_hora_emprestimo`, `dt_hora_devolucao`, `prioridade_itens_emprestimo`) VALUES
(3, 'Wesley', 1, '2019-05-26 15:00:00', '2019-06-05 15:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(9) NOT NULL,
  `nome_funcionario` varchar(90) DEFAULT NULL,
  `endereco_funcionario` varchar(45) DEFAULT NULL,
  `telefone_funcionario` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`, `endereco_funcionario`, `telefone_funcionario`) VALUES
(2, 'Leo', 'Passaro do peito rosa, N°32, Arapongas-PR', '43 91457532'),
(3, 'Talles', ' Gralha azul, N°45, Arapongas-PR', '43 91234589'),
(4, 'Fabio', 'Anu preto, N°23, Arapongas-PR', '43 94567891'),
(5, 'Robson', 'Falcao, N°15, Arapongas-PR', '43 91457533'),
(6, 'Helber', 'Garibaldi, N°33, Arapongas-PR', '43 91457534'),
(7, 'Luis', 'Batuquira, N°34, Arapongas-PR', '43 91457535'),
(8, 'Lucia', 'Piu Piu, N°35, Arapongas-PR', '43 91457536'),
(9, 'Luciano', 'Irataua, N°36, Arapongas-PR', '43 91457537'),
(10, 'Mateus', 'Ema, N°37, Arapongas-PR', '43 91457538'),
(11, 'Guilherme', 'Sanhaço, N°38, Arapongas-PR', '43 91457539');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(9) NOT NULL,
  `isbn` int(90) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `isbn`, `categoria`, `autor`, `titulo`) VALUES
(1, 52525252, 'Romance', 'Cecelia Ahern', 'P.S: Eu Te Amo'),
(2, 42424242, 'Romance', 'Cecelia Ahern', 'Simplesmente Acontece'),
(3, 32323232, 'Ficcao Cientifica', 'H. G. Wells', 'The First Men in the Moon'),
(4, 12121212, 'Ficcao Cientifica', 'H. G. Wells', 'A Guerra Dos Mundos'),
(5, 62626262, 'Ficcao Cientifica', 'H. G. Wells', 'A Guerra Dos Mundos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `controle_emprestimo`
--
ALTER TABLE `controle_emprestimo`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `controle_emprestimo`
--
ALTER TABLE `controle_emprestimo`
  MODIFY `isbn` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
