-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2018 at 09:49 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musica`
--

-- --------------------------------------------------------

--
-- Table structure for table `artista`
--

CREATE TABLE `artista` (
  `idArtista` int(11) NOT NULL,
  `nomeArtista` varchar(100) NOT NULL,
  `emailArtista` varchar(100) NOT NULL,
  `senhaArtista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artista_musica`
--

CREATE TABLE `artista_musica` (
  `idArtistaMusica` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_musica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estilo`
--

CREATE TABLE `estilo` (
  `idEstilo` int(11) NOT NULL,
  `nomeEstilo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `musica`
--

CREATE TABLE `musica` (
  `idMusica` int(11) NOT NULL,
  `nomeMusica` varchar(50) NOT NULL,
  `letra` varchar(500) NOT NULL,
  `arquivo` int(11) NOT NULL,
  `cifra` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `estilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `senhaUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idArtista`);

--
-- Indexes for table `artista_musica`
--
ALTER TABLE `artista_musica`
  ADD PRIMARY KEY (`idArtistaMusica`),
  ADD KEY `id_artista` (`id_artista`),
  ADD KEY `id_musica` (`id_musica`);

--
-- Indexes for table `estilo`
--
ALTER TABLE `estilo`
  ADD PRIMARY KEY (`idEstilo`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`idMusica`),
  ADD KEY `estilo` (`estilo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artista_musica`
--
ALTER TABLE `artista_musica`
  ADD CONSTRAINT `artista_musica_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`idArtista`),
  ADD CONSTRAINT `artista_musica_ibfk_2` FOREIGN KEY (`id_musica`) REFERENCES `musica` (`idMusica`);

--
-- Constraints for table `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`estilo`) REFERENCES `estilo` (`idEstilo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
