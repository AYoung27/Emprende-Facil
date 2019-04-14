-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2019 at 07:56 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emprendefacil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

DROP TABLE IF EXISTS `tbl_log`;
CREATE TABLE IF NOT EXISTS `tbl_log` (
  `LogID` int(10) NOT NULL AUTO_INCREMENT,
  `Evento` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Direccion_IP_Usuario` varchar(100) NOT NULL,
  `UsuarioID` int(10) NOT NULL,
  PRIMARY KEY (`LogID`),
  KEY `UsuarioID` (`UsuarioID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`LogID`, `Evento`, `Descripcion`, `Fecha`, `Hora`, `Direccion_IP_Usuario`, `UsuarioID`) VALUES
(11, 'Inicio de sesion', 'El usuario con correo: asdasd@algo.hn ha iniciado sesion', '2019-04-14', '13:53:17', '::1', 30),
(10, 'Nuevo registro', 'Se ha registrado un nuevo usuario con la direccion de correo: asdasd@algo.hn', '2019-04-14', '13:47:09', '::1', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sesion`
--

DROP TABLE IF EXISTS `tbl_sesion`;
CREATE TABLE IF NOT EXISTS `tbl_sesion` (
  `IDUsuario` int(5) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT '0',
  KEY `IDUsuario` (`IDUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sesion`
--

INSERT INTO `tbl_sesion` (`IDUsuario`, `Estado`) VALUES
(5, 0),
(12, 0),
(18, 0),
(14, 0),
(15, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipousuario`
--

DROP TABLE IF EXISTS `tbl_tipousuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `IDTipoUsuario` int(2) NOT NULL AUTO_INCREMENT,
  `TipoUsuario` varchar(10) NOT NULL,
  PRIMARY KEY (`IDTipoUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`IDTipoUsuario`, `TipoUsuario`) VALUES
(1, 'Cliente'),
(2, 'Vendedor'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `IDUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `TipoUsuario` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IDUsuario`),
  KEY `TipoFK` (`TipoUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`IDUsuario`, `Nombre`, `Apellido`, `Correo`, `Password`, `TipoUsuario`) VALUES
(5, 'Abner', 'Reyes', 'correo@correo.com', 'f8935b5c0b8e6b3ddd8a9e881c11142bad8ca336', 1),
(18, 'latosi', 'redpoint', 'coquein@algo.hn', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(12, 'asdasd', 'asdasd', 'asd@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(11, 'jairo', 'elcamionero', 'algo@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(10, 'Adan', 'Murillo', 'pendejadas@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(14, 'asdasdc', 'asdcxx', 'asdxas@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(15, 'dfdghad', 'ansdasj', 'asdfsd@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(19, 'Adan', 'Y', 'tumadre@algo.hn', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(20, 'adasdas', 'adasddas', 'asdas@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(21, 'a', 'b', 'c@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(22, 'b', 'a', 'as@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(23, 'a', 'c', 'algosd@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(24, 'adan', 'jos', 'm@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(25, 'df', 'ad', 'ad@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(26, 'm', 'm', 'mc@algo.hn', '7ab515d12bd2cf431745511ac4ee13fed15ab578', 1),
(27, 'ds', 'asd', 'gty@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(28, 'h', 'h', 'jsa@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(30, 'adan', 'asd', 'asdasd@algo.hn', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
