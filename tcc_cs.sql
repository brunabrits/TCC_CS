-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 24-Nov-2021 às 19:27
-- Versão do servidor: 5.7.20
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc_cs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_clientes` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `idade` char(3) NOT NULL,
  `renda_familiar` decimal(9,2) DEFAULT NULL,
  `cliente_contato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `codD` int(11) NOT NULL,
  `telefone` char(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pesquisa`
--

CREATE TABLE `dados_pesquisa` (
  `cod_dados` int(11) NOT NULL,
  `dados_pesquisa` varchar(255) NOT NULL,
  `numero_pesquisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `cnpj` int(11) NOT NULL,
  `Nome_Fantasia` varchar(90) DEFAULT NULL,
  `empresa_contato` int(11) NOT NULL,
  `empresa_endereco` int(11) NOT NULL,
  `empresa_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `Cod_Endereco` int(11) NOT NULL,
  `cep` char(8) NOT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `numero_residencia` char(10) DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cpf` char(11) NOT NULL,
  `rg` char(15) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `funcionarios_contato` int(11) NOT NULL,
  `funcionarios_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `cod_pesquisa` int(11) NOT NULL,
  `metrica` varchar(45) NOT NULL,
  `publico_alvo` varchar(90) NOT NULL,
  `pesquisa_produto` int(11) NOT NULL,
  `pesquisa_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `cod_relatorios` int(11) NOT NULL,
  `relatorios` varchar(255) NOT NULL,
  `numero_relatorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_clientes`),
  ADD KEY `cliente_contato` (`cliente_contato`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`codD`);

--
-- Indexes for table `dados_pesquisa`
--
ALTER TABLE `dados_pesquisa`
  ADD PRIMARY KEY (`cod_dados`),
  ADD KEY `numero_pesquisa` (`numero_pesquisa`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `empresa_contato` (`empresa_contato`),
  ADD KEY `empresa_endereco` (`empresa_endereco`),
  ADD KEY `empresa_produto` (`empresa_produto`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`Cod_Endereco`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `funcionarios_contato` (`funcionarios_contato`),
  ADD KEY `funcionarios_endereco` (`funcionarios_endereco`);

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`cod_pesquisa`),
  ADD KEY `pesquisa_produto` (`pesquisa_produto`),
  ADD KEY `pesquisa_cliente` (`pesquisa_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Indexes for table `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`cod_relatorios`),
  ADD KEY `numero_relatorio` (`numero_relatorio`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`cliente_contato`) REFERENCES `contatos` (`codD`);

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`codD`) REFERENCES `empresas` (`cnpj`);

--
-- Limitadores para a tabela `dados_pesquisa`
--
ALTER TABLE `dados_pesquisa`
  ADD CONSTRAINT `dados_pesquisa_ibfk_1` FOREIGN KEY (`numero_pesquisa`) REFERENCES `pesquisa` (`cod_pesquisa`);

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`empresa_contato`) REFERENCES `contatos` (`codD`),
  ADD CONSTRAINT `empresas_ibfk_2` FOREIGN KEY (`empresa_endereco`) REFERENCES `endereco` (`Cod_Endereco`),
  ADD CONSTRAINT `empresas_ibfk_3` FOREIGN KEY (`empresa_produto`) REFERENCES `produto` (`cod_produto`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`funcionarios_contato`) REFERENCES `contatos` (`codD`),
  ADD CONSTRAINT `funcionarios_ibfk_2` FOREIGN KEY (`funcionarios_endereco`) REFERENCES `endereco` (`Cod_Endereco`);

--
-- Limitadores para a tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD CONSTRAINT `pesquisa_ibfk_1` FOREIGN KEY (`pesquisa_produto`) REFERENCES `produto` (`cod_produto`),
  ADD CONSTRAINT `pesquisa_ibfk_2` FOREIGN KEY (`pesquisa_cliente`) REFERENCES `clientes` (`cod_clientes`);

--
-- Limitadores para a tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD CONSTRAINT `relatorios_ibfk_1` FOREIGN KEY (`numero_relatorio`) REFERENCES `dados_pesquisa` (`cod_dados`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
