-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-04-2019 a las 23:10:19
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emprendefacil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `IDCategoria` int(10) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_color`
--

DROP TABLE IF EXISTS `tbl_color`;
CREATE TABLE IF NOT EXISTS `tbl_color` (
  `IDColor` int(10) NOT NULL AUTO_INCREMENT,
  `NombreColor` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`IDColor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamentos`
--

DROP TABLE IF EXISTS `tbl_departamentos`;
CREATE TABLE IF NOT EXISTS `tbl_departamentos` (
  `IDDepartamento` int(10) NOT NULL AUTO_INCREMENT,
  `NombreDepartamento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDDepartamento`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_departamentos`
--

INSERT INTO `tbl_departamentos` (`IDDepartamento`, `NombreDepartamento`) VALUES
(2, 'Colón'),
(3, 'Comayagua'),
(4, 'Copán'),
(5, 'Cortés'),
(6, 'Choluteca'),
(7, 'El Paraíso'),
(8, 'Francisco Morazán'),
(9, 'Gracias a Dios'),
(10, 'Intibucá'),
(11, 'Islas de la Bahía'),
(12, 'La Paz'),
(13, 'Lempira'),
(14, 'Ocotepeque'),
(15, 'Olancho'),
(16, 'Santa Bárbara'),
(17, 'Valle'),
(18, 'Yoro'),
(1, 'Atlántida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
CREATE TABLE IF NOT EXISTS `tbl_estado` (
  `IDEstado` int(10) NOT NULL AUTO_INCREMENT,
  `NombreEstado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDEstado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_log`
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_log`
--

INSERT INTO `tbl_log` (`LogID`, `Evento`, `Descripcion`, `Fecha`, `Hora`, `Direccion_IP_Usuario`, `UsuarioID`) VALUES
(15, 'Cierre de sesion', 'El usuario con correo: asdasd@algo.hn ha cerrado sesion', '2019-04-14', '20:09:06', '::1', 30),
(14, 'Inicio de sesion', 'El usuario con correo: asdasd@algo.hn ha iniciado sesion', '2019-04-14', '14:08:51', '::1', 30),
(13, 'Cierre de sesion', 'El usuario con correo:  ha cerrado sesion', '2019-04-14', '20:04:17', '::1', 30),
(12, 'Inicio de sesion', 'El usuario con correo: asdasd@algo.hn ha iniciado sesion', '2019-04-14', '14:04:06', '::1', 30),
(11, 'Inicio de sesion', 'El usuario con correo: asdasd@algo.hn ha iniciado sesion', '2019-04-14', '13:53:17', '::1', 30),
(10, 'Nuevo registro', 'Se ha registrado un nuevo usuario con la direccion de correo: asdasd@algo.hn', '2019-04-14', '13:47:09', '::1', 30),
(16, 'Modificacion de datos', 'El usuario con correo:  ha modificado sus datos', '2019-04-15', '14:59:24', '::1', 5),
(17, 'Modificacion de datos', 'El usuario con correo:  ha modificado sus datos', '2019-04-15', '15:00:15', '::1', 5),
(18, 'Modificacion de datos', 'El usuario con correo:  ha modificado sus datos', '2019-04-15', '15:01:07', '::1', 5),
(19, 'Modificacion de datos', 'El usuario con correo: correo@correo.com ha modificado sus datos', '2019-04-15', '15:01:30', '::1', 5),
(20, 'Modificacion de datos', 'El usuario con correo: correo@gmail.com ha modificado sus datos', '2019-04-15', '15:01:52', '::1', 5),
(21, 'Modificacion de datos', 'El usuario con correo: correo@gmail.com ha modificado sus datos', '2019-04-15', '15:03:43', '::1', 5),
(22, 'Modificacion de datos', 'El usuario con correo: correo@gmail.com ha modificado sus datos', '2019-04-15', '15:06:14', '::1', 5),
(23, 'Modificacion de datos', 'El usuario con correo: correo@gmail.com ha modificado sus datos', '2019-04-15', '15:06:39', '::1', 5),
(24, 'Inicio de sesion', 'El usuario con correo: correo@gmail.com ha iniciado sesion', '2019-04-15', '15:45:39', '::1', 5),
(25, 'Cierre de sesion', 'El usuario con correo: correo@gmail.com ha cerrado sesion', '2019-04-15', '16:10:26', '::1', 5),
(26, 'Inicio de sesion', 'El usuario con correo: correo@gmail.com ha iniciado sesion', '2019-04-15', '16:10:40', '::1', 5),
(27, 'Cierre de sesion', 'El usuario con correo: correo@gmail.com ha cerrado sesion', '2019-04-15', '16:39:38', '::1', 5),
(28, 'Inicio de sesion', 'El usuario con correo: correo@gmail.com ha iniciado sesion', '2019-04-15', '16:39:45', '::1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipio`
--

DROP TABLE IF EXISTS `tbl_municipio`;
CREATE TABLE IF NOT EXISTS `tbl_municipio` (
  `IDMunicipio` int(10) NOT NULL AUTO_INCREMENT,
  `NombreMunicipio` varchar(50) DEFAULT NULL,
  `IDDepartamento` int(10) DEFAULT NULL,
  PRIMARY KEY (`IDMunicipio`),
  KEY `IDDepartamento` (`IDDepartamento`)
) ENGINE=MyISAM AUTO_INCREMENT=299 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_municipio`
--

INSERT INTO `tbl_municipio` (`IDMunicipio`, `NombreMunicipio`, `IDDepartamento`) VALUES
(14, 'Santa Fe', 2),
(15, 'Santa Rosa de Aguán', 2),
(16, 'Sonaguera', 2),
(17, 'Tocoa', 2),
(18, 'Bonito Oriental', 2),
(19, 'Comayagua', 3),
(20, 'Ajuterique', 3),
(21, 'El Rosario', 3),
(22, 'Esquías', 3),
(23, 'Humuya', 3),
(24, 'La libertad', 3),
(25, 'Lamaní', 3),
(26, 'La Trinidad', 3),
(27, 'Lejamani', 3),
(28, 'Meambar', 3),
(29, 'Minas de Oro', 3),
(30, 'Ojos de Agua', 3),
(31, 'San Jerónimo', 3),
(32, 'San José de Comayagua', 3),
(33, 'San José del Potrero', 3),
(1, 'La Ceiba', 1),
(2, 'El Porvenir', 1),
(3, 'Tela', 1),
(4, 'Jutiapa', 1),
(5, 'La Masica', 1),
(6, 'San Francisco', 1),
(7, 'Arizona', 1),
(8, 'Esparta', 1),
(9, 'Trujillo', 2),
(10, 'Balfate', 2),
(11, 'Iriona', 2),
(12, 'Limón', 2),
(13, 'Sabá', 2),
(34, 'San Luis', 3),
(35, 'San Sebastián', 3),
(36, 'Siguatepeque', 3),
(37, 'Villa de San Antonio', 3),
(38, 'Las Lajas', 3),
(39, 'Taulabé', 3),
(40, 'Santa Rosa de Copán', 4),
(41, 'Cabañas', 4),
(42, 'Concepción', 4),
(43, 'Copán Ruinas', 4),
(44, 'Corquín', 4),
(45, 'Cucuyagua', 4),
(46, 'Dolores', 4),
(47, 'Dulce Nombre', 4),
(48, 'El Paraíso', 4),
(49, 'Florida', 4),
(50, 'La Jigua', 4),
(51, 'La Unión', 4),
(52, 'Nueva Arcadia', 4),
(53, 'San Agustín', 4),
(54, 'San Antonio', 4),
(55, 'San Jerónimo', 4),
(56, 'San José', 4),
(57, 'San Juan de Opoa', 4),
(58, 'San Nicolás', 4),
(59, 'San Pedro', 4),
(60, 'Santa Rita', 4),
(61, 'Trinidad de Copán', 4),
(62, 'Veracruz', 4),
(63, 'San Pedro Sula', 5),
(64, 'Choloma', 5),
(65, 'Omoa', 5),
(66, 'Pimienta', 5),
(67, 'Potrerillos', 5),
(68, 'Puerto Cortés', 5),
(69, 'San Antonio de Cortés', 5),
(70, 'San Francisco de Yojoa', 5),
(71, 'San Manuel', 5),
(72, 'Santa Cruz de Yojoa', 5),
(73, 'Villanueva', 5),
(74, 'La Lima', 5),
(75, 'Choluteca', 6),
(76, 'Apacilagua', 6),
(77, 'Concepción de María', 6),
(78, 'Duyure', 6),
(79, 'El Corpus', 6),
(80, 'El Triunfo', 6),
(81, 'Marcovia', 6),
(82, 'Morolica', 6),
(83, 'Namasigue', 6),
(84, 'Orocuina', 6),
(85, 'Pespire', 6),
(86, 'San Antonio de Flores', 6),
(87, 'San Isidro', 6),
(88, 'San José', 6),
(89, 'San Marcos de Colón', 6),
(90, 'Santa Ana de Yusguare', 6),
(91, 'Yuscarán', 7),
(92, 'Alauca', 7),
(93, 'Danlí', 7),
(94, 'El Paraíso', 7),
(95, 'Güinope', 7),
(96, 'Jacaleapa', 7),
(97, 'Liure', 7),
(98, 'Morocelí', 7),
(99, 'Oropolí', 7),
(100, 'Potrerillos', 7),
(101, 'San Antonio de Flores', 7),
(102, 'San Lucas', 7),
(103, 'San Matías', 7),
(104, 'Soledad', 7),
(105, 'Teupasenti', 7),
(106, 'Texiguat', 7),
(107, 'Vado Ancho', 7),
(108, 'Yauyupe', 7),
(109, 'Trojes', 7),
(110, 'Distrito Central (Tegucigalpa)', 8),
(111, 'Alubarén', 8),
(112, 'Cedros', 8),
(113, 'Curarén', 8),
(114, 'El Porvenir', 8),
(115, 'Guaimaca', 8),
(116, 'La Libertad', 8),
(117, 'La Venta', 8),
(118, 'Lepaterique', 8),
(119, 'Maraita', 8),
(120, 'Marale', 8),
(121, 'Nueva Armenia', 8),
(122, 'Ojojona', 8),
(123, 'Orica', 8),
(124, 'Reitoca', 8),
(125, 'Sabanagrande', 8),
(126, 'San Antonio de Oriente', 8),
(127, 'San Buenaventura', 8),
(128, 'San Ignacio', 8),
(129, 'San Juan de Flores', 8),
(130, 'San Miguelito', 8),
(131, 'Santa Ana', 8),
(132, 'Santa Lucía', 8),
(133, 'Talanga', 8),
(134, 'Tatumbla', 8),
(135, 'Valle de Ángeles', 8),
(136, 'Villa de San Francisco', 8),
(137, 'Vallecillo', 8),
(138, 'Puerto Lempira', 9),
(139, 'Brus Laguna', 9),
(140, 'Ahuas', 9),
(141, 'Juan Francisco Bulnes', 9),
(142, 'Ramón Villeda Morales', 9),
(143, 'Wampusirpe', 9),
(144, 'La Esperanza', 10),
(145, 'Camasca', 10),
(146, 'Colomoncagua', 10),
(147, 'Concepción', 10),
(148, 'Dolores', 10),
(149, 'Intibucá', 10),
(150, 'Jesús de Otoro', 10),
(151, 'Magdalena', 10),
(152, 'Masaguara', 10),
(153, 'San Antonio', 10),
(154, 'San Isidro', 10),
(155, 'San Juan', 10),
(156, 'San Marcos de la Sierra', 10),
(157, 'San Miguel Guancapla', 10),
(158, 'Santa Lucía', 10),
(159, 'Yamaranguila', 10),
(160, 'San Francisco de Opalaca', 10),
(161, 'Roatán', 11),
(162, 'Guanaja', 11),
(163, 'José Santos Guardiola', 11),
(164, 'Utila', 11),
(165, 'La Paz', 12),
(166, 'Aguanqueterique', 12),
(167, 'Cabañas', 12),
(168, 'Cane', 12),
(169, 'Chinacla', 12),
(170, 'Guajiquiro', 12),
(171, 'Lauterique', 12),
(172, 'Marcala', 12),
(173, 'Mercedes de Oriente', 12),
(174, 'Opatoro', 12),
(175, 'San Antonio del Norte', 12),
(176, 'San José', 12),
(177, 'San Juan', 12),
(178, 'San Pedro de Tutule', 12),
(179, 'Santa Ana', 12),
(180, 'Santa Elena', 12),
(181, 'Santa María', 12),
(182, 'Santiago de Puringla', 12),
(183, 'Yarula', 12),
(184, 'Gracias', 13),
(185, 'Belén', 13),
(186, 'Candelaria', 13),
(187, 'Cololaca', 13),
(188, 'Erandique', 13),
(189, 'Gualcince', 13),
(190, 'Guarita', 13),
(191, 'La Campa', 13),
(192, 'La Iguala', 13),
(193, 'Las Flores', 13),
(194, 'La Unión', 13),
(195, 'La Virtud', 13),
(196, 'Lepaera', 13),
(197, 'Mapulaca', 13),
(198, 'Piraera', 13),
(199, 'San Andrés', 13),
(200, 'San Francisco', 13),
(201, 'San Juan Guarita', 13),
(202, 'San Manuel Colohete', 13),
(203, 'San Rafael', 13),
(204, 'San Sebastián', 13),
(205, 'Santa Cruz', 13),
(206, 'Talgua', 13),
(207, 'Tambla', 13),
(208, 'Tomalá', 13),
(209, 'Valladolid', 13),
(210, 'Virginia', 13),
(211, 'San Marcos de Caiquín', 13),
(212, 'Ocotepeque', 14),
(213, 'Belén Gualcho', 14),
(214, 'Concepción', 14),
(215, 'Dolores Merendón', 14),
(216, 'Fraternidad', 14),
(217, 'La Encarnación', 14),
(218, 'La Labor', 14),
(219, 'Lucerna', 14),
(220, 'Mercedes', 14),
(221, 'San Fernando', 14),
(222, 'San Francisco del Valle', 14),
(223, 'San Jorge', 14),
(224, 'San Marcos', 14),
(225, 'Santa Fe', 14),
(226, 'Sensenti', 14),
(227, 'Sinuapa', 14),
(228, 'Juticalpa', 15),
(229, 'Campamento', 15),
(230, 'Catacamas', 15),
(231, 'Concordia', 15),
(232, 'Dulce Nombre de Culmí', 15),
(233, 'El Rosario', 15),
(234, 'Esquipulas del Norte', 15),
(235, 'Gualaco', 15),
(236, 'Guarizama', 15),
(237, 'Guata', 15),
(238, 'Guayape', 15),
(239, 'Jano', 15),
(240, 'La Unión', 15),
(241, 'Mangulile', 15),
(242, 'Manto', 15),
(243, 'Salamá', 15),
(244, 'San Esteban', 15),
(245, 'San Francisco de Becerra', 15),
(246, 'San Francisco de la Paz', 15),
(247, 'Santa María del Real', 15),
(248, 'Silca', 15),
(249, 'Yocón', 15),
(250, 'Patuca', 15),
(251, 'Santa Bárbara', 16),
(252, 'Arada', 16),
(253, 'Atima', 16),
(254, 'Azacualpa', 16),
(255, 'Ceguaca', 16),
(256, 'Concepcion del Norte', 16),
(257, 'Concepción del Sur', 16),
(258, 'Chinda', 16),
(259, 'El Níspero', 16),
(260, 'Gualala', 16),
(261, 'Ilama', 16),
(262, 'Las Vegas', 16),
(263, 'Macuelizo', 16),
(264, 'Naranjito', 16),
(265, 'Nuevo Celilac', 16),
(266, 'Nueva Frontera', 16),
(267, 'Petoa', 16),
(268, 'Protección', 16),
(269, 'Quimistán', 16),
(270, 'San Francisco de Ojuera', 16),
(271, 'San José de Colinas', 16),
(272, 'San Luis', 16),
(273, 'San Marcos', 16),
(274, 'San Nicolás', 16),
(275, 'San Pedro Zacapa', 16),
(276, 'San Vicente Centenario', 16),
(277, 'Santa Rita', 16),
(278, 'Trinidad', 16),
(279, 'Nacaome', 17),
(280, 'Alianza', 17),
(281, 'Amapala', 17),
(282, 'Aramecina', 17),
(283, 'Caridad', 17),
(284, 'Goascorán', 17),
(285, 'Langue', 17),
(286, 'San Francisco de Coray', 17),
(287, 'San Lorenzo', 17),
(288, 'Yoro', 18),
(289, 'Arenal', 18),
(290, 'El Negrito', 18),
(291, 'El Progreso', 18),
(292, 'Jocón', 18),
(293, 'Morazán', 18),
(294, 'Olanchito', 18),
(295, 'Santa Rita', 18),
(296, 'Sulaco', 18),
(297, 'Victoria', 18),
(298, 'Yorito', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

DROP TABLE IF EXISTS `tbl_producto`;
CREATE TABLE IF NOT EXISTS `tbl_producto` (
  `IDProducto` int(10) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `PrecioActual` double DEFAULT NULL,
  `PrecioAnterior` double DEFAULT NULL,
  `Tamano` varchar(20) DEFAULT NULL,
  `Valoracion` int(1) DEFAULT NULL,
  `IDEstado` int(10) DEFAULT NULL,
  `IDColor` int(10) DEFAULT NULL,
  `IDCategoria` int(10) DEFAULT NULL,
  `IDProveedor` int(10) NOT NULL,
  PRIMARY KEY (`IDProducto`),
  KEY `IDColor` (`IDColor`),
  KEY `IDCategoria` (`IDCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

DROP TABLE IF EXISTS `tbl_proveedor`;
CREATE TABLE IF NOT EXISTS `tbl_proveedor` (
  `IDProveedor` int(10) NOT NULL AUTO_INCREMENT,
  `NombreProveedor` varchar(100) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `IDMunicipio` int(10) DEFAULT NULL,
  `Telefono` decimal(15,0) DEFAULT NULL,
  `RTN` int(14) DEFAULT NULL,
  `IDUsuario` int(10) DEFAULT NULL,
  PRIMARY KEY (`IDProveedor`),
  KEY `IDMunicipio` (`IDMunicipio`),
  KEY `IDUsuario` (`IDUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sesion`
--

DROP TABLE IF EXISTS `tbl_sesion`;
CREATE TABLE IF NOT EXISTS `tbl_sesion` (
  `IDUsuario` int(5) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT '0',
  KEY `IDUsuario` (`IDUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_sesion`
--

INSERT INTO `tbl_sesion` (`IDUsuario`, `Estado`) VALUES
(5, 1),
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
-- Estructura de tabla para la tabla `tbl_tipousuario`
--

DROP TABLE IF EXISTS `tbl_tipousuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `IDTipoUsuario` int(2) NOT NULL AUTO_INCREMENT,
  `TipoUsuario` varchar(10) NOT NULL,
  PRIMARY KEY (`IDTipoUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`IDTipoUsuario`, `TipoUsuario`) VALUES
(1, 'Cliente'),
(2, 'Vendedor'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `IDUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Imagen` mediumblob,
  `Password` varchar(100) NOT NULL,
  `TipoUsuario` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IDUsuario`),
  KEY `TipoFK` (`TipoUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`IDUsuario`, `Nombre`, `Apellido`, `Correo`, `Imagen`, `Password`, `TipoUsuario`) VALUES
(5, 'Abner Eliezer', 'Reyes', 'correo@gmail.com', 0x89504e470d0a1a0a0000000d49484452000001f4000001f40806000000cbd6df8a000000097048597300000b1200000b1201d2dd7efc000000206348524d00007a25000080830000f9ff000080e9000075300000ea6000003a980000176f925fc54600009b494944415478daec9d77982455d5c6df4a9da7c3e49c36e7c806369073ce12448202a288808808a88888e91323828a8022a2802405490bec029b739e9db893f34ce7ee0af7fba367869d9d5435dd9376cfef79569999eeeaaa5bd5f7bd27dc7338c618034110044110131a9e86802008822048d009822008822041270882200882049d20088220081274822008822041270882200862dc20d21010c3a5ccaff5f95d696d00c188daeb774159435d8876478e15254d5e1cdcb29306620c9997e786c761eef53b4f9205ab1714f6fadda2020f0d16316c38da874e0c25d881a082b286602f616e132428820045a435e17867fd473bb0bdb49606629c2380c10a0d561e28764abd1602cbe7e421dd6327d127c84227f40977696d002d7e197521d68f605b010e808dc68b204602151cfc10e0d780e68ed8777263475bd7aaac1e00e080da23f8f3f2dc28ce72f558f924f40459e8c7a978ef2af7a2c6afa245e3113499c8d2260b9d98e0d67dae89616ab2050b8b5270d1eae924f224e8c4b128de81a082ddd57e5486800e9399c49b049d380e704045a19dc789c5293877f96472d993a0131359c04b421cbc36f29193a093a013310a4c1ace9a96da23f024ee24e8c43814f1d2da00763547516773d0a01024e8c490086058ec1670c992028ac393a013632de21b0e7690154e90a01309b5de6f38771e893b093a311a22be666f3bca350961b39906852041274684345ec5c9852edc75c50924ee24e80459e204093a41963b41824e228efad6303eae0ea3c566a7412148d08971c16c3bc337cf9d8d99c5e924ec24e8c460421e082ad858e1c33e8912db08127462fc2280e1d2e2245c7bfa4cca962741278e1472b2c609127482ac7682047d828a3810abd6b629c053821b41824e4c78d27815372dcda52a7524e8c79790afd9db4e6e7582049d3866b9a2d84119f224e8c7ae901f6ff17151510000e9d170cfef2c3c90eb10e881186536772810ab0ed1408c01db2a5ae10d2b3d3fefed90010021f050c11d17c24e717612f4634ac8df29f11d7315dc4445417a34dc23d236b380c939bd73002639787a0808a21fb656b5f7fcf7daed9568f7857bc47f6f877ccc09fe52378ffbaf5c4cc24e823e31851c00dedad58e72cbc416724b2482645546b69543aa43ea25da24d80431b282bf767b25caeb3bb1b3ba03e55e19cddac4f6709d9169c2c35f5a01805cf124e81344c8276a8cbcdbea9eec143029d306bb4d24e126887126f24ded01acdf5d8d8ff637626f870c3f269ec8538c9d047ddc8bf9ae722fd62ad609657d67331953534c3d96378937414c4c4bfe835db5d8d1149a5056fc7dcbb370d1eae924ea24e8e347c84b6b0378bf939f107dc6b3837ecc4d23012788635de05fdd54852d1deab88fc53ba0e2c1332763f58242127612f4b113f24050c12b2581715d63dd1289a09897b1b428895ce804711c0a7c537b007f7f7f1f3eaaec1cd7d67b8149c3af6f5846897324e8a32be4c0f84e78730683986a655836cd4d024e10442febfdd9b776e29d832da88a8ecf79a13b718e449d047dc4c5bcb43680ff054ce3d2129f6d5248c409823024eeafee6d1e7796bb008647cf2c26373c09fac8087920a8e0cd12ffb8abb73e53f6f7b8d349c40982188eb877bbe5ff5dee1b5731f7d976861f5dbb94dcf024e88913f3f196bdee0c0671629a48896d0441245cdcd76eafc41f3e2a1b572e79ca8627413fe6ac72b2c60982186dabfda5723f59eb24e864952702515170a245c6dc622759e304418cbab003c0eb6b0fe0f7eb6bc645111bb2d649d0750b3900fc7b47fb98d75e7706833823cf8cac140b89384110e342dcf79537e191d7778fb93b7ea99bc7e3b79e44a24e823eb098d7b786f14aebd8ae4049c8098220611f1a010c4f5d311b338bd349d849d07b8bf986831dd8c28d5dac3c3be8c75953293e4e10c4c411f6a6f6001efbd7166cecd0c6ec3cbaebc293a81fe782deed62ffeb8ece31abf6461639411064b1c7478149c33fee3aedb817f5e356d0c7dac54e424e1004097be22017fc712ae86399c57e64d63a09394110c7a2b08f6556fcf19c057fdc097a995f1bb33aec8b5900cba6b949c80982382e84fdd9b776e28fbbdb46fdb38fd77af0c78da08f6577344a782308e27815f5b14a9cebeede76cefc5c12f46351cc9fa919dd4b15150517657014272708e2b817f67de54df8e64bbb46d50d2f80e1955b8e9fea72c7bca08f55873472af130441f415f6b170c3ffe4cca2e3a273db312de86321e6964804574fb2907b9d20086200516f6a0fe02b7f5e3faa6d5b8f07513f6605bdccaf61cdde76ec93462ff98dac72822088f16bad1feb45688e49411f6d3127ab9c2008626258ebc7b2a81f73825ee6d746b5b90a59e504411013cb5a3f56b7b51d53825ee6d746b58ceb65292a65b01304412448d4f79537e1d697f6400537e29f772c968b3d66047d34c53c3be8c7a5f3630f0189394110446285fd96dfadc19e0089fa7129e8a329e6e4622708821879511f2d17fcb124ea135ed04753ccc9c54e1004317aa23e5a2ef86345d427b4a08f96983b83415c36d54e59ec044110a3ccdb3b6a70e7b31b46bc83dbb120ea1356d0474bcc8bc37e9c3bd743424e10043186d6faf79ffb14ef354449d48f35411fad8e69abc510b5392508821827a2fefada03f8e9fafa11fd9c89bca56dc209fa68158d39db1ec5e41c3b89394110c43812f5b5db2bf19d772b46f473266af1990925e8a325e637e672142f27088218a7a2ded41ec0657fdc38a2c9721351d4278c6275375a194931b7442224e6044110e39845051e9c333f17afdcb21469bc3a629ff352b91f6bb757626b553b59e82321e623d935cd190ce2faf92e12728220880964ad5ffdf807239a013f91bab48d7bf52af36b0804151273822008a28fb5fe8fbb4e4381491bb1cff8cebb15686a0f4c88f198100af64ccdc839118ac37e1273822088092eea67648e9cd177d91f374e08d7fbb856b1eebde623c54c99f6981304411c0ba2fef09756e08ae291c9b152c1e1eac73f18f7a23e6e95ac7baff948158e9929fb71ea2c12738220886345d4efbae2841113f5aa288fef3ff7e9b816f571a966657e0dbbcabd23563886c49c20088244dd28ef3544f1fada03e356d4c79da295f935d4b786b156b1929813044110e34ad47fbabe1efbca9b48d0f5f24aab3022c7cd0e92981304411c2fa2bed43d3273fdad2fed199756fab852b632bf861777748cc8b19dc1202e9d4f624e100471bc88fae3b79e34225bda5470b8e5776bc69da88f1b752bf36bd870b0032d36fb8888396d4d23088238fe447da4f6a9ef097078f6ad9de34ad4c78dc2d5b786b1854bbc985b22111273822088e35cd447a24cec1f77b78dab78fab850b932bf86d71b47a678ccd5932c24e6044110c7b9a8ffe9cbcb2120f13af3cd97768d1b2b7dcc95aeccafe1df3bdaa18862c28fdddd688520088238bee96ee89268fc1070d7531f8f0b511f5341ef6eba52674bfcf682b3ed51ea9a46100441f490eeb1e327671625fcb81b3b34acdd5e4916fa48345d59cc02989c632731270882207a5854e0c1ea0585b8654e72c28ffdc0bbe5636ea58f99e275bbda134d71d88f65d3dc24e604411044bfa27ec3b9f312decc450537e6aef73151bd9172b53b83416ab6421004410c29ea0f7f6945c2b7b38db5eb7dcc946f245ced974d25373b411004a14fd47f7dc3b28467be8fa5eb7dd4d56fa45ceddd497004411004a18773e6e7e2d1338b137accb174bd8fbaa0d7b78613ee6aa7243882200862388c4492dcc60e6d4c0ace8caa028e440199d4608092e00882208861d19d2437db9e586d1a8b8233a3a682ddb5da135d40e60bf349cc09822088f844fd47d72e4d683cdd0f61d46bbd8f9a1206824ac26bb59f6d8fd29348100441c4cd48c4d3ffb8bb0d4ded81634bd0cbfc1ade29f125f498c5613fc5cd0982208884b17a4161c2f7a73ff6af2da366a58f8a1a263a114e5414da6f4e1004412494eefde90e24ae33db6826c88db82296f935bc571d49e8312fcae048cc098220881111f55f5d3137a1c77ce4f5dda362a58fb82ad6b786e1b5d91276bce2b01f5929167aea08822088116166717a425def55517e54acf41115f4446f5323573b411004311a567aa25defa3b18d6d44957157b937a1dbd4c8d54e1004418c96a827d2f5ee8780d7d71e9898825ee6d7f059584ad8f1b283e46a27088220468f99c5e958ea4e9c4cfe7e7dcd885ae92326e889b6ce2f9d4fae768220086274adf4c76f3d2961056746da4a1f11854cb475be5a0cd193451004418c89a87f6b79f684b0d24744d013699d3b8341cc2d7692754e1004418c0917ad9e9eb0dee92369a5275c25136d9d9f9167263127088220c6d44a7fe8a239e3de4a4fb85226d23aa74438822008623c90c804b991b2d2132ae8657e0d3bbc89db777ed6d424b2ce098220887161a5df7fe5e2841defc5adb509b7d213aa9689ac0a3753f6c36e13e92922088220c605e91e3bae284e4c5f9291a81e9730412ff36bf8b83a9cb0133b75166d5323088220c697957ed7152724ec78bf7a6b4f42adf484296620a8a0c596987ee78b59809e1c822008625c72cb9ce4841c674f804b68bff484087a995fc3c68ac4f43b171505cba6b9c93a27088220c6a5957ec3b9f31256e7fdefefef4b98959e30d5dc272526ae70a245263127088220c6b5a87f6d796e428ef552b97f7c59e8bbcabd09b3cee7163be96921088220c63517ad9e9e302b3d515bd8e216f4446e559b2f44c83a270882202684957ecd9cb4841c2b515bd8e256cf405049d856b565d3dcf4941004411013821bce9d9790e35445f98424c7c525e8894c869b29fbe9e920088220261489da97fef7f7f78dbd859ea86438da774e1004414c2412b92ffddfe5beb8ddee7129687d6b620ac96407c93a27088220262689a8f1ae828bbb72dcb0cfa2ccaf617b6d62fa9453cd7682200862a25ae989aaf1fecf7587e2b2d2e352d1724bfcee7667304835db09822088094bbac79e907ee9ef3544c7c6422fad4d4cb9ba13d344b2ce09822088096da57ff5e4490939d6daed95a32be8657e0d5b9ae5849cfce41c3b3d0d044110c48466f582420888bf26cbf39f968fbe859e88462cb4558d2008823856acf44b8b93e23ecefe00861d471f96a0272abb7d691125c311044110c706d79e3e33ee63c493ed3e2c354d44763b25c311044110c712894a8efbe7ba43a323e8657e0d87454bdc273cdfc991754e1004411c332c2af0e00b8b72e23ecefa86d0b0dcee8615351054a088f15bd6d4558d20088238d6b868f5f4b88fe18730acdaee86057d7775fc896ca9c100dd75822008e29864b63dfe6cf7b7d6978eaca097f9355426a038dce23489dced044110c431c7a2020fae5b511cf7713e2b6f35ec7637acaa89d8ae467bcf098220886395d50b0ae33ec69e0037b2167a22b6ab91bb9d20088238d64984dbdde8f6354382bebf217e7f3bb9db09822088639944b9dddfd95a3532825ee6d75023c72fc4e46e270882208e7512e176df54e31d390bdd6bb3c57572ce6090ee32411004715c106f91999a286728314eb7a007824adc1737d5cac8dd4e1004411cf32c2af0e0ac69a9711d430567683fba7e977b43fcd6f59c3c07dd65822008e2b8e0dce593e33ec6faddd58917f452af1ad749898a42b5db09822088e386748f1d0ec4a79d1fed6f4caca097f935b409527c17160d93bb9d200882386e5854e0c12c777cda59ee9575c7d1752b6cd86c8eeba4263b05babb044110c471c5c93332e27a7fb3a65f3b75097a2212e2a8190b41100471bc9188662d7a13e3f4b9dce34c88131585ee2a411004715c126f1c5d6f629c2e41aff1c77732143f270882208e47121147df56d19a3841f76a5c5c2743f173822008e27825de387abd2f9218412ff36be830c597103729d3467794200882382e593e272faef75706345d99eeba2c74458c6fff38ed3f270882208e57d23df1f530f1439f977bc403db964884ee26411004715c93c6ab23fe19430afaae726f5c1f90acca9410471004411cb72c2af0a0d8195f62dceb6b0f8cbd854e0971044110c4f14ebc897109b1d0e3ade14e0971044110c4f14ebc89717a6aba8fb8854e0971044110c4f14ebc897109b1d0e369ca4215e20882200822463c15e3cabd727c825ee6d7a008c38f81dba2514a88230882208e7b16157890621a7e91b69096000b3d9e3de80e687417098220080240661c21e810f8218bcb8ca8f99c6de5e80e1204411004807979ee61bf57c5d07a3aa2826e93c8dd4e1004411000e0719847f4f823aab8b4658d2008822062c4bb752d2e418fb74a1c6d59230882208818f16e5d1baa5a1cf9c409822008e21860c4049df6a013044110446fe2d98b3e66820e80f6a01304411044178b0a3c13d3424f8f86e9ee11044110c411cc724b2376ec4105bdc6afd2e813044110c438605b45ebf0053d4c85de08822008625ce00d2bc317f4781841af02411004414c48f29347ae3ecb88097aaa55a03b471004411047509c9134f1049d2008822088d183049d2008822048d009822008822041270882200882049d20088220081274822008822041270882200882049d20088220081274822008822048d00982200882049d20088220081274822008822048d0098220088220412708620ca9eb086173451bbc2199068320128c48434010c468d0ea8fe2b667b76247553bbeb4b2083fbc6c36b8047f86c6187efce67e347ac310380ea2c0e11b674c457e8a6d428d554d5b10bf7ef710781e78f0825948b2d2544d90a01304314e787973353ed8db8088a2e1e3834d88c82a2c928088a241630c268187c0c727f1cdbe089efab0acc70390e134e32b27154fb8b1aa6d0fe137ef9520db63c5f72f9e450f0f41824e10c4f8e160bd0f82c04302302bdb058b2440d1181e7b731f1abd115cbfa210cb27a7c4f519654d0184651500a0a81a5293cc48775926dc58ad2b694654d1303dd30991a7c828a10f7a520882181566e638e1b649705a255cbe243726c08d7efceefd43f8cbda727406a3717f0607a028d50e49e0c1004ccf76c2699126d43831069435f9018d21c76301cf73f4f01064a11304317ef8f249c5583639056651c0940c0700a0d11b8637ac20c763c5d24929717fc6f2c92978e51b2b70ce2fd6a2a22500b7d514b71b7fb4092b2a3e2b6d0518c3aaa9691049d009127482208ce00b292869f40100a6662621c922a2b63d84fa8e30c0011689c78c2c27049e43654b00cdbe08d292ccc84bb6a1bcd98f4044415a9205adfe080ed4fb90976cc5e2a26484a22a2a9b03601c20f0b144b540544169a31fcfaeab00630c66914749831f82c0a138cd8e64bb090050d71e4269b31f154d0148028ffc541b961627431206762e8a3c8f165f04aac6302533a9e7f78ac6b0a5a20d75ed2104222a6c6601f3f3dd9894eee8f5fe4024766e7b6abd008079792e584d02f2536c3d9f2bab1a3696b5a22328a3d51fc5b4ac24786c2614a5d961128d393eab5a83f8aca405e5cd019c3c230db2a2a1dd1f85c36e86ab6b1cba2df7ca9600ca9b02a86e0b20c7634361aaadd735f6873faca0b4c90f81e790edb6a2a4c187f2663f564e4d43b6db823db59dd85beb438a5dc2f2c9a970db7a7b34c2b28a92061ff6d5c59e8d1cb705cb26a7f4ba07952d01740665b8ed26f8c3324a1a7c70594d583935b5d7781ca8f7e1706b100d9d215825018569762c2e4c06476b161274822012c75f3fadc4f75fdb0330e0a3fb4fc1ec5c17bef6d76df8687f23388ec3e40c07deb9f724382d22bef5c20ebcbeb506bfb87601be7efa14dcf8a7cdd859dd8e95535251d614408b3f0251e0f1c63757c22cf238f3671f83e33884151537ad2ac21796e5e3ac9f7f0c9ee7906491d0ec8be0825fad4528aa61dd03a720d96ec2aeea0edcfed7add85beb85c873602c96c5fec0853370e799d306b45cf7d779a130068d312c2a740300a2aa8627d794e2c76fee87a232705c2cc65e906ac79b77ad425e722c0bbec51fc137ffbe1defee6e006340771abecb2ae1dbe74ec72da74c822f2ce3fffe578227de3f04d6eb93397cf594627cff92d9babd0235ed215cfcab4f50d1e287c8f3f8f57b25709805f8c20aec6611a9496600b1eb7e69730d1e7e752f1abd21f01c075563c87059f0cc57966059f1c0de8dffedaac737febe0d768b84e99949585fda0a59d33027c785155352f1d74f2b115535c80ac3cd2715e16757cdeb11eb665f04dffac74efc6f773d342d76b53cc7e192c539f8f5750b61ee12ebdb9edd8a4f0f35637151321a3ac368ec0c03007e73dd425c7762011880ffeea8c3bd2fee8ced40e8ba9f22cfe199af2cc1d973b3409a1e3f14432708226689292a026105818882dc641bbc611965cd7e281a4354d110513448028fb0a261674d077891c7a47407548da12d180603f0f1c16634744de66dfe08dedddd80d2263f5abc61c8aa0645d5e0b44ad85fe74558567b26715563f08664883c07b32820145571ebb35bb0b9bc0d9ac6108caa90550db2aae1a7ff3980266f78108b370055d3e0b64af07459b81fec6dc4775fda8d6054455856118aaae0380e7b6abc78f48d7d600c608ce1c197f7e01f1b0ec7ae578d5d7344d650d31e823fa20000feb2ae028fbdb91f5145eb199788a2a1d51f4644d5745b9baac6f0d567b7604f6d07388e83ac6a084755b4faa3d01883c00133b39d008075075bf0f5bf6ec5e1b600649521226bb1587ba31f77ff7d7b4f22607f48228ff6a08cc6ce30dedfd708556310380e3bab3bf0ab774b1088aa886935c3cb9b6bb0afcb331155347ce75fbbf08f0d5508cb2ac28a0a59d3105155fc7d7d155edf560b0088281a9a7d11681ab0a9ac0d356d41b0ee45c8a66a0040756b10b7ff752baa5a8390550dc1a80a45d3d0198ae2a15776a32310a52f20093a41108940630c9bca5aa13206596390d598dbf7704b00a2c081e3629305cf0125f53e54b785603389f0d84ca8690fa133a88007078fcd049b59888906cfa1bcd98f86ce30525d16303070e0906c37a123184596dbda65750366514071aa034b2625232dc98cffeea8c3e6f2365824012eab8429190e584d02049e436b208acf0eb5f47b1d8c01e1a88ace808c6487190eb3846054c543afec86aa69608c213fc5861c8f158aaac122f1f8f4500bfc1105071b7c78614315ec66013c1f3bcf64bb091ebb844c9705cb27a7a22328e357ff2b812472903506a7558abdc626213fc58649e90ef03a157d7b553b3ed8d708bb59444456e1b24970d944083c078d31a4392d705a2584a22a1e7c6517021105aac6e0308b484d3241d534d84c02ca9b03d85cde36e078ec38dc01456190780e690e33544d8bb967791e1ebb094e8b0859d1200a3c425135969007e0c3fd4d78617d15cc92008e03b2dd567088dd2f456358b3af111a6338dc1280372483e301974d42924582d6b56810f85878e217ff3b80fa8e30449e43a6cb82c9e90e883c0f8b24a2a4c10f6f980a0d250272b9130401c68074a7056080c72641d518deddd3007f5881b3bba8091f9bcc77547740d51852934c9857e0c6aec31d88281a041ef8c69953e0b29af0d87ff6a1a65d01cf71f8d28a42883c8f075fd905bfa2e0c429a99893e7c2b44c27aefcfd67304b026e5c5d848b17e66072860302cfe1fffe771022cfc16612f0d3abe661768e0baf6ca98e155be138b407fa170059d5f059690b180352ec26243b4cd85ddd8103f53e701c87f3e765e33be7cf4020aae0966736a3bc29005f584147308a9736d5201c55e1b14bb87a59014e9d990e0e80ca186c26118b0a3d5857d28ceab6206c2601e72fc8c11796e581e362d6b64910b04c67629fc618fef4713914954112804b17e7e2e285395034865ffeef20b657b5232dc90491e7b0bda6133baa3ac0009c383905b79d321936b3805fbd5382f565ad505486ca9600564d4bebf77376d57440143814a73bf0ed73a7e3e5cdd5786f6f2318182e5a9883b3e764e2f71f946263592b388e83cd2c221455f1e7b5e5600c70db445cbfa210aba6a661776d277efbee2134fa22286ff6c31756d0e28f20105120f23c6e5a5d84e95949f8deab7bd0e68f22c922a1be338cffedaa87c4c7f2237e7ddd4278ec26fce2ed03787d5b2d1880cae6000a52ecf44524412708225e049e0303609604d8cd021803b654b6c36616e0b4c662dc16510003c33bbbeaa1c82a964d4e85c32c22246be8084491936cc3850b7290edb6e2b7ef1f8216f6614e9e1bce2e0b5bd518521d66083c609504382c22a2aa06bb59c41527e4625161328058dcf650432c01ebeba74fc1258b720000f3f2ddb09878f8c36cd06ba9ef08811738cccd77c124f078756b0d148dc16393f0834b66a330d50e5f58c6948c241cacf7c122f190150d7b6a3a60127938ad26dc7c5231a6672581e7b85ef1f077763580e338d8cd126e3d65124e9c920281e30c6f2d8b2a1a765675005d22fdcbabe723dd6941ab3f8a3f7c500a45d6302fdf0d4565f8f7d61a04a20a72dc363cf9a5c53d49704eab84cb7ffb19228ada130ee84fd05b7d51281ac3fc7c37ae58928745851ebcb7f73d701c8739b92e5cb2283776bf2bda10513424db4db1e23f079aa0300d37ad2ec63d674f83d32a61d5b4346ca968c7bf361c86acc69219059e478b3f962079c1fc6c2c9d94825fbd7b0815755eccc973a1bc2980ca96204c028fc7ae9c8b659353a0690cf3f2dd7873471d98ca747b35081274822074e00bcbe03920c92ca2c91bc6da83cd487698b1a438196f6cab45a6cb025961d855d3099349c0250b6342fbd9a166a82a83dd24c2659320ab1ae6e6ba90e5b6202d2916c36ef286d119949191694592359645bdb9bc0d1c00b3c4637a96b3e73cd697b642610c2691c786b2563cf8ca1e54360770a0c18b70540503603309035e476d7b18a2c0c369899d4b654b000083c0f378624d29bc211975ed21ecaaee804914e0b19b20083cea3ac290041efeb08c1fbdb10f53321c5034866cb7057372dd583935150a6310050e8aaae1676fedc7ec5c171803723d56e424db70f69c4cd8cd434fab654d7ed47586202b1a2e59941bf38e0068f28551d711824912b0a0c00351e0f0f1c12600c05973327b65b45b4401269187ac6a70db4cfd7e4e675046755b108aaaa130356601775be01649804d127b16074a973bdf6116b0b5b20dde90029b24e2dae5057076dd33b32840e038a02b1d5063c0fab256681a832470c8f658118aaa98946687cb2222cd69c186b216081c0793c8e35f1babf1e6f63ad4b487b0afae136080ca34141db5d38020412708220e38c432a7531c66d4b60751dd1ac469b33270fefc2cfc7b730dec6611fbebbca86d0bc26337615191070070b03eb6dd2cdb63455a92191cc7e197d7cc87c6008fdd048d31ac3dd80c30c0691351d8e55aad68f183e7396424997b5968871a7d0062dbdbdeddd380ffeca88328f090040e02cf83e738cccf77f77b0d35ed4174866428aa86259352e08f28d85de38524f0f08565fce6dd12f03c0791e73e1743ab04ab24201295115562c95aaf6ead81a631701c0749e070e6ec4c2c2e4a06c02122ab10780eefef6dc4bbbb1bc0f11ccc028fd9792eac9c92aa4bd0ebda43084555984d42d771bb26648e43636704368b0897554220a2a0c91b01cff39899e3ec7dbf38a0d51f81cb2a21dd69eef7732a5b0390550d3c879e7dfedbabdac177c5e9e7e4b9625e8dce30022119994e0b2451c0f6aa76083c078f5d428ec7da733c95317404a3e0780e53321cb0483cf6d77642e039a43accc8705a20093c7e7ddd42282a83c72ee1fe977681e362619dbf7d5609ad2bbb5d12797000dc5613edb5274127086224d0007cb0b70981b08c1327a700acdb1dcf636b651b4251152714a720cd11b32a0fb70520893cd2924c3ddb9db2dc9f8b40585651d1ec87d495156f1279282a438b2f8a485445bacb0a8d755b7c0cfeb0826054419259445eb20d8210dbe204c462d51e9b848152c90fd4f9a0681a2c928019d94e84a22ada0351f01c078b2420c365c1e7f625105554cc2ff020dd6946617a124451447b308a50544163670466894744d6108ac6443c3fc58a4585c908cb3137779b3f0a0680690cb2ca746f5793550d2dfe28723c1628dae7218492063f228a8a24514241aa1d35ed2104220a186338e108e107801d873b118aaa484b32a328ad7f0b371851e10dc948735a200ab1733b50ef03cfa1e77e30001bca5a018e43b2c304a755444573008c3164b9adbdce0f002a5b82b048021c66118c01c18802458d25f1752f3432bbcaed866415bb6b3a635bd4bae2f8478ebfac689896e5a47de824e80441241a869825b5b1a20d2629663d7e5ad202a631d47784a1a8ed50140d972eca81cd2cc01f56d0ec8d20226b9891e5ecf7983cc7a1a63d0c51e090d2b58dac3d184559931f0cc069b3327aac5a8d017b6a3aa1aa0c996e0b1ebf66418f3b3a768231299894de7f02556d7bccbd9ce1b4202cabd03486901cdbf2f6e8e57370ca8c74c80ac3919b9e5d5deee43fde78023a8251f8c2320291d8d6b6dbffba15a58d7e4ceecab2ffca49c5b864612e02510581b082eab6207ef6d6016caf6a87aa69ba8bcaeca9ed040706011cacd2e7e1833d751d10791e66894761aa1dfbebbc503506c600bbb97798e1c3fd8d10051ed91e2bf292adfd7e4e63672856f025d5d4b3d7beb4d10706203dc98ca8aa010c68f686c1711c8aba8afab4f822e0c081037a1590d955dd8186ce10548de194191908c92af6d47aa1691a66643bfb58daa1a80a6f4881a231cccc76e16757cd85f988eb658c411278a43acc3db797c49d049d20880420f01c5afd11f8230a325c16ccce75e1e3034de0790e07eb7d286df4c1661571cedc2c00c0be3a2ffc11052691ef37cb3a66056b5d96ba8639b96e0080372477ed3be721f21c8251b547fc1918780ee80cc97098454cce886d05635d626e95840193d0388e4358d6e0b24a705b25f8baac478d01bbab3bf18565f9b09ac49e8501cf71b09a624d624c228f74a705e949663000fbea3ad1e68ff67c9ed6b5152fcd69461a4c0062166d47200a5563487398613589d857e7455d7b1005a9764cce481aa0600a079ee31088aad850de0ab75d0287d896409531243b4cb099044414153cc7c12cf2f8d3c715f849462c86fedf1df558b3af111c079c3e33a3dfca790cc0a68a76701c0777d7b63a20b66f5c513464bbadb18514073474c6f20732bb5ce61145832472286df4a3a4c18769994968f645f0e81bfb108cc62a022e9d948c165f041dc1284c928053a6a7f7b92ffeb08288ac40e039b407a2484b3223d36d0518ebb1d2ed5d96fedbbbeb71a0d68b0b17e6f4a9de4790a01304617442e039347486119655ac9c9a0a8fcd84a8a241e03978435104a32a66663b91d515576dea7a6d5a92194996fea793f660148188023086a593626ee3404441588e59b44f7d58862d156d70db243c76c55c78ac26701c075f48c1adcf6ec182024fd7deecd83ef82fad2cc4c9d3d3fb0a188bb9b2436105d91e0bb2dc5674d67b611238003c5eda5c8deab62032dd56681a4354553139dd81072f9c85d6401477ff7d3b4c120f0e1c0481c3b68ab61eebfed499e968f645f083d7f620105621f08028f0286ff2a3b62304701c2e5c98835054c1d57f588f03755e9c312b13afdeb9a25fb1ed767fcbaa861fbdbe0f2f6daa06c701fb6abdd01890e7b1810170594d602ce61e7f695335dafc514822874f4a5ae00b2b7098455cd4959cd877c9005434f9611263f90d92c0f7b8cf231115f30bdc5d3b1a189abc11688c6152d782c16e16c10188a81abefaec16ccce75a1bc39808d65ad0080155353e1b699d0110ca02d1085d32a21c3d5378e6f378b3089b1fa0195ad015cf7d4464ccf7642d36295fc449ec32fae9e8f4044c50d7fdc84a6b620b656b5e3d92f2fed192382049d208861c2ba84e6d4191910780e1d41051c077487524f9b95098b28f408539b2f82d9f96ecccd73f77bbcb64014b2a221ddf579f25becff18249143756b00fb6a3a31b7ab66fac933d3f1977515108558cdf803f53e00312bdb2a09b86a697ebf9fa331167b2dcfc1659360350948775a90e1b2a0a2390049e4b0667f13545503380e8aace2d2257990041eeb0e36e3c54f2a20767566638cc12a0950194341aa0de7cdcd464367184fad2903cf733d1e039318f330a43a4cb864512e3696b762d7e10e38ad12bce1684fecff6816172643e0b9aef18d625d4933548dc122c50476467612449ec3b4ac24a4269951d51280ca31bcbab5060c80dd2420aa68387f7e3666e7ba06f48c34fb225055d6e3d28e2a1a0eb706219904b86d26f05ccc3bc277dd8fb95d49722ba6a4e2df5b6a60330bd855d389cd156d3089b17ef54e8b84fbce9d0e93c8a3ac29b6177d529a0333b2fb9e87c72e616181077b6a3b611145ecaceec0e6f258bc5e513564baacf8f1151afeb3a3166dfe08ec76133a8272574e0509ba51a8521c41103dd6a2aab158911491c759733221f01caadb8200d013cb3d776e562c6b19c087079aa1a91ae6e4ba200d103f6e0f44119663dba492ba8ad464382d48769811e9aa5026893c52922ce0390ea7cd4cc7bc7c3702111522cfc361116135c52aa815a6d97b6d713b5ad09bbc6140d590971c8bb1e778acf8da695320abaca7b29add22c22cf23099c4589216076c2a6b85601661330948b288705a25a80cc87459f1d32be7c124f2585fda0274ed9bef7e4d2c44c0e14797ce41b6db8a8ae620789e83a2316438ad03c683276738303ddb89b0ac82e763b1ea2cb7150eb3089e438f384a0287bbce9a0a45d5a031068745ecd9fbbf626a2a1eb974362c52ff5bf81a3ac3a86b0f4191359c3c23e6d1e84e1264f83c71b13d10853724c365352122c7c22337ad2ec2bc7c377c21056691efb9560e1ceebf60061616c676386c2a6f83a66a284cb3f79ba9ce731c6e3eb9182eabd4e39171582458241e3ccfe184e264d84c02ea3b635b0dc3b28a59394eb2cec9422708221e16157a20770987cd24624a46121803564e498d6d191338382de2e7dba718906c9770d6826c9c3f3f2ba6f0fdccc31649c069b33290edb6f42466a5392df8dd1717e2819776a32d18c1e9b33271f5b298e59de9b2e2992f2fc19f3f2ec3d6ca0e44141573725c9895ebc2d973b3903b400218004ccb72e2acf9d938737646cfef6e5c550849e0f0ce9e06ecabf52227d98a45051ecccb77e3d499b1d75db9341f933392f0dede061ca8f741630c2ba7a6e2ba130bb1724a2a00e094191978e6b665f8705f1376557720dc55fce58b2716e28cd919e038e0ccd919284ab5a3bcd98f39792e887cff8b9c6cb7158f5f3d1fbfffa014552d019cb7201b67cdcac49afd8dd871b8134569f61e41bc7679011c6611cf7d5281f2e600325c169c3d2713d72c2fe8d95bde1f2159c5b229a9989befc6f4aefdeb02cf61e9a41464b92d583125b68d4dd16282cf731c6674d58eb748029ebef9043cbdb602efed6980a2312c294ac655cb0a70c6accfc31da90e13ce9b9f8d1b57170fb8b0585a9c8c97ef5881bf7d52816d55ed7058242c2e4a46619a1d17cccb86d32ae1acd9997865530d0ad3ecb8f79ce954686698708cb101cb2efdfc9356d4d986979cb05a0ce192b96e1a6182208e2bbefad7ad78f2fd4378f98e95b8ec845c1a10a217dffbdb7afc747dfdb0debbd4cd63ed8f2f1ef0efe472270882482053d21d38656606921d261a0c625421973b41104402b9fbec69b8fbec69341004093a418c475adbdaf1d1da4ff1da1b6fe3fd8f3e892532c511e7531415d3a74dc62d377d11a79eb4029919e934c8044190a013c448f2ee071fe12f7ffd073e5afb19bc5e3fac564b428ebb75fb2edc7ee77d58b66431eefde65771da29ab68b009822041278844d3dede81a7fef237fce689a7d1d1d101b3d99c30310700932441d334acfb74034a0e95e28edbbf8cafdc782d1c76ea0b4d1004093a412484fd074af0c84f7f85575f7f0b668b1956ab75443e87e779582c66b4b577e0878ffd1feaea1bf0e0b7bf0997cb493781200812748288870d9bb6e2de071ec1e6ad3b60b75947e533054180a66978e28fcf221c8ae0473ff80e5cce24ba19044190a013c470d8b16b0fbe78f3d75157df085b02ddeb7aad759324e12f7ffb07921c76fce0a17b619224ba29044190a0138411f6ed2fc1976fbf07f50d8db058cc63720edda2fec49f9ec5ac99d370cd5597c6954d4f1063415d7d030ed7d441922460e0da657de180ecac4c64d1ae0f12f4e309865867a619d94954263101747476e2d63beec5ee3dfbe1708c6d521acff38846a3b8efc11f61c9e2059832b9986e103161a8a9adc7e5d7de8c9243e590242312c3c1ebf5e1a61baec1ef7ff9631ac8e1cc1d34041393c68e30145523314f009148045fbffbbbd8b465fb988b79372693092dad6df8e6b7bf074555e9261113c3d0600cbf7bf2696cdfb9170020cb8aee7fd1a80c06868bce3b8b069204fd78fad2002f6daa467e8a8d06230113d0dffff96ffcebe537601f67dbc56c362b3ef8701d5e7ef54dba51c484a0aebe112fbef4062ce6584f7b23ffa272148b16ccc529ab4fa48124413f7e68f086b1a5b20d6e3bd58a8e97b2f24a7cff473f87c562c1787376701c0793c9849ffee2b708048374b38871cf3f5f7a0d8d4d4d1045e3d15ca631fcf0a16fc7e2ee0409fa44b6b89b7d11ddafffd347652848b5c702e9c4b089b9daef477373abc158dfe8218a220e9494e1ad773ea01b468c6b9a5b5af1f45fff312c318f442258b1ec04ac5eb99c0692047d62e30dcb286ff6eb7a6d54d1f0ef2d355850e00685cfe3e31f2fbd8a351f7d0abb7dfc862e380ee0790ebff8d51f100a87e9a611e39637df7a17e5155530998c59d88c310882806fdff3354822e56993a04f70b656b4616a86be2222d56d41d4b6871096351ab838686a6ec1a33ffd75424bb98e1416b319fb0f9460c3c6ad74e388f16994f8fcf8fd53cf401005c3ef0d85c2587ac2429c7632f53220419fe0f8230ab657b5c365d3b7aa7d637b2dbc611966896edd70618ce1c9a7ff8aeadaba61b907c7c24c976519afbef11665bc13e3920f3ffe14070e96c26c3219fe2e9a4c26fce0816f81e7694e8b17f26f8c31efed6984cb66d2bdfdecb3432db04902c5cfe3a0aebe117f7dfe2598a5c42415466519b22cc36ab1f42c101863084722608cc16c32c55d1c469224bcfbfec7f0f9fcf0b85d7413750885aaaad01803630c3b76ee85dbed842c2b00189c4949e8f47a316dca24f03cdff38f308e2ccbf8e56f9f1ad67b43a110ce3ae3149cb0683e0d2409fac4261455f1ab774af0e79b17eb7a7d585651dd1604cff1d0d8b1ade8aaa661cbd61df00702e0b9a1275a555591979783a993270d995bf0cc5fff81fac64658ccc3af06c70188c8321459c6d42993909d95099324615271211c0e3bca2bab70b8ba0e8a2c63d79e7d003898cdc35f40489284eada3a6cddb10ba71b704d86c31194949641d3867e5e18d3909b938db4d494b8ee5d65d561b4b5770e29909aa6c1ed76a1a8202f21d5f042a1301a9b9bb161e356b47774e2d30d5b70f0e021343637435554f002dfb310eede26959e968639b3a6e384450b30a9a800f3e7cf465e4e76429fe5d6b676f8fc7e5dcf71a2163376bb0d3ccf23d9e31ef1cf5bf3f127d8bc65bbe1ea8a9aa6c16ab1e0e107eea5cc7612f489cfc6f256d47786909ea42f8e5bdf11468b4f863f2c23d9613ea6c766c7ce3db8ecea9b10088674594e5159c6098be6e39dd7ff31e8e4d0d0d884bffefd25888230ec7353550d8a2263c6f4a9b8f8fcb370faa92761e68ca9b059ad108e386e5d7d237c3e1fdefcdf7b78e33fef60ebb69d30994cc3b6045555c5bbef7d84d34e5aa94b00354dc38b2fbf861ffffc37b164236ee8e39f76f22afcfef1c7863d36ed1d1db8f9f6bb5153d300511a7c8ce5a88269538bf1cc93bf466a6af2b03fd3ebf361dffe123cf7f77fa1b4ac025bb6ee44201484d96486280ae0791e9aa61d257ab164c39ada3a54541dc64baffe071eb70b7367cdc445179c85334e3d09d3a64e8afb396e6befc01df73c80baba86510bef30c6e07225011c8795cb97e0c273cf445161010421f10b0a4dd3f0a7bf3cdfb34832422412c585e79d85d9b3a6931890a04f740b94e187afed4341aa0d56933e71690f4421ab2aa28a86d2063f4e9d71ecd63b7eedcdb7d1ded1098b45df6247e03880b1212311ff79fb7dd4d4d50f2b198ee33884c311984c121e7ef05e5c7ce139c8cbc91930ab373b2b03c8ca40715101aeb8f802fce14fcfe2f74f3e0351128725eaa22860dd671b100c867465e63306fcf12f7f4375750d4c3a639b070e1e8aebbebdf5bf35d8b8691b789e1f72825754158aaa20180a0ddb22dfb17b0ffef897e7f1d1c79fa2b5ad038a22c362b120c9e1e8f5dac1c6db24493049126459c627eb3762c7ee3df8d3337fc743f77d13179c7726cc717872366cde8ad7de78abfb011a95ef0ed7b5e8e4790eebd76fc6534fff0dd75f7b25be7eeb8d09efe0b76dc76ebcf7e1ba6159e7168b19f7de757baf453041823e2ed018335486755f9d17eb4b5bf0b5d327c324ea9bdc5b035144550d2689c7ae9a0ec39f3991e8e8f41afaa247653966850c3271872311fce5b9bf83e3873766a150180505b9f8c1fdf7e0cacb2fd2fd3e499250909f8b87eebf1b0e9b0d3f7dfc09481267d8a2912409a5659508e814f470388cf6b64e984c265dd6a1a2a8981a67dd785fc00f8ee375b950555541417e2edcc3e8fd7eb8ba167f7ef6053cf3b77fa0adbd03a2204292c4b8ea09701c079bcd0a5555515159852f7ffd5bb8e7e0adb8fb1bb70d7b6b635b5b07a25179ccfadb47a251d4d537e0478ffd1f6aaa6bf0b31f7f1f49092a6fcc18c36ffff034a251d97067c26028842b2fbd080be6cd26f1482094059200c2b28a6d95ed06be08c0f39f5622a2a8705a24c3374be0399435fa74c54527e478862328292d87aaeadf9a179165cc9b3373d045c0f61dbbb1777f89e14c5c2056933a2525194ffde667b8e4e2f386755d769b0d77dff9559c76ca4ac8b26c5c7078bec78ad44369590502a1a0ee8583acc8983675f2f017b59a8603074a118944757e9e8a82bc1c380d588d8c311c3c5486dbeebc17bff8f51fe0f5fa6031c75ceb09b37039aea74bd8a33fff351efbc56f108d1abf5faaaa61e3e66d639a6cc7711c4c9204abd58aa79f7b114f3ffbf7841dbbacbc126ffdef03580ce686a89a86248703f77cf3364a4424411f7f7c76a8151693016b5251f1eab65a083c87c234fdabe56e79e3390efbeb7df0869563723c1b9b9bd1d0d064c842b75a2c983563daa0af79f6f97f221c891ab68c19636060f8f5cf7f8815cb97c455fcc266b3e2870fdd878c8c34430b1620e64ad5340dd5d5b5faacd89a5a28b2acfb7a1559c5098b160cfbda42a1300e9494eab6924541c4a205730d7dc68e5d7b70ed8db763cd479fc262368d685c5a100458cc66fceaf77fc2b3cfbf08663011352a47515651195732642285dd6231e367bffc3d1a1a9b12629d3ff5f4dfe00bf80d8b722814c279679d8679b367927890a08f2fa28a8637b6d762529a43f77b3696b7a1d91781c0f37058f44f4849161122cf41e039347486b1bbbae3981c534914515b57a7dbead2340dcea4c1adbcc6c666acfd64c3b032dbfd8120aebaec425c74fed909b128e6cc9a8e6bafba0ca1b0f1d871241ac58143655075ec479724091d5e7d132e630c1e8f33ae18aba2aaa8ababd72db2a224eace9100805d7bf6e1fa2fdf81bd074ae0b0db47a54fbc200810781e0f3efc535456551b9b5c791e0d0d4de3c60a952411cd2dad78e19fff8efb5875f50df8d72b6f18fe3e699a0687dd8efbbe75c7a8dc3f1274c210ffd870180eb3a83bb14d630c3b0f77201c8d4dc8194efd139acb2a41eab15a195edd5a7b4c8e6965550d82c1b0ee2f3c630c02cf63ea9481b3923fddb01955d53586337da3511953a714e3ff7ef283844dcc1cc7e1ab5ff9129c49497db2aff52c760e1c3884402038e4986cd9b6038aa2cf8ba3aa2adc6e575caeeb68348aa69656f0bc7e8fc0a205f375bdb6a1b1095fbefd1e1c2aab80cd62316c2dc783288ae8f47a71df438fe85a4875e3f3f9d1dad68e21b7178c2226b309afbcf69fb89bfdfce999bfa3a9a5c570425b281cc185e79e8919d3a6907890a08f2ffc6105bf7ae720ce9997a9fb3db2a2e13f3beac0718059e4e131d0312ddb638545e2a16a0c2681c7fbfb1a11968fbdca613b77ed3194dca4691ad25253909991d6bfb80178edcdb700667c6b4d5496f183fbef81cb99d8a4a6d49464cc9e391d51d958d8441004b4b6b50f59318ee338ecdd7f10669d75b5354d83cd6a435666c6b0af69cfdefdd0344df7963a97cb81f4b4a1f7bc47a251dc7ddff7b173f75ed86d635377df6eb3e19df73e465979a5eef71c2839044551752f7046c54a1745545455c3ef0b0cfb186d6d1df8c7bf5e85c96002a2aaaa703aecb8ffdbdf20eb9c047dfcf1efad3538dc1ac4b44cfd93bda23154b70621f23c645583aaeab7341c661193331c000344814759a31f1fec6d3ce6c6b5bab6de9055a3691a7272b2069c24dadadab161f336c319d0b22c63c1dc5938efdc3346c4eabbe0dc33108d468c7d61791e4dcd2d436691abaa86f6f6ce5806a63ebf018a0af29094e418f635b5b6b51bf00868484f4b1bd2d2668ce15f2fbf8e7fbff1d6988979f702291c0ee3d7bfff93eef7b4b77b110e87c79578098280d6d6769457560dfb182fbdfa066a6aeb208ac68ac18423115c71e9859832a9180409fab8c21792f1c3d7f66252ba0382811578797300ad8128781ed01850d5a27fa52cf01cf253ec50ba26418e039efca80cea3194edae282a1a1a9b0c6515cbb282c2fcdc0127ce8325a5385c5d6bd83da8282a6efbf2f5b05a46a681cb098b16c06eb319721f731c075555d1d834786293d7eb43d5e11a40679880e38094144f5c6185d6b676f8fd015d02a6aa2a3c6ed79095cc6a6aebf0c0c38fc12449632e8c168b19efaef918fe80beef6c4747073abdbe71678d4a26099bb66c1fd67b3b3bbdf8fd53cf80e78d7d97baeff7d76fbf89ac7312f4f1c7d36b2b50d6e0c3dc7cb721b7f9a1065f973dc4810310351843bd704136049e03036016057cb4bf099bca5b8f99716d696dc5be03251045fd8f26c77358be6cf18062f4fa7ffe07c698a189449615646765e0e20bcf19b16bcd484f85d96c1e563cd8ef1f5c542aaaaa10894406dd977f245159415141feb0af4596156cd8b0c5d01effb973660e5ae04755557cebbb0fa3b1b1655c9406150401cdcdadd8b67d972e015bf7e986b8f6c58fd875f03c2a0f570febbd6fbdf301caca2b0db7480d8622b8ece2f330632ac5ce49d0c7191d4119bffbe0102449c0d2626375af19804054013880e78026af3197eba4740792ed12548d75159ee2f083d7f622183d3662e93ccf77b9f3f44d848c3138931c90c4fe2d38afcf870fd77e6678ab59241a4bde71bb46ae114a666686e13864f753d4d1d13984a068e8e8ecd46d49a98a82952b96c621e8326aea1b60d229bca228c0e5740eea11d8bc7507de7ef7c371d3af9ee338844261ecdcb56fc88a843ccfa3b9a56d5c5641531415f5f58d5d8d6a8cdde3dffce169c316b6aaaac8484bc17d777f9dc483047d7cc100bcb1bd0e75ed21584c3cec66635fd8868e108211155cd797bea1c3d8d6a5e2340716147810556296bd2870d854d68617371c3e26c6b7bda3133e9ffebdad8c3170e05054d8bf75d9dad68ecaaa6a43161e630c26c984ebaeb96244af351c0ec3e170c0a881ce18e0f5fa077d4d53732bbc5ebfae6aa31a63f078dcf1851638a0baa64eb78029aa8aa9938b063e274dc3cf1f7f028aa28cb318348ff73e5c8bd010e56a354d43e5e11a8c47e732cff3282dab446353b3a1f7bdffe13aecdcb5577719e123bd37575d7111f27273484048d0c7171159c56fdf2b01070eaa0a2c2ed2df5442d318ca5b023d31775951d1113456818ae3809b5717f7b86939008aa6e1676fedc78ec31d895bb88c51587efbce3d862670c618cc663366ce98daefdf3ffcf853f87c3e43b1614551307dea641417e68fe8b54a920487c36178eb1a80215ddb9f6ddcac7be2d5540d4e67525c49670d0d4df0fafc06be0b1a962d5934e0df77ef3d800f3e5c175747bc9140142554d7d40df98c565455777948c6df142b8a226aeb1ba069fabd7aaaaae2f1df3cd5e3a930f25d4a4d4dc6dd5fbf95c483047dfc71b835887d755e4822079b59d0bdffbcdbbad7d4cf7b34701c879dd51df0478cb9be4e9f95816cb7154a57a53149e051dd16c4fdffda85cea09c90ebac6e0bc21b92477d7c77efd967681254550da9a99e0163c5bbf7ee072f184de0d1b070c15cb847b8efb82489f0b85d8626d65e0fd360f7afa65677d8a2bb8d655eeef0db8696555441d3345df74ed334a4267b601aa0829aa2aa78fab917108946876d9dcbb28c50380caeeb7bd67d9c50280c59197e85459ee7d0d2da3a64de437d4323a2d1e8b814749ee7d0d1d9898e4eafeef76cd9b603eb376d315cf52e1a8de2c62f5e85acac0c10a3b058a321d08fc6189efeb81c514585c88b70592543fbc0558da1c91786d8655d490287baf6104251150eb3fe5b613389b8fdb4c978f095dd10bb0aa59844016b0f36e3de7feec48f2e9b8374e7f02d9b6044c1deba4e9c3663f4bf84f50d4df0f9fc3a3b533128e108162f5cd0efeb3bbd3e6cdeb2c3b0db5351155c78de59237ead8c6158d6390024a7b807b58a9a9a5ba031fdc7cecfcb892b56ad310d1d1d9db0d9acbaacb6f4f4b401fb8307fc01fcfbf5ff0eab64aaa669080643983ca9086e9713b3674e474a6a32c080e696161c2c294353730baa0ed7e83ad7be1e320e9148142587ca317feeac815f070ead6d1d869b968c16922862fdc62d98aba3fc2a630cbf79e269c88a62c8ddae76dde7afdcf845ca6c27411f7f282ac3ba432d308902348dc16e1661378b06279c23065fe051db11823fac202dc96c6052016e5c558427d61c428b2f0a49e0c10130893cfefe5925780ef8c1c5b391e91ede64f2c286c3989be7d6dd052e915c7bd5a5c8484f85a6c3e7cf18832088b8e9fa2ff4db70c5e7f3a1bcf2b0a1f8b9aaaa484d49c1ac015cf8097d9e64d950e2da91a262b70ddc03a0b9a5153535f506265186b4d4e4615b938c317cb67e331455d5f5998c31e4e7e5223d3db5dfbfbff1d6bb68696933bcc08844a270263970d5e517e24bd75e85e2a20264a4f72e36d4d2da86fd074af0cbdffe11ef7df0114c269321b1e97e6d4bcbe03b4b366ede0655e778c4e6057644be407cf12e86589dfc810adac4767cf0484dd197d05b525a8eb7def9c0708e452812c1bd377d31d6469820411f6fd4768450dae8832470505416abab6e603210780e996e0b149501d2e75fae4f0fb5a028cd584bc3d42433ee3d7706ee7d71472fa197441ecf7f5685b640140f5d3413b3725c865aacae3dd8843777d4e1fa95856332c6a79db20aab74665b337cde4daa3f0e1c2c454747a7a1dee7aaaa223b2b23ae8a697a911505e170c460ce40ec99395aa88ea4a6b61ec16050f796b54854c6a4a282e15f87aca0bcbc4a77553a411091e271f77bdfa2d1289e7ef60583d9e11c22d108a64e2ec603f7dd89b3cf3c75c07c80d49464ac5ab10cb3664ec703df7f0c7ffbc7bf60361b132ac6187c7effa07f2fafa8d2bdb54bd3349824098f7cef5ecc9c315d77719e813edbe572425514646666f4fbdd675d0f5276b6be0a978ffff649844261430b2c5555919d99892fdf700d59e724e8e3931d551de80cc8b05b4400ccf03a9ae30081efbdfe5635604b452bae59966fb844e4574e2ac67f77d4e3837d8db075c5f2798e83247078637b1df6d77971e3aa229c372f1bd3b2066fba118caa786b671dbef5e24e3c75c3629884b18bfd994c89e94eb565db4ec363aa280a4e583c7f543a64d96d36040201c3e768b55ae0186472150401ed1d9dba7307344dc3ca15cb867d1d82c0a3a6ae5eb708ab9a8a8282dc7effd6d0d88cd2b20a43fb9ca3511929c91efce5a9c73167d60c5de791ec71e3278f3c80032587b069cb0e582cfa3d648c31b4b4b60f6ac557555743d0e979098723b8f0bc3371cb4d5f4cd8b39f28ea1a1af1da9befc06270d11389c462e7832d3c89c44349710678635b2d581c8b4d9ee390e634433dc29d2c0a1c3edcdf84a86a3c962a093c7e75ed7c643acd88c85a4fac98e300bb49404573008fbeb11f573df1191e797d2fdedc5187665f049d2119c1880a6f4846554b00eb0e36e3f6e7b6e2c63f6fc2cc6c27ce9c9d39e1ef95a669d8b16b2f5483316a5951b078c1bc5139c7702482403064f0ba542427bb110c87077ccde1ea5a0483215db9039aa621c5e386d934fc9c8b703882dafa06fd7dd7a33216cc9dd3af506edeba039d5eafa16d8b82c0e1c70fdf8ff973671bb2ec5d2e27be76eb4dc3db6530c8b5068321d4d635e82e18c418c3e449c5e34ecc01e00f7f7c169d9d9d100c84df6459464e4e16be76db4d241a64a18f5ff6d6796195e22b143135c309f3115f0e93c0a3b42980f2e60066661b6f0032252309bfffd2227cf5b9ad680b447b2c6b86584c5d651a4a1bfd78fc9d12688c21d96ec2a48c24e4b8ad680f4671b0de8bc6ce30a20a43b25dc2135f5a84b1f290699a06bf3f3064e391232755bbddd6afebb6b1a91965e5151005634d5e9c494e2c59bc6054aeb7b4b4c2f07b144545466a1aecd68113ba3e5dbf59b785cb1883d56a85c3611ff6751c3c548a7028ac3b7e6eb198515494dfefdf5e7bf36d280692af2291082ebbf87c5c7ad179c33af7534e5a01a7d38168544e58467ad5e158f313bdc7d3346dd004bbb1a2b9a5157f7de125c30b0d4551f1d52f5f8f94640f890609faf8a5d91b3654b7bd3ffc6119496611b2ca7a84535635bcb6a506332f9c39ac639e353b0b4fdfb404373dbd116d7e196689efe51530895ccf7fb705a2683ad402556331f7bc18cb0710040ebfbd7e110a52ec6336be1b366dc58f7efa2b43655aafbef2627cf1eabe05600441406d7d83a176a09aa62135c53da2d5e17a4dfcd535babb937d3e592ac8c9c91a30439b010804fcba920abbafd96c3663caa4c23826fe36dd5bb45455437a7a6abf56712010c4d6edbb20e9dd3faf69b05aadb8fb1bb70ebb288ed964425e6e2e0e961c32245c8305dc5a5adb10d099c3c01883d399a43b41addf71600c2fbcf80a5efbcfff74f79757151529291efcf0a16f0f584fff6fff7819cdcdad867250a2d128f272b371ddd597936090a04f3c8cc6d10bd31ce0790e4cd5baaab9c7b6afbdb2b506779d336d581e0051e070faac0c3c7df312dcfdc2769436f96195c47e2ded23051e0022b286942413be79e6545cb42067ccacf3403088c77efe1bbcfdbff761d63b8130203b2bb35f413f5c5d0bafd707b3d9486c14c8cc481f30fb3aa1cf0d63f0fa7cf0f9fd70d8f52fa24451c0aa13970e289e72348add7b0fe8ae0cc400e4e765c7e5ee0d85c268ebe844920e2b5fd354d86d3664f7937478e050299a9b5b74c79e23d128ce3beb0ccc9c3e6dd8e7cef33cd25293b16fbfc1bef483b8f6358da1b5bd5dd77dd5340d6e971376bb75d8d7204765bcf4ea9b787fcd3a43b900aaaa62e1fc39b8e9faabfbfccde7f3e34f7f79ded082188885aceefcda5728763e46500c7dd81301874054315c437d568e139220f49a6f4da280430d3e6caf6a1ff6f9701c70e6ec4c3c7fdb325cb6389670a46a0c114583ac6ad03406b5eb5f54d1a074fd7f71ba1d4f5cbf08b79e320963998c2af002aa0ed720c9e584dd66d3f5cf66b3a2a830afdfe36ddbbecb701d6d4d53636d5847e17a6559c1c7eb3eeb59d4e9155fb3d93c60411620166af07a7dba13e298a621c5e319568398ee85c9a71b36ea4eecd3340dc5850570bbdd7d8eb367ef0174787dba8fa5aa1aaeb9ea62c38d427a7d6f78ce701636cff3484d1dd8a25ef7e90643ee7693c984fc38caa24a9288c9c54590656385a082a1100e1c2cedf7debff2fa7f515d536768cba72ccb28c8cbc3d5575e42024116fac45b0905234aaf78b81eec2611f92956ecaa8e40e89acc39001145c3536bcab07c526a5cc23a3fdf833f7c6931b654b6e1c935653850e74544d1108caa5d55b380248b048e03ae5f59880be667637a9673ccc733140aa1b9b54df756ab6e11282e2ce8f7f76d1d1d884665ddd5d262169f8cf973671b7a4f3cbe9db2f2c3c62c63c6a031861316cd1f64920ea3b5bd03a220e8bee6a2a202c37be13f5f4872a8af6fd23d663c2f203d2d05423fbb28fef7ee87ba9bbba8aa8af4b414ac5cbe34beef31c70f6b3133986bbbbaae5e77ee06630c4585f970c4d1879ee7799c7af24a3cf9e7e7c01874cf1fa22062cfdefd088642bdb6f9050241fcf609e34d58c29108eeb9f33678dc2e1024e813ce426ff5cb8663ea02cf614a46123697b7413a6252b34a22dede558ff2663f26a53be23a37a755c2a9333270d2b4741c6e0de2706b100d9da19ecf9f9cee80d32aa138cecf4924db77ed315488837559374b4f58d8afd5b379cb0ec31b0bad160b664e9f3a2afb66bd3e3f6aebea0c2562c562fc2983ba33c3e130dadada60b5ea77e1ae3cf104c35be77ace89311caea9d1ede2571405050579fd2e44ca2a2a757b556445454e76264ce6f8daaa767476a2a1a149b76bb93bbf63a0b8b3aa6a68a86f84aaa9e8293631041e8fb15a11fd1ec3ed82c3e1e8b2d2f51d4b9244d4d437201008f612f4351f7d8283a565fd166b1a786118c59449c5b8ee0b97913890a04f4c041ed85fe745a64b7fd2882870b868610efeb9f170ac304acf0201e808c9f8f3c71578ec8a39093a3f0e456976c3456bc682fa8646288afef005d334b89c49fd0a57a7d78bfac626432d53358dc16eb7c6e5be35c2defd07118e440cf50f976505797983d75bdfb26da7fe45116370bb9c71c5cfebeb1ad0d0d0acdbc52f2b3216ceebfb7cd7d4d4a2b1a959f7c242120554d7d4e35f2fbf81a9d32643558c85be388e03630c2ffcf3df28afac32e45ae6c02133a3ff45555b7b3baa0ed7e8cf038844b170fedcb81791b3664c83dd6e435b5bbbee45912008686868eaf5d98aaae2774f3e6d383988691aeefec6adc32aa74b90a08f0f2b9de350dae8c72933d20dbd6f72860376b3085563bd16d31649c0739f54e0c65585989a9974dc8c23630c6d6d1df0fbfd48d2e97a5454151919e9fd5ab83e5f004dcdcd0663e8b17298f9a3d4e2b1b5b51d1d1d5e43d5b71445c1d2c50be0760d1c2229afa832d44bde6c32c1ed720ffb3a0ed7d42212890c5897fde84593dbe544417edfa2322dad6d686a6a19b460ced162140a85f0adef3e1c97186a9a6638c462369be04ceafffbd9d0d80c7f30d86f48a13f4c661366cd9816b7a08b9288c2fc3c3435b5187aee1545c1defd0771f2aa1301c4769a7cb6718ba1856d2412c5d42993702d59e763af493404c327da95706694e95949c84fb1217a945521f21c3a82513cfebf92316b5f3a26e31895f1d9c62dc626225941765626923dae7e27dcb63663ad2b198b55608ba7e398ee7357557cf0e13a80339690254912a64f9d32a84077747aa1ea7c26358d419444cc983e79f81308cfa3adbd439780699a0ab7cb854834dae76f1fadfd2c66141aacab2e8a22044118f63f49920cdd038d31385d4e84c39101c68343636393ae673956f7c0014d55e37ea6ac160b66cd9c8e683f633bd8f801b15aedddcfcf4f7ef11b288a6a684c5455c1bddfbc7ddcb5ba2541270ca16a0c6b4b9a0d8bafc8f3387f7e3664b5ef1b2581c7abdb6ab0beacf5f87908791eb575f59024fd969220f058306f76bfaed2aac335865b92721c60b7590db95e870bc771385052aabbf6f9e7d7cce184c5f307fcbb3f10c4ee3dfb0d247931a4a7a6c2240ddfe5be6bcf7e4422fa4444630c4ea71353274feaf3b703874a472ddc11d7775e559199960af300dbc30e969422aa33db9c310649923079727142be4327ad5c66387c12080411e95a9cec3f7808eb3edd048b817de7916814d3a74ec145179c4d8240823eb191041e875b8cf70de738e0d2c53930497d875fe039740665dcf7cf9d680b448f8b718cca51d41f15cb1b7251248a03bae76b6aeb7af5c0d665352b2ad2d2528751a1df381d1d9da8ab6f00c719e9fbae222d3505a929c903bec6ebf5a2bda343b7a743d334a4a626438dc3423c5852aa7b11c4711cb2b3d2fb142a91651915158727c4b3aac80ad233d206acf57fe0a0fef1608cc161b72337272b21e796d9755e46b2f6398ec3fa8d5b118dcaf8fd937f4124123694a0a7280a1ebcffae019be11024e81348d0395434ebafca752433b35d989beb4258eeeb1eb59a046c2a6fc5efde2b8dc5d9c7904de56d882ada887ec68183a55d4d4a780313898a99d3fa773fd7d635188e496a9a068fcb6578effa7028afa8427b4787a1cc7259513065f2a44163ee9224a1a1b15977fc361a95919f9b05290ecbb8a2f2b0ee0c715555919793d347702a2a0fa3a9b92561a55747da9bb478c1bc01132e2baa0eeb7e861863c8cacc3054fc68d03965c63458ad1643822e4a22da3b3bb06bf73ebcf6df770c5585936505f3e6ccc2b9679e466240823ef1e1780e2159c5de3aafe1f79a441ed7af281a30066f9104fcfe8343786777c3985d5f7d4708f51d214823dc17bdaaaa1aaa6aac042acff3983f7f76bf7f6b6d6b372ce8aaaac2e371e9debf1d0fed1d9d686ded3024603ccf63e1fcb983561f3b5456814020a8fbb8aaaa62d1c205c3bee670388ce69616ddcd4d221119d3a74dee7b6fb8d898081340d06d362b144de9f7f98a46a3686c6ad1ddfe5496151415e4215109333cc7a1203f0fb281f6ab922861dfbe83b8f3de07e1f3fa0cd52390151977df71aba1450041823e7e051db1d2a9658dfe61396aaf5892874c97054a3f56b8c0730844147cfd6f5b51d2e01bf56bd318c39f3e2e47519a63c42ba7a99a864eaf4fb708abaa8a8cf454b001bc179148d4b0d7843106c9641af13de89ac6f0eefb1f81178c7b10162f1abc0bdc9e3dfb75e72130c6e07226e92ad73ae042acba16cd2d6de0740ab1280a983fafef22acea706dacddeb381774c618186398366552bf7f6f686c424dadfeda02b2a260d6cc69092b64e472393177d674c851fd21409ee7e0f5f9b173f75e43f1f7702482f97367e3d28bce252120413f76600c78756b0d22b2f138a4c72ee1ba130b101ee0bd2691475d470877fe7d1b2a9a03a37a5d9bcbdbf1d1fe26cccc19d92a72aaaae1930d9b0c59298aa2203d2db5dfbad5ddcd4e42a1d030eee5c88737789e435945a5a144344dd390e4b063c1dcd983beaec3eb35d40a5494442427bbe31238bdfb9e354d43b2c7dd6fbc7edbf65da3549d2f31a23e6fceac01bd288d4dcdba3d1e36ab1533a64f4d9c81c17158b674b1ee6a7b479eb7d96c36167b67c0fddfba635492480912f451c32cf1d85bdbd96f2c7cc8c1e7387ce5a462382de280b1729b49c447fb9bf1d567b7a2c91b1e956b2a6ff6e36b7fdd826b96174018618b95e3808af22a984c4626740ed3a64c82cbe9ecd7ea395456316e9f17afd787f2ca2a43e57d6559457e5eeea07bb41963282929832ceb73b776573c9b3a80b5a987e6e616b47776ea4aa28a757533a1a8b06fdbd4caea6a434580c60a4d6370bb5d03ee41f70702686fd7174ad1340d76bb2de1deafa2c27c08a230a2db5e83a110162f9e8f334e3b89048004fd181b408e43b337326cb77851ba03572ec9432032b0856f3109f8e840136ef8f326347923237a3d1dc128bef9c20e54b78570debcec116fd8a2280aeaeb9b0018c97017e0f6b8fbb50c3970a352ba75b8d43734a2a9a9d550f21dc7312c5a3077d086205e9f3f563a5567be43cce5ee445a1c6d3bb7edd8ad3fa39e31b89dce3e857b1863686d6d8f2bd37eb4501405b9d999033ea91b376fd7ed6e675d73c7f46953127a8e33a64d81dd6605632393c8ca1803cf0bf8e183df1e76cb5a82047ddcc2714030aae2837d0dc35a157300eebf6026325de601b3c9390036b380357b9b70f3d39bb0a5a27d44aea52328e3bb2fedc69b9b6b70e9e21c43256d87cbe1ea5ab476b41bdac2a5280aa614178ec0bd1cf985407d43135a5a5a0dc58b5555c5ec1983b708f5f97c686d6b87c0ebb3741555457656665c425a5a5e0949d4e972650cf9f9b97daedb1f08a0bca26a4264b8cb721405f979700d50a9afbcbc0a82cea62c9aa62125c5336009d97828c8cfd3eda9314a2412c5f2a58b70e2b2c534f993a01f9b480287d7b7d622aa0e6f559c976cc30f2e990d86c143c936b380f7f634e0ba3faec78b1b0f23144d9c5553d711c25d2f6cc7531f9521c363c58317ce1a9576aaed1d9d5d5bd68ced195fb6745162bf083c8f60206828063d1cdefde02343f162c618cc663356ad5c36e4f937b7b6e9de42a6c80a3233d206ed1a36d482a0b1a9a9ab0989be7b9699910af5a8f16d6a6e813fa0bf54ea582208224e597d62bf0b3f4dd3d0d6d1a1bb85a9a66ac8eaa7277cbca4a62463ceac19ba33ed8da07595aa7ee83b774d989c87e30dba2b0618486c4da280030d3e54b6f8312d73784964d72ccbc77b7b1af0dab65ad8cde220a22ea2b62d847bfeb1039f1d6ac54dab8b303fdf3d7cab43d5b0f37007eefbe72e7c5ada0249e071ed8905c8f68c4e9305afd787b6f68e01e392fd099cd399d46ffc3cbec95a40635333645919d1449f9aba7a08a2b15adbf9f9b948494e1ef475fe4010c16048772c9a31867973671baace77249d1d9da8acaad6ddcf5d51552c5f7a429fad69ad6d1d088542862d7455d5628baf518aae705d1e9c2447ffc58c02c110f6ecddaf7b112c2b320af27212ee99e0380e73e7cc1c11c10d87c338f5e49558b97c09890109fac467202382e3005f58c1bf3656e3a18b660debd836b388472f9f8bcd156d68f44606edb32e093cfc6105cf7d5281b776d5e1aba74ec63973b3909f6283c3acef96866515875b8378eed34afcedd34a34792390040e194e0bbe75cef451992719033edbb445b728745b7ad9599923607df1686d6d3724b686172f3e1f0e1c2c352c5c0be7cd4156e6e00d80caca2a0c55f8b2d96c70bb92861d66f00782686bebd0355e476e913bfaf398a621100818ae9a67b7d9e0723947dca3d2f3999a068fcb89534e5ed9bfa7a9bd3d16f2d09953c0715c6c813302750fe6cc9e9170ef5acc5364c2b7efba7d548a2f1124e8234e6eb20d4dbe0e48fdec21b648025eda5c836f9c39152eebf02cbcc9190efcecaa79b8f9e9cd50353668af7581e7c00034792378f0e5dd78fed32a2c2af2e0ec3959583e25051c806c776f2bbb3d100563c0c6f236bcb5b31eeb4a9a50d2e08328f0b09a0404220a7e78e96c64b9472bd985e1e0c1d201cb68f63f992b70b99cc819b05ce6f0d27bb9ae2d479d9d5ea4a7a58ec8d5fa7c7ed437341a6b42a32a983f6fce90965c734b9bc1c23c1c6cf6e197ebd434150d8dcdbaeaaf6b8cc1623221233dbd1f4b5581df1f80dd6ed7f9b91a6c361b1e7df8fe5886fe2875318ad53e481bb0f42ecf0ba86f6cd26519330624d9ed10046144f23626151722c9e140281c4e980720180ae1f4535661d58a65240424e8c7062714a5607d692ba47e125f24814745b31f1bcb5a71e6ece15b90172ec8c10317f8f1fd57f7c224f1836e1be310ebd0269a049436f970a0de8bf7f73622cd6906cf7198959d84249b09d018648de160bd0f81a882a6ce300eb706613509b04831710944147c61693eae5c9a3f6ae3a9aa1a9a9a5b0c4d6a8c01b3674e1b78af2dc70dcb3ae1c0211c0963cfbe0338f5a4952372bd55d535686c6a1ed06ddb9f5564329970968eed414d2d2d86faa0731c87ccf4e127646dddb11baaaa82e34cba6e9a288a983ca9b0cf9f0e95961bbaffe14804575e7611aefbc265e32a8edbd0d48450280cb3aee22c0ce0784c995c343293ba20202f371b7bf797185a2c0fb620334912be77ff3d13227991049dd0c58aa92978f2437e407155540d7ff8a014274f4f876998e5524d228f3bcf9a8a9af610fefc71397849d0e59096041e9210b3c29bbc61083c8743476da5533586a8aa411278388ff02244150d533292f0b3abe641e4476fcb576b5b1b0ed7d4197a8f20f0484b491950044c928499d3a7e0d5d7df3274dcee8a592587ca70caea152362397dbc6ebd2111521405d99919484b1d7a6b594b6b9be173d673dc8130da842435c5038fdbdde76f8d8dcdba33c3bb1781930af3c75d52d6e62ddb751794615d0b9c1909deb2d64d7a5a2a66ce9c8e5d7bf727e478e1700427af5a86450be692088c7368b965801c8f0d36b338605951b324e2e383cdd857db19d7e7984501dfbb68166e5c5d84405831d4a045e03958240192d07f2737ab24f412edb0ac62728603bfbd6ec1a86c533b92fa86260483c612a2a2b28cd9b3a60fbeb89124d86cc693fa045ec08b2fbd3e2215e31863385c5d6b28ce2d2b0a16cd9f8bb4b4a185d7e71dddf2c09d9d5edd19eeaaaac5b6c8f5f3fa702462d8a3a26adaa854f533247a91a8fe0c77c6e07639214a23b328e1380ed3a64e82c00b09796e2551c48f1ffe2ec5ce49d08f2d66663b916c97060cdbf15ccc75fdc49ab2b8437ba94966fce48ab9b8fdb4c95035d66fbdf7b8bef400425105694e33fe7cf3129c3233630c4694a1b9b959bfa077f58f9e35c49e6c51108765c14992889dbbf7a1ea7075c2af34100862c7ae3dc6844bd570d699a70c697933c690999901bfdf5879606d980fa9ac28d8b567bfee84b4685446415e76bfeee8868626434211f3a4f830cef41c5bb6ed84a2e8dcc2272bc8cfcb1dd145c9f2258b12923018894470ee59a762eeec592048d08f292491c7bc3cf7a0655e2d92807f6fa9466953fc16539245c28f2e9b839f5c311776938090ac2664225354065f58c1b2c9a978f6cb4bb1b8d03326e3b975c76e288aaabf298ba6213d3515d1212ca1bcdcec614d663ccf231c09e3e1c77e99f06bada9ab477373abee8586a669703b933067e6f4a1efa7a262cfbe03865dee6dadc32b50d4dcdc8296d6568882de2d721a56af3ab15fe136da7f5ee0f8aebc8bf1332f74767a515b5baf7b0ba0acc8c8ceca806d047b88e7e564c3ed8e6f1700630c26b31977dd79eb84a8134090a01bc22cf2b86c712e066b9415eb92a6e2476fec1bb60574240e8b88db4e9d8ce76f5d86e59352a0318688ac0e6b5b1943cc83e0b28af8dae9b1639e3c3d7dccc6f3c0018319ee9a0687c386dcecac415f3767f64c681a1b960564b158f0e67fdfc5871f7f92d02d51e17018f58dfaad51555591999981c93a12a7344d43341ad52de81cc721180cc1e7f70fcf4297153437b7e82a62c31883cbe54cd8de7e5ee0bbac6165dccc0b8aa2a2bab64ef7624de0052c5e38cf50f8c52856ab15591919718d533018c2b9679e8a250b17d0e44f827e6cb2a0c003ab79f0e6076689c71bdbebb0b9bc2d219f290a1c4e9b9581bfdeba0c0f5c3813b3725d084455688c415635281a83c6fafe53b5d8df35c66265651970e6ec4cfcf9e625f8d1657390e3b18ea9a5d3d4dc6cc8aad4b4582c363575f0222b19e9a9c3ae80c6731c229128befde08f0cbbc807e3934f37195a844565194b4f58a02f239e335eb656d334bcf2da7f87b5e8f1fafc6869d3d78484310641109093a0da019224a1a2f230f61d38346ee6045553753765618cc166b3423249235a6a38233d15d3a74f813accea959aa6c1e1b0e3c1fbee1ad7bd110812f4b8c8f1583135d3396899579ee3108aa8f8feab7b10511267e5e57aacb8fbec6978e96b27e2d14be76066b60b391e2bd292cc709845584d026c26113653ecbf5d5609596e2b72936db8fdb4c9f8db2d4bf1cc9797e0ac39998356a31b15ab465650565e694850789e474e56e69056aeaaaac8cbc9843c4cebc4623161effe83f8d257eec4dbef7c805028fe2e7725a565d05bd68cb1581ec045e79f0ddd6f306cc159f0e986cda81c46bec0b61d3b211a70c19a2569c01ee24617141cc7419615fcf0c7ff878e4eefb8981376ecdc6be83a34a661eaa4e2919dd8791ec58505864a2a1f492814c2f9e79c8e695327819838d0b63583d8cc22beb0240f5b2bda06ade666330b58b3bf092f6faec6b5cb0b1277c3780e05a976dc73ee34dc7aea24b405a3a86a09a0b23988605441f7f7576540aac38439b96ed8cd0272936de36a1c6beaead1d6d109de4026ae222bc8cfcf1bf275a929c998337b06f61d3c040cc3d5cb1860b5585059558d1b6ebd13575c72214e5ebd1cb3664e477a5a0a8ce4270a3c8f43a5e5f8cfdbefebae42a7692a923d2ee46467e9b28e4451445e6eb62151e92e75fbadef3c8c5ffef46114e4e7ea7e6f754dbdee44464dd390929a3ce0750c2713db66b3e29d0f3ec2f77ef853dc7de76d28d4f14c8c2465e51586766a70e03073c6d4113faf93579f889ffdf277309bcdc63c0eaa0a97cb8987be7337ed3b27413ff6397f41361e7e7d6f4f818e012d1381c723afedc559b333919a644ef879382c221c1611f9c936ac9a3ab1c6b0a3b3133eafcf50b28da66958b562e83ad2922461f6ace978e5b5ffc6758e2693045956f0c7bffc0daffde76de4e664c75a531a3886c00b68686c444b6b2b4c92a4ebbd1cc723100ae3d5d7ff8b03070ff5ea8866369b71f2ea137bed2117040166b3d97098c166b5e2fd0fd7e1cbb7df8d87eebf1b1eb70b4585f9833ed30d0d4d78e7bd0f752f1e6445414e7616a4012acaa5a7a7425535c35ba24c9284e7fefe2f6cd9b603b7df7a2326171761f6cce91044013c974011e23068b118c61882e13042e1b0ae76a29aa62139397954f6d1a7a624c3ed76419665436ef368348acb2f3e1fc545052048d08f790a53ed58529c827525cd308b037f51249147597300df787e1b9ebf6dd98826c14c34544d43534b2b1c3acb8f6a8c2139d9a37b623a71e90948448200c771484a72c0ef0f62cfdefd7dba850d6deec72c689349d2bd10e0790e4cd3f0bba79e894dfc47882703f0bdefde8d3b6ebbb9b7f742518795892c083c366fdd81cbafbe192693099326150ebc2d93e7d0d0d084c6a666dd82a4c80ae6cf9d35a0d8257bdcc34a3ee4380e822060f7de03b8fbbeef03e05054988f82fc5c24bbdd094968645d9ff3852b2e1ab07aa02ccbd8b8699beecfebe9a93e0a7381cfe783d96c369430c91803c70bb8e5e62f52ec9c04fdf840e0395cb33c1f6b0f36e9b2a25fdb568b973657e3ca13f23191be230c23d7cc6aebb65d8616389aa6c166b5203d555f9df5c9938a9095918efac626dd1dc886123e41308fdad8774fa647672933c6a0f593bf519097034dd30cbb48bb8551515528a11076ecdc33c4628337f41956ab0505f9b9038ac394c9c5906519168b7958636432997af67f1f2c29c5de7d07a1312d61cf6d54561089460614f46854466d7dbdee674c565464a6a72129c931e2cf505a5a2afc7ebf2161561405793959983ca9080409fa71c3b973b390e3b6a2d11b81280c5e6f5de0397cf3f9ed989de3c6ac1ce784b8be8e6014adfe2826a58fccc4b36fdf415d8d3d7a84ac2bebb6b0505fbc3425d983d5ab96e36f2fbc9410411f2b8e9c8c198b6dc5ebaf525ebc1de8ba3f2791ae60d6550868b012b3938a0b61b198c1d8f01d2adde72e0842c2ab99717c14d983f42de7780eb5750dba3f5710782c5bbaa84f1bd991a0acbc12fe404077ef806ea64e2986dbe50431f1a08c876192e230e30bcb0a109287ae0e25093c3a82326effeb169434f826c4f5bdb8e1709f6e6d89a4d3eb3594c4c5711cb2323360d7598c83e7795c75d94518b586d9a3e131610c6693098b17ceebf3b719d3a74051d57177ce9aa661ea94e241ae494356660654551997632e47a3983d4865c286c62604fc01dd5e0bb3c904499246c59dbd69cb76982493e1672c2b238392e148d08f2f380eb8717511dc364957ad75ab49c0e6f2367ce3f96df086e4717d6defee69803facc06a1a99dacd81401065155586e29c8aa2a2203fd7d07b4e5cba18938b0a86bd7d6dbca1a82af272b3fbed1f9f979b0d8fcb35ec7dc723b600319b9193357021a0a2c202a4a7a78ecbc508ebf258cc9d3b7bc0d7ecde7bc0906b415114cc1ca27471a216520d8d4d60ccd8f31089c858beec049ae049d08f3f0a536db872693e42517d93915914f0d18166dcffd26e0422e35364dafc517cffdf7b70cebcac11fb8cdaba7a34b7b41a728f46a2514c9d5c6cc872b0d9acf8c29517231a891e13cf9b2ccbc8cdc9ee379b5d14454c9b3a09d1e8f8b9565555919395316822a1d964c28ae54bfacd0b1873ef82aa222d2d75d0a62b7e7f0091484497c5dd5d6467ceace9237eee8160103b77ed35d89a98c1e1b061f6cc692048d08fbfc1e338dc71fa14dd563ac7015649c0d36bcbf18bb70fa22338be2c754d63f8d19bfbc0f31ca6658d5c0ccd62b1a0b9b945b7a033c6200a02962e5964f8b36efce21790999ea6bb71c678e7949357f49b7b60b35a71da29aba0b1f1238cb2ac203b3b0b36ebe0a19bb34f3f0592248ebb0e6aaaa6c16eb3216390bef195558711d45978485535a4a5a68cca75b6b6b5a3b5ad1d8268a435ad0a8fc79db032bd0409fa84635a66122e5e9883a04e2b9de3008bc8e3176f1dc4a36fee1b37ee774563786b573dfef04129be76fa9411ed8b5e5a5681403064682b4d4ab26758565c4e76166ebae11a8423e109ffac99240999e9e9033c571c962f593cae26635553317feecc2133d867cf9a8e49c585e3ceedae691ad2d2529099d1bfa0472211ecdcb54f7753165555919696322a6d4843a1eede0106ea3c3086648f7bd09c078204fd9886e380072f9a8974a7198a4ec1e1790e82c0e10f6bca70ef3f77a2d91b19f3ebf8707f23befeb76dc8705970cedccc11fdac0325870c65536b9a0693d9a43bc3fd68eefafa2d98316d0a42e1892dea8c018b16cc1df0eff3e6cc445141beeebedc238dc56c415141fe90af4b4d49c645e79f8df038bb3f02cf2333236d400156550d3575f590447d8b28455190919e8694e491ef6ef8e9fa4dd034addf7c8b01e73200f979d9ba0ae41024e8c72cf929767ceb9c6990550375c93940e48167d755e0863f6dc2eeea8e313bffffed6ec0579fdb8a9ab620ee38630a3c36d3887edee1ea3a43b13d8ee3e071bb90919636accf4b4a72e0895f3d0651147b555d9b4828aa82dc9c2c5807715fbb5c2edcf8c5ab108d8e0f41e7790e6eb74bd76bbf72e3b5c8c9ca1a57a11155d5909f9b37a8c5ddd0d0a43baf8317782c9c3f6754cebdb2aada70595d599651545830ee421f0409faa873c3ca22ccc876196ac6c2731cec66116bf637e2baa736e2df5b6b208f627290a231bcb8f1306efaf3261c6e0d62528603d79f38b2e51e5555456d5dbda1b68e9aa621333d2daea23ccb979d807bbf793bc2e14842dba28edabd92156466a4c1e54a1a64e103dc70dd55c8cc481f7351675df7adbf2d76fd91939d852f5d7705c291c8b8119468348a2983b4af3d5456d19510a7ef789228c26c328df896355555515179d870eb5455d570f2aa1554218e049df0d84df8f1e5b3916411a169c626249b49c0a1463fbef6dc567cfb9f3b51db1e4a482ff5c168e80ce307afeec19dcf6f872f2c43e038dc76ca64a43947d6ddd6d1e9455979a5a16cf568544641417e5cb1470e1cbe75e76db8f2f20ba128ca0414750e0b17cc85cd3af83e7c8fc78d07bff34d288a32a6c2d89d216e24a67fef5d5fc3cae527201c1efb1014630c668b79508bbaa5b50d510375d265591995a62c8d4d2d28292d37dc272125d983d4140f08127402c05973b370c38a422806059d01b0483c8251154fae29c3354faec73f3756a3c99bf898a23face0d3432db8eaf7ebf1ab774a109655680c989a99842fad2c1cf131eae8ec446b5b3b44d140973555c1aa154be34e26b25aadf8f98fbe872f5d772554559d5099ef822820252559573bccabafbc04179e771682c1d0989dafaaaa484f35960066b7d9f0eb5ffc0853271727a4656dbc829eec71233a483e82d7e743a7d7ab5bd0799ec3bc39b3477ee9c7c5b6861aca53610c56ab05b939d9349193a013311b0ab8e7dce99897e74658366e010a3c079b49c0c6b236dcf1fc36dcf0a74d787a6d39da035144e3ecab1e88285857d28cfb5eda89eb9edc804de5ad30893c789e83a2323c72d96c24db4d233e4602cfa3a1b1d9d0963597d309872d31ed5f3332d2f083ef7e0b8ffdf0bb70bb92100e472644cc508eca3879e572ddc2f87f3ff93e4e59bd025eafcfb0c72821e7ab28c8cbcb45b2c798c5377be6743cfde4e39835731ac2e1f0987952545583c56c465e6ef68016ed279f6dd29d74a6aaeaa86d59abaf6f4467a7cf90174cd334e4e664213d3d1504093ad1455a92198f5fbb00992e33a2c3888733c45cf0b2a2e1d3432db8ebefdb71d9ef3ec5f7ffbd07efed694493378256bf3e9764436718250d3efcf9e372dcf1fc365cfa9b4ff1dcba4ab4f823b09a04705d16fb1796e6e1dcb959a3323efb0e1c32344977571bcbc8484bd839a4a6a6e0d69bafc79ffff03816ce9b0d5555118dca3db5d2c71b9aa6c1e54a32d4b33c37271b7ff8ed4f71fdb557803186a82c8feab58982809933a60cab03dca20573f1dc9f7e834b2f3e1f9aa6411ee5738f8db98ab4d454e40c50235f9615541daed6dd8f40555524277b601a856d851faefd4cf756ba9eeb5555e4e5e68c4a8d796204bf77340489e784a264fce20bf371cb339b21ab0cc230f6747ffe1e0e9bcadaf0e9a156bcbca50679c93698250e73f2dc9891950497d584c2343b049e83a26aa86c09a2d51fc1deda4eecaaf62222ab38d8e0832f2cc36e1661123fffc286641585a9763c76c55c88c2e87c912b2a0f8337f059dd4565a64f9b92d8075f1471c6a9ab317dea647cb661339e7dfe456cddbe1b1c07048221a8aa0a4914bbba8b098612f2344d8b59c509c82de2004422516467651a16b5c2fc3cfce2b11f60f1c27978e15fafe16049291863080402600c5d5e9291104a0eb22cc3e3760ffb0833a74fc5e33f7d18a79db412bf7bea2fa8aeae45281c81a22a309b4c235e6b9ce3386464a40ee84e571405e5e59550550d914864c8f1080483f0b85d484b4b19f1efd8f69dbb212b8aa1a4b8a02f80e9d3a6500d771274a2ef64005cb0201b0fb5cec2fd2fef02c7f171f54237893c4c001abd6154b70521f01cb654b4c7f48243af636b8c81b1d89ee5587c9cc12c0a7098c5a34487411278fcfada05c8f65847655c344d437d4323a2d12844ab55f77bb2b2d2476c6f6c5e6e36aebcec425c74c1d9d8b8791b3e5ef7193e5dbf198aa2a0a9b905a150185e9f0f8aa2ea2eef69b7db60b3d91263553206595670d9c5e72127dbb817c5e376e1ab5fb901575c7201b6eddc83f73ef8085b77ec862449e8e8e81c91d635aaaac1e371e30b975f149f272525195fbaee4a9c72d20a6cdfb9077f7be19f686a6e43754d2d1a9b5ba02a2a444904070e8228e8ba16c698ae0236a14010538a8b63fdc1fbb9efa22862e182b9104569486b9821b64be1debb6e1f95a232d3a74dc6acd269bae71c55d36092245c7fcd1594e14e824ef48724f0b8fdf4c9a86c0de04f1f9543141097a80380c87310bb1aa6a85a4cb863138676842dc0f52c2a8eb4c67b892403825115dfbf6416ce9a93396a63120c85b07ed316f09c7e2b40553564a4a775ed1f1f197725c771b098cd3869e5729cb472399a5b5a212b0a0e57d720e00fa2adbd1db2ace89aec34c690e470c0e974242676cd187841c09245f3e39a6c53535370e66927e1ccd34e42734b1b0086e696d61111744d63484e760f5a32d5c8bd29c8cf45417e2e4e5ab90c9d9d5eecde7700bbf7ee87aa6a2839540e599671b8a616aa3af8a28b690c365b2cf18be3380cb4de525515490e3beebae32b031ecf6c36e1ff7ef230eaea1b8674533306489288c282bc51f99eddfd8ddb70c985e7ea9e6f34c660b7590d85740812f4e352d41fba70164481c36fdf2b8545e2e316f5a33d01478ab85ec2b28a0b1664e3aeb3a60d2b1c305c645941c9a17243f1bd68348af973670f593e349174f7ef1eac0ff644262d35b9d7754e143c1e373c1e370a0bf371ee59a741630cd168148c415f753cc6c0f1fcd0cf1f8b158119ca2b94ec7123d9e31e77e364b35a316b063558214127124eb2c384ef5d341b3cc7e1b7ef1f82c4f3a32aa2475b0a81a882ab96e6e3d1cbe6c0661246f5f30f1c3c84b6b60e43e26cb158306dea24720512bd1004010262c55a088288411910a3409245c4f72f9e8d072e98059e0322b286d196278d3184641567cecac0e3d7cc477e8a6dd4c7e1e5d7ff63a83739ebda1bebb0d9e92122088220411f1fd84c021eb860061ebf76217292ad08c92a466b238ea2323000b79c5c8ca76f5e82548779d4af3f1c89e0ddf73e86c5ac7faf3b630c1c389c70c2027a800882208680fc55a3ccd5cbf2312fcf85efbcb40beb0fb54065b176aa2321ee1a6388445564baadb8ebec69b86165219cd6b169afb97ee35654561e8664d2fff99ac69092e28133c9410f0e41100459e8e30bb3c8634181072f7e7539ee3b6f06f292adf0866524ba6e465489b54e3c755606fe7acb527ce38c296326e600f0f8ef9e82a2aa8662e1b1e618c554ec822008822cf4f18bc76ec2fd17ccc03973b3f0ec2715787163354251058ac660168d67c3b31e11072481c3c2020fbeb02c1f972ece45a66b6cfb1bbfffe15a6cd8b00556ab31573f630ca7ac3e1116eacf4c100441823e9ee1390e0b0b3d989debc2954bf2f0ca961aac2b69466367042dbe0854c6601262f5d6c5a332e3198b158450348688a2c16991302d3309e94e0bae5892874b16e620d9611af36b6c6befc077bfff1842e1304c2623f173c066b3f6ec192608822048d0c73d2691c7caa969985fe0418b2f82f5a5add851d50e5f58c1fe3a2f5a0351d47784a0a80c1c17b35c2d2601d96e3bb2dc56cccc7122cb65c169333390e1b220c3393e2cda8acac3f8f9af9ec0befd25ba6b5e1fe973e0380e8b16cca50784200882047d62e1308b70984514a6da71d9e25c281a4320a24056354464ed88c439069ee360160598251e8ea36ab48f36816010bffafd9fb067cf4198cd264c9e54084551f0bf77d760effe83309924c356b62c2b9832b908c9c96e7a3008822048d027b6d56e0246bdf8cb70f8dfbb6bf08bc79f0063b1ea75ddddd4388e872449c372992b8a82d52b97c361a73de804411024e8c488c358ac2678381281adabe14a223a3689a28045f3e78c4a330b8220886301da0f44c485a2aad8b4653b9896b87d771a63b05aad3879f50a1a6082200812746254045d5170f050f93092de06261a8962c6b429a3d23b9a200882049d2000442251d4d535824fa06b9c310d975f7a3e2c66330d30411004093a311a94955720120d27acd98ca631d86c569c79dac934b804411024e8c468d1d0d88c48349ab0e22fd168140be7cf457e6e0e0d2e411004093a311a30c6d0d8d402afd79f3041573515375eff0558ad54ee95200882049d18151445c1da4fd6434c50fc3c2acb28c8cbc505e79c49834b100441824e8c168220a0a1b109a298987206b22ce32b375f0787838ac910044190a013a346381c41d5e19a84b8dbc3e1088a0b0b70eb4d5fa4812508822041274693dd7bf7c31f0880e7e313748d31f0028f5ffef46124391c34b004411024e8c468c2711cbc5e7f5ca55e1963080402b8f1baab70fa29ab685009822048d089d166efbe03f0070271b9dc83c110ce3fe7743cf2fdef242c164f1004713c423328312c344dc3e6ad3b611e46c9574dd3a06a1a6459c6d5575e82871fba172e67120d2a411004093a31da30c650525a014551100a85c1f1dca0dbd718639065051a63484b4986c361c79d5ffb32aeb9ea321273822008127462ace0381ea79db2128ca930994c08872368696d43bf35601983c964426e7616cc1633ce3bfb742c3b6121a64d9d4c0349100441824e8c253ccfe1ceaf7d195fbcfa72f03c075956e00f04fbd7733088a208b7cb098bd90c97cb490348100441824e8c176c562b6c39561a08822088f16068d1101004411004093a411004411024e8044110044124028aa113c7168ce1d0e15658cd224c2287973ed88b45337390e6b2e2bd0de5d8bcf730eefff229989c974663451004093a418c370281089e7f7b3bde5cb70f2d1d7e083c0f9324a0a5c307e90d11922040d1183a7d211cfc4133ce5d390b272d2cc68a79f93478044190a013c478a1b4a615fffe68370e1d6e01cf012c66ae8303108aa8b11771b1ffa96ff1e22faf6fc4336f6cc4f23985f8cdb72e84db49d9fa04414c6c28864e4c783ede528e1b7ff84f94d5b441e03970e0c083030f1e1cc7031cf779c11b0e3db5e719033edd55893b7ef146ec07822008127482181bfebbee206efdc92bf006a3e0387489f711ffba0cf3cf659e3b42e479701c87f57baaf0c2ff76d260120431a12197fb71ce93ffdd835dd59d3d3fdf77c91c14644c8c4a6e0dcd5edcf7dbb7a1a800d7b336d58e2a3fcb77fbdf01b05e221ffb0f1e0c80280a50550d82f0f91ab7b9338467de3b80e736d5a2d41fc564870917cf4ec735274dc2ac8294e3fed979e1c3123cfa760900e08173a6e29a53a6f6fafbdeaa56bcf071197eb1a10600b02ad38e3367a6e3c633a623cd45210e8220412712caaeea4e3cbdabb1e7e7af9d337dc29c7b4d5327a2aa1ab3b87b5ce6473b9dd811eef66e71effa45d7fff11c87dffd6b3d5efa60171ebffb02e4a63b110ccb38f9d10f50ea8ff61ca9d41fc52f36d460569efbb817f4353baa71e34b7b7a7ebef1a53dc8f45871eafcbc1e315ff8d38f7bbd675d4300eb1a2a70de09f924e80441824e10316a1b3bf0f18e2a701cd7a5d15cef3838ebfe1fbeb7c5deebbf39300de0780ef56d01b4f9423858de88dc7427361c68e825e6c451de91f6d0a0bffbefe6c334480441824e1043d3e10be140650b34c683e31834c6d01d2d8f8936eb497eeb659577b9dd19031c1613a615a461dbc15a701c70fa9229386dd9940105ebd7e74d85d36642a687accb3316e6014758e80030aff873af45654bb0d7df263b4c78e09ca9f006a37058247a800982049d20ba659983372483713c384e83c76ec3a45c0f5abc0134b707a0291aa28a0a558b757beb7917c743e038080287ef7c7135f6553661ebc13ad82d26dcffa5d5037edecd733370db79b369e0bb487359b1edbe93f0c2c7650030645e417f3176822048d009029aaaa0a1d5078107444ec0f30f5f8a6985690847a2f00765445505a587dbb0abb409bb4a1b61310be0780e79e92ecc294ec7cce234e465b8d1da19c4867db550641519290e1a5803cc2a48c1a3d75372204190a013e39a353baaf1f286c33d09734365786f3ad080673f2aebf9f9ec7959b87079f180c76fee0ce1fbffd8d6f3b3c726e1d1eb97e83ebf43b55e9cb6a0108b6664e2ed0da50846650080c56c82c56c020064a7bab07a61d1a0c74971d970e1aae968eff043d318789ec3ed4f7e8a92267fafd77d5cde8edb9ffc14c0e73b01bac7a89bcb97e5e3d4f9793dd9ddafed69eac98effd2929c3ed9ddfdbd6eb0311ee8f38cbe6ea0bfafd9518d0f76d5ebce4aef1e8f6e9eb86d05aa1abdf8e9abbbf171797bafbffd655d053e39d8dcf3bac19eb98fcbdb7bf217bacfe1bc13f207f4001c7d3d4fdcb6a22703bfd41fc53357cc1eb677606f552bfebbf930b65575e0d5b2f65e1e9bb3e765e1f40579b0e90c21741febdd7d4d58d710d07d7d007ac6b59bb9792edc76deec9e9d18471ef35bcb72fb3c43fdbdeee6b919033e4304093a710cd0d81ec4232fefea3579019f6778ff62430d1e39b508dfbe7c41afbf1765b97a65cb7f5cde3ea8a0bfb7adbad7eb7f7d9eb10937cb6dc545379d0451146031490884e4615f73873f82f953b3c1f3b138fb91e775e4f59776fdbe7b2740437ba8d76be7e6b9b0a5b4050fada9e8f3de87d654e0b94db578eb9ed528c870e2c9ffeec19dff2d19708cdfbee5843e13edd19fb7725afff5e8877a5d7fe77de4e2ad9beeacf423cffb488e7efd1300fc61b9dff18b1d2bd0f3baa3c5eae6a7d6f7fcbdbf7378684d056e9e9b8187af5ed86771d1e77a3f2ce995813f9c9c87ee05677fd7d27ded4fef6ac4e457f7e1b14b660efaac07c3321efdd7f69e8592d1eb433fe37a338037d697e38abfede8f3daa39fa1353baa71c70b3bfb2479765fc323a7b6f4f93e1313132a2c43f4e29c3f6eee23e647f3d09a0a3cf0d74dbd7e97e6b2e25bcb727b89d39a1dd5034f706ff716b3cb564e32749e272e2c82280a5d4f3117df83cc180a72dc718fdd9dff2de923e6470bf6cd4fadef57ccfbbb0f7bab5a47e59edff9df920185abfbbccffdbfb50886e5847ff6a6030d98faf0fbfd8a797f227af2a31fa0aad13be8eb6e3c2a596fd9f44c43e754d5e8c5c98f7e30e8981c393657fc6d077ef6f2f6019ff59b7eff49bf623edcebeb7e6d7f627ef433f4c6fa729cf3c7cd83eed878684d055ef8b084263fb2d08963994b2679906c37a1a4c9df67c2edde8f7da42bf39a9326f59ab85ede70b85f77defbdbab7b4d308f9c5a34ec7dc9db0f35626f5527dafd51acd9518f70548128f048775b31b5c08319f929c848b62312555156d781bde5cda86cf4c1178c8001705a4da8eb54b0b3ac150eab15c5396edc3c37a3cf35afcab4636a7a2cc6ae274bfbe6b919680b44fb2c8ed63504b0ee0831ef1ee323ddccddbcf071d9a8c7a86f9e9bd1aff55dea8fe2fdedd5835aa2dd6373f3dc8c3ed7d37d9d475bc137fe654b9f637c6b592e66e5c516587bab3b7a3d53a5fe28ee7b7e2b5ebce79441cfe3c8ac7a9b81acfa6058c6b9ffb7b65f01ec1e9bfeeeeb436b2a70d5aa497dbc18df7a7653bf0be4ee631d3d4edd8ba7cd3f3c4bf779778f6d7f0b902345bffb19eeeffbfce8db2594b448824e1c8bf4e7fadb5bd58a3b9fdbd26b2278f4ed125cbcbca867e2995590825599f69ed73cbdab110f7786fa88f56fde3bd4ebe7ab564d1af6b9bebda90aa5b53e6cde5385a8ac82310d600c3ccf23c961c6b4c20c647a6c082b1aaa1a3a505edd025551a1695a6c973ac7c1956403c7f170392c28ce71f7c460d71d61e9ddb4aa48d78477c9240f7efbe5653dd7dc5f81956ec1f9d7d796f7c439bb2db92327ffb2e6c0a8ddf3a3cffbbe466f1f61db78a86548412fc870e289db56e0f6273fed095100c04397cfed13237ee6bd037d44ff2f5f5bd947c86e396b3aee7b7e6bcfd8bc5ad68e353baa078dfdf61722d0c3effeb3a78f983f73c5ec5ecf79f762e48e3f6fc0ab65edb8796e06be76cef43e9fb76647751f917de4d4227cfdfcd9bd8ef5c6fa72dcffeabe9ecf2df547f1bbffec19d20d7ef433f470670857ff7a6dbfde8e97be38bfd7bdfbd9cbdb7b79934afd5104c3b2a1c50f31fe20973bd167627fe2b6157d447856410afe71e76a4c76987a4d021b0e34f47add37ce98d267d23e7a923b72c2b9796e465ca566cf5f5684c6361fbcc128c071e0781e9c208001686ef7c31f8ae2960be7e0e47939686d0fc21f8859e61c2f80e778307068f506108e2838754141dce377a428768fdb23a7f64dccfbed35f37a099ccd22e1eef366f47acd50a18f44f2d3eb16f53aef820c27ee38a9b0d76bda838973b907c3722f41599569ef57ccbbcfe5b75f5ed6eb777ffca074d0677838cfd4d1e7d42d84d79c32b5cf79a5b9ac78f19e53b0ee1b27e289db56f49bd076f43976e79e1c7dac0b9717e3999b16f7b1f8870a711cfd0ca5b9acf8ee8533fbbcee91538bfa2cc4be7e7edf2d98153a5cfd0459e8c404e26851397a12bbe3a4c25ef1df2da52dbd2ca5d317e40147b8f99edb54dbcb22397a928bb7d4ec8cc214386d66083c8f5e65e0380e669309b38b523035d7830cb7157f7e7337ea78f1f3752ccf036090380153735d70d8e2b34e6e9e9bd16fe860f1e454e028a1e8cfba9c5d38365bc0065a542d9c940a606462ab7b2afbe6077cebd94d435aa4dd56ecab65ed035a94274f4f4bc839adcab40fe9915832407c3e1896fb2cc8fa13d1238f73c9244faff7eca96c1df0f8033d43738a52fbfceebc13f2fbfcce6691fa7c1e41824e1c632c19228168d5ec2ce008413fba2298cd22e191538b7a2c9d6e2bbe7b3bd79113c8aa4c7bdc35d12581c7d43c0fb6ecafefe9770e00d1a882ac0c272ee94ab673392c38676921aa1a3aa0a85a4f463b5335586c66cc9b941af7d8cdcd73f5fbfb0c8fad8f80f6c758b93b07ca96b75b47ee7c4aeb7b5b834766c1eba5a2d1dbeff3e3b49912724e972fca19f6f51d6dedde3c3763c8fb7be1c29c5edf8fd27aef80dfc74b2679065c741fcd40dfb1a3731a88890fb9dc898473744cbcdb2afffddbbdddeffdb90787c3d927e4213dc5014505140dd000785c365c7fc60c2c9af6f98478c339b3b0627e3ecc66090cb1f2af1c2f223fc38da533b3e33e8fe10a09313e19cff793c498200b9d1892e67e92d88ea4b1bdb745eeb1f51ff33cd29dd79dc4746482d0aa4c7bc20a5a2c9f9d839fdfba029feea9476730829c143b964ccfc0a2e959bd5ee77298f1bb3b4ec6277b6a70f0703bfc2119e91e1b4e5e90078fd342377f0c79e68ad9bd6ac1eba128c16d7e1d96ded3614d6b208e63f5fe5e1c5da8a83f8efebca3cf872048d00943bcb7ad7ad06cee232b7201e8d95e7434b79c3619af966deef9f99c3f6eeef5f79b561525f4bc4f9c938313e70ced22b598459cbea810a72f2a9c70f76672566f01fbe46073bff76a6f7547af9f8d0ae56870f439d5b406c67cdbd4bce2de6197a3f33f8c5090e1ec15f35fd710c0deaad601dddfc1b08ce736d50e7a3e043114e472277a71e34b7b062c08f3b397b7f7d986b36266ff31be65d3337b65c4f712268709172f2f4af8b9472211949494c0e7f30100545545e981c30804c20080aab27ad41eee7dfe4d6d0134b50726c4bd393a16fff4ae46347786fa78585edbd334a8b5381ee8dee2d8cd436b2a067cee8058019a912eb45390e1ec754ea5fe286efafd2703669bafd9518d2ffcdf877dee41375f5ad27b8179e7735bfa7d6df796c523b7cbadcab4c7b5fb83200b9d207aace9474e6dc1c9b3b360b74a686c0ff65b1a74b02d67368bd42723be9b3b4e2a4c7802584949092ebdf4521c3870000e87036bd67c88dd9fd463c3fb7b9196edc6dce54578ffdfdbc083c7cddf3e078b56ccc253af6dc3af5fdd07060e775c300db75fbe785cdf976ec1393279ecea5fafc5772f9c890c8f0d8ded41fcf88d7d134618be71c614ac3b6247c4397fdc8c67ae0861c5cccc9e73ae6af4e29febca7a922c2f99e4c12da74d1e76b8a6bb4adfaa4c3b9ebe75799fb1f9f195f3b0ea379ff5fcfc6a593b5a7eb60637ad2aeaf12a1cfd7dd8fde807f8ed35f3fa9cd38d674cc7739b6a7b59e9273ffa01ee38a930965c0aa0acae13bf79ef509f84c01f5f398f262282049d480c0fada9e8b3d5ea682bfbe1ab170e7a8ccb564eea57d08d9679d5c3adb7de8abd7bf7e2e28b2fc6e21316c1664ec2960f3f426ab61b9aa262cd2b3b3079560e4af7d662dbda03b0e4a4e3f17fefc7f47c37a6663bb0625ece84b82fdfbd7066aff0c5ba86409f70c6d1af1faf5cb8bc1837efacefb5508c956ddd33e07b627919a558363dd3f0a270cd8eea9ee7715d4300373fb51eef7fefac5eaf59323db3d72e8deed7ae7b69e0732af54771c70b3bb1f9a8734a7359f1db6be6f5ba3fa5fe68ec1c0629fdfbc8a94543ee362188fe20973bd18b81b6c31c2de66fddb37ac872ad692e6b9f2d5af194791d08455170f0e041d8ed763cfffcf378e0bb0fc2e14882c6342c5e35158b564f05e3194ebd7801788e87080ee5751d6000be7afe34fcecf693316f4ad684b83fa7cecfebb750cd40c230de3b69fde28625bd7a00e8793e072a4033140dedbddddd036d93fbf6e50b748f71f739bd75cfea7ecfe9d4f97978fb9613741fabbfc6470441824e0ccf32bf7c2e5efae2fc01e3df8f9c5a848f1e384db71bf7e8ecde78cabc0e04630c76bb1d814000f7dc730f004055543070e00030c6816702c03880e3c1c0a0aa0c1c2fe0877fdf85960eff84ba47dfbe7c019eb962f6a0390acf5c317b420883cd126b9bfbf62d27f48a5f0f744d2fde73cab0c335672ccceb35668375f8fbf6e50b749fd35fbeb672d0efc3a9f3f350f2fdd307ac3fd0bd2858f78d1349cc89b82097fb71ce7d97cce955adad28c389590529b8707931361d68e829b691e9b1624e51aa21eb3ad1655e07435555f03c8f3973e6c47ec1011c62a560451110ba3ab2f100340d886d42e760b348e039aedfc97fdb1199d8e96edbb05ed33da6dbee3ba9e7e7c192d48e7cdd605c73ca545cbcbc087b2a5b7b154499579c82a20ce7a0a297a8f31eec5cfb7bae86f23c9c3a3f0f558d5eec2c6f813fac747da68849d9ae410b10e9bd9e3497151f3d701adedb568d4c8f7548efc591e75456dfd9cbc29f579c62a82852778dfb873b43d85dd1d273ac4c8f1593b25c437e2f46e219327a8f081274629c33d844b2647a665cb1bc1fbfb1afd7cff19679d563a5df7cf3cd5dbf00388e030706c671b102723c074114018e012c66bfdf7ff51c24bbecfd4efe7a420a7a1638368ba47bf2372212368b34ac7b94a8f31eec6fc35db81564380dbf57eff574bfd6e8f6b8e19cd3609f3f9c30c8483c4394454f824e10bad85bd5daa7fd68bc655e074210047cef7bdf83dfef07d76d6d730cbcc40011e034065ee2c00b1c043303270022cf60e5a3109846378b20081274821888912af3da1f3ccfe3c61b6fec6d7d14e7e037ffbaabe7e70bae8ab9217ff9f7693dbf3b7fd50cba5104411c3350521c9170aa1abd2356e69520088220412746897fae2bebf5f3d13dd209822088c4432e7722e17cfbf205b4fd862008822c74822008822048d00982200882049d20088220081274822008822048d00982200882186782de1252697409822008e208ca1b7d134fd03b64ba7104411004712487db826323e81672c813044110c4b8c06911872fe8b90e81469020088220c6010b8b52862fe8f1d064b2d0e813044110c411ec1dc178f4883ad5cbfcd49a922008822000606b55fb881e7fc4045d11a94c3c411004411c891f2317caa6b4378220088238061854d0e7163be33a7820a8d008130441100480a6f6405cefbf68f5f4b1b3d0cb1a8274070982200802c0faddd56367a1c74b50a6a438822008820080767f64e20a7a5d88d11d2408822008003bab3b86fd5e0143ebe990822e2ac38f83fb29e78e2008822000000d71e49559a161518167f8823ec9c1435487df64256832d15e74822008e2b8676b553b5aa3c3f75a5b75d8c743be24591d7e551bda8b4e1004411031e2d9835eec94e217f478a1ad6b044110c4f1cebef2a611ff8c21057db233beaa36b4758d20088238de3954d316d7fb4f9e9131f6167aa957a53b491004411cd77cb4bf71ec2df478abc5b5091225c611044110c72d5babda51ee8dafcbda5055e246c5420f9bcd743709822088e39a664d18f1cfd025e8f1ec450728318e200882387e89b786bb03fa42d7430afa24070f7734be72759418471004411cafc45bc3bdd0ce0f595446b785eee4e32be14a8971044110c4f14abc09715949fa42d7ba043dd7119fefbfc964a1c438822008e2b8636b553bf676c49710b7b0282571823e29d316d7c950c538822008e278259e0a7100b07c4e5ee204dd6e8b5f9077957be9ae12044110c715afaf3d10f731d23df6c4093a005822f125c6511c9d20088238de88377e9ec6ebd74e7d2e77071f57931680e2e8044110c4f14522e2e7c54e495786bb210b3dde9aee8a28d27e74822008e2b8a1a93d1077fc5c4f0d77c3821e6f621c00ecaef6d31d260882208e0bde5a5f1af731f426c41912f44424c695843872bb1304f1ffecdd5d6c54e79dc7f19f67c6e361e6d8351808af0b997121718d091b5a075625553624956f5013d136ca45b32b955cec4a0d57d96abb8a56dd55f76225f6a25505aa54526db65511546825276912947895020d5e8c0956a030b1159b640d648c99190c1e7bf6c21a67c23a0bf679ceeb7c3f97289c19bf24dffc9f79ce7380d0eb1dcae9f5f3576d5d23aaf23d6f889b57d025a9a968efc4b7f164929f3200a0260cddb6f7b8940753bae7cfcfe715f48c15d19a7afbd3f5c591023f650040a8f59c1eb47d8d07ef6b9cd73f3fafff7d7870c522db6ff0d4954996dd0100a1d53b94d3bfbf9bb57d9d271f5ee75cd057b6246cbfc1abc9143f6d0040a8bd5fa8b37d8db6f472e7822e494b8bf697cc59760700849589e5f6f6d4fc1f8a36afa067ac88d6db5f7567d91d00104aa696dbb7a75be6b5216e4113faa6b596ed37cab23b0020ac4c2cb7776d6b7576429766ee478f95ec9ff8c6c35a00006163e2612c96a6e675fff982839eb122fab3d284ed37dc375e66d91d00101abd4339fda677c4f675b6ad5834efe5f605055d92b6acb6ff41fa7832c9d9ee0080d018cd156c1f262349dff9fa9717f4f716f4ca266e5f93a4931fde604a070084c22b6f0ed8be4654e579dfae662be89299dbd706ea2d7e03000081d73b94d391ec0ddbd7d9da1c5dd072fb82839eb122dabaacdec837817bd2010041d7737a5053b2bfbbfd5b5f5bb7e0bfbbe009bd75b5995bcffe70a5c4b23b0020d0d3f9cfdfbe64e45a3bb6ac773fe892949eb0ff7c7336c7010082ccd466b89d2be2b6fefe82df41c68a18d9ed2e49af5f60731c002098d3f94f7e7bcac8b5bef3f52f2ff8f373db13baa9ddee97936c8e030004d3c931fb03a99ddded46822e496d937923df9063e7724ce90080404de7fb0ebd67e45a4fa51b6d4de7b6839eb122eabcbfd1c817c32d6c0080a039943533d43efb789bed6bd89ed053c9989a8a45235fd089f363fc76000002e160f71923d759179f5ed0d9edc6839eb1227aa8a9cec817d537d5c0b23b00c0f77a8772fa8fb3578c5cebbb0fafb6bddc6e24e892d4916e32f2459562319ec20600f0bda33d1f28afa8916beddaf18091eb444c7d71a636c7fd61a29e291d00e0ebe9fc67c7878d5c6b77dadcfe31234137b939ae148be9c4f931a20e00f065cc0f769f31369d3ffb789b91e576a3137a2a1933f2c016493a5597e2b70600e04b07ce7e6ae43aeda9b291cd70c6839eb1227a746dc2d81be3be740080dfa67353f79d4bd20b5dedc6a673a34197664e8e33750bdb40bdc519ef0000df18cd158cdd77be2e3e6dfb643847836ef216368933de0100fe99ce4d9dd92e99bb55cdb1a04b33b7b0c54a6626ebcb494b1f5f9be0370900e0a981eca89133db25c9d294b15bd51c0d7ac68a687b62d2d8f5def8e816533a00c0d3e9fcc747cf1abbdedf6c5b637c3a7724e8a6a7f4f16452fdd971a20e00f0c4d19e0f8c3cefdcc9e9dcb1a09b9ed27b4a8bf88d020078329dffebf1cbbe9fce1d0bbae9295d928ef4711b1b00c0dd98efddff8ea66466b3b793d3b9a341373da5b3410e00e026931be19c9ece1d0dba1353fad1ff2933a503005c99ce5f38d46fec7a4e4fe78e073d6345b4eb3e73f7a597623175f7b3f40e007036e62fbdfcaeb1f3da25e9df7677383a9d3b1e74c9ece97192944db0f40e0070ce4076546f7c72dbd8f59c3815ce93a067ac8876ae6d307a4d96de01004e4de72697da25e91f766d727c3a7725e895297d55316fec7a2cbd03009c88b9e9a5f6cee6882bd3b96b41cf58113db9a1d1e835b3094b17470a441d006044cfe941a34bed92f4c36f6f75653a772de8d2ccf3d2b7960b46aff95a21ce6f2000c0b657fb86f5f7bfcf1abde69e4d4b8c3eefdc3741cf58113db2b1d9e86d6c92f49bbe31a67400c082f50ee5f4a3574e1a3b40469ab94dedb9aecdae4de7ae06bd127593b7b149d2d5644a27ce137500c0c2627eb0fb8cde2f986d931bb7a9791a74c9fc0639493a5597e2f37400c0bcf59c1ed481b39f1abda69b1be13c0d7ac68ae8a987ccff5fcb6b85b80ac512bf9d00807be2c4e7e65195b5eff9475d9fce3d097ac53753b78d5ff3f005a67400c0ddf50ee5f48383278c7e6e2e49fffc44da93987b16f48c1551ebea94f1a5f7f16492fbd30100778df94b2fbf6bec19e7159dcd11edd8b2deb3afcbb309dda9a5f76cc262931c00e00b637eb0fb8cf1fbcdbd5c6af73ce8154e2cbdb3490e003057cc9dd8042779bbd4ee8ba03bb5f42e7db6498ea8030024693457d0dffdfe43e3d7f57aa9dd37137a65e9ddf4813392f4cbe1323bdf01007ab56f584f1f3869fcba96a63c5f6af74dd02b51377de04cc5af2f4d30a503400deb1dcae9fbbf386e7c47bbe4cd0132be0eba3473e08ce9b3de2569a2a141bfeabb4ed401a04663feccbeb774653a6afcda7b362df1e40019df07bd72d6fbd2a2f9a88f2793441d006a34e6a66f4f93a4f654d9f5b3da0313f44ad4bffb50b323d71e4f2675a48f7bd401a05662be77ff3b8ec43caab20efced63be8ab9ef825ef174cb9423d7bd9cb474ec1c510780b0c77cdfa1f77472cc99ffd6efdfddeebb98fb32e8192ba2952d09ed88dd74e4fa03f5441d00c21ef343d9bc23d77f71db4a5f7d6eeefb093d6345d4916e527ac2991f08510700623e5f3b57c4b56bc703be9cce7d1bf44ad4bb3a16aba95824ea00004f63be2e3ead7ffcde5ff836e69254572e97cb7efe215dca4feba717261dbb7e7a22afae8ec5ca5811fe8d008080c67ceffe771cfbcc3caab2feebc5c77c1d735f4fe8d5fe6a4d9d63d7ce262c6e69038000c7fc997d6f391673493abca7d3f7310f44d0335644a964cc9187b854709f3a000437e64edc9a56f12f4fdcafe58b5381f87ef87ec9bde2527e5a17470a7aad1077ec3512b76ee9994c42a9648c257800f0b157fb86f5fd5f1c77e404b8ea98efd8b23e10d3792026f4ea49bd75754a6d9379c75e63a2a161f6812e4ceb00e0cfa9bcf2a0152763be3b6d052ae6819ad0ab27f563e7721aa8b71c7d9d6fa66eab75758a491d007c14f39ed3838e3c02f5ce98efddfdd540c53c50137af5a4fed857163b768f7ac56b85b8fab3e34cea00e093981fedf9c0f198ef5c110f64cc0339a1574feabfeabbaef164d2d1d7e1b63600f03ee62fbdfcaedef8e4b6a3afb32e3ead5feffdcb40c63cd0417733ea4dc5a29ede9062b31c00b8ecd5be61fde0e0094777b28721e6810fba9b5197661e1ab3b22541d401c085a97c203baae70fbdaf29d539fa5a6188792882ee76d4b7960b7a64633351070007637eb0fb8c0e9cfdd4f1d70a4bcc431374b7a3beb458987d6e3b610700b331dff3d3637abf50e7f86b8529e6a10abadb5197588207009321776b893d8c310f5dd02b51efeecf299bb05c793d96e001c07eccdd5a6297666e4df3fb93d3087a55d4dd387ca6822363016061211fcd151c3fc2b55a500f8da9d9a07b1175a67500f0ef541ef698873ae895a83bfd4017a67500f0f7542e05ef412b04dd2751675a07007f4ce5b512f39a087a25ea856249bf1c76f74b8d954ada755f1d3be101d47cc807b2a37ae150bff2726f2a8faaacc37b3ab57c712af431af99a05747fdf085826bb7b555ac2ae6f5e4864696e101d45cc8477305fde4b7a77472ccdd075d85f1b634823e47d8ddbcadad1acbf0006a29e65e2caf4be1bd2d8da07f41d4fbb3e3ea292d72fdb563a592b62726d5916e22ec004219f2a33d1fe867c7875d5d5eaf7871db4aeddaf140cdc5bc66835e89fac7d72674f85ad493d76f2a16b5736d039faf03084dc807b2a3faf1d1b38e3f196d2e5195b57f77bbdad2cb6b32e6351df44ad425b97a5c2c610740c8cdaac5cfcb09faff13f613e7c774aa2ee5d97b60e31c80a085dcab0d6fd5f66c5aa2e7ba36d77ccc09fa1d51f772099e891d0013f9bd63899da0df35ea9274a42fa7cb49cbd3f742d80110f2b9753647b4eff947093941bfb7b07bb50bfe4ed5bbe2259ebf0ec0dd884bf274d7fa9d6a79173b41b711f542b1a4ffbc90d7d564ca17efa96d32afcefbf99c1d80f3211fcd15f4ca9b033a94cdfbe23db5a7cafaa7676be7d437821ef269bda2a958d4f66531b5ae4e31b503301af29ed383faf9db973c5f56672a27e83533ad33b503303d8d1fc9ded094ea7cf3de3a9b23fae1b7b73295137467c27e71a4a037af47548ac57cf5de12b76ea93d5ed2231b9b99da01dc35e29274b0fb8c7e77ee8aab8f31bd1796a6f4a3275a6be2096904dd0761f7ea3cf87bd1542c6ac3a23271073067c45f3f7fd5574bead56af51c7682ee71d4bd7a7adb7c27f774647276599ec003b515f1ca72fadb83d77d37895763d31b41f745d8fdba0c3f9755c5bc3a96c5d9500784780aef393da8dffd7148a7c6a67cf599f85c585e27e8be0cbbdf76c3dfcbf4beaa3ca90d2d041e087ac0dfea1f51dfe84d5f4fe17762f73a41f775d425e9d8b99c06eaadc0bdff58a9a4e5b727d4da1455664592257ac087f11ecd15d47dfca2ce7c34a6736393be38ec65be76a72dedddfd554922e6043d1861f7f3c6b9f9467ed5a23a2db5ea672779420fb83379673fbe1ee87857ab6c7823e4043d90612f144b7afdc20dcfcf86772af48988b4c68a2ad910fd5cec093e70f76057a29dbb31a1fffef09ac6274a3a3736a99b8af8feb3eff9e07e72821eba893da84bf10b0dbe242dbf3d31fb6795f8c35def8d95141bfa13df080f54225d716e6c52924217ec2fc2d23a4127ec8041c7dfeed3e98b237c2340c8c33e48f12d70cfec12f45716eb3149fdd971fdb110d1444303df1c0081b62c32a5bfee5ca35d3b1e20e404bdf6c29ee96856477e5a1f5f9bd03b1f4df8ee9c7800b89bf654592f74b5ab2dbd9c881374e29eb1925ad99250a158d2c90f6fb01c0fc0d7a22aeba974a39e7dbc8d8d6e041d734eed565ca9e4cc723c533b00a67110f4a0875d9a9dda25e9c4f9315db859e7eb33e30184d3baf8b49edcb854cf756d96c467e3041df6e2fef092cfed90cf4ed7b3910e80639645a6f48df55f62a73a4187a371ef6c998d3b933b00267110f4904dee17470aeabf723b7427d201704654656d6d8eea5b5f5ba71d5bd61371820edfc47d63a35a57cfc4bd502ce9ec4779a67700734ee15ddb5ad99d4ed01184b8cb8aab63f967d37b25f08337a5b17843209edb0ec01e4b535a9f8a687bba6536e04ce1041d2109bcf4d9f1b3fdd9710de7a774753aa2623c4ee48180c7bb255ea70d4b12faf3fb5b38ad8da0a396229fe9689efdb3eacfe1afe62775f966599f46eb558a46093de0b3702f8a48e9a67a6d5edbacf4ca2ff1f937083ae688fcc6c6cffd79f592fda54f8a2a4e4eebf2cd9967f9107cc0aca8ca5aa4e9d9604bd2371ebc4f92b46dd35a96cc71573c6d0d0b56097eb58b2305156f4dfddf3f1f9fe21be6910ba3e33a7fea0cdf080f6d5edbacc5d6e7cf8e58dc98989dae2b8835083a0000352ec2b7000000820e0000083a000020e8000080a0030040d00100806ffcef00d4601c69fa99cde60000000049454e44ae426082, 'f8935b5c0b8e6b3ddd8a9e881c11142bad8ca336', 1);
INSERT INTO `tbl_usuario` (`IDUsuario`, `Nombre`, `Apellido`, `Correo`, `Imagen`, `Password`, `TipoUsuario`) VALUES
(18, 'latosi', 'redpoint', 'coquein@algo.hn', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(12, 'asdasd', 'asdasd', 'asd@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(11, 'jairo', 'elcamionero', 'algo@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(10, 'Adan', 'Murillo', 'pendejadas@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(14, 'asdasdc', 'asdcxx', 'asdxas@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(15, 'dfdghad', 'ansdasj', 'asdfsd@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(19, 'Adan', 'Y', 'tumadre@algo.hn', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(20, 'adasdas', 'adasddas', 'asdas@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(21, 'a', 'b', 'c@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(22, 'b', 'a', 'as@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(23, 'a', 'c', 'algosd@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(24, 'adan', 'jos', 'm@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(25, 'df', 'ad', 'ad@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(26, 'm', 'm', 'mc@algo.hn', '', '7ab515d12bd2cf431745511ac4ee13fed15ab578', 1),
(27, 'ds', 'asd', 'gty@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(28, 'h', 'h', 'jsa@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1),
(30, 'adan', 'asd', 'asdasd@algo.hn', '', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
