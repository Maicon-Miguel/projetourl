-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 13:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `urlfatec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela`
--

CREATE TABLE `tabela` (
  `idURL` int(11) NOT NULL,
  `urlURL` text NOT NULL,
  `descricaoURL` text NOT NULL,
  `capaURL` varchar(200) NOT NULL,
  `categoriaURL` varchar(50) NOT NULL,
  `dataCadastroURL` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabela`
--

INSERT INTO `tabela` (`idURL`, `urlURL`, `descricaoURL`, `capaURL`, `categoriaURL`, `dataCadastroURL`) VALUES
(5, 'www.gmail.com.br', 'Plataforma de e-mail do Google', '20484798346718da5dac811-gmaill.jpeg', 'E-mail', '2024-10-21'),
(8, 'www.mercadolivre.com.br', 'Plataforma de E-commerce internacional', '127166109967170c4e3bcde-mercadolivre.jpeg', 'E-comerce', '2024-10-21'),
(9, 'https://www.linuxmint.com', 'Repositório de distribuição Linux Mint', '181634005767170dab85cd7-linuxmint.jpeg', 'Sistema Operacional', '2024-10-21'),
(10, 'https://www.louie.com.br/loja/', 'Loja virtual de vestuário esporte fino', '150478813767170e5312ae9-louie.jpg', 'Vestuário', '2024-10-21'),
(11, 'https://www.youtube.com/', 'Plataforma de vídeos e mídias digitais', '37278092967170e962bf0f-youtube.jpeg', 'Vídeos', '2024-10-21'),
(12, 'https://www.zoom.com.br/', 'Comparador de preços em sites de e-commerce ', '95439785467170efd074e3-zoom.jpeg', 'Buscador', '2024-10-21'),
(13, 'https://www.amazon.com.br/', 'Plataforma de E-commerce internacional b2c', '65274557367170f66c8a19-Amazon.jpeg', 'E-commerce', '2024-10-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`idURL`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela`
--
ALTER TABLE `tabela`
  MODIFY `idURL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
