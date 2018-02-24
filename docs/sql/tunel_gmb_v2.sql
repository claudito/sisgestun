-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2018 a las 17:39:56
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tunel_gmb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `tipo_equipos_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`codigo`, `nombre`, `descripcion`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `tipo_equipos_codigo`) VALUES
('CODACC001', 'VISUALIZACION CAMARA DAI', 'Camara DAI visualiza vehiculo detenido', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001'),
('CODACC002', 'VISUALIZACION CAMARA PTZ', 'Camara PTZ visualiza vehiculo detenido', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002'),
('CODACC003', 'PEATON EN TUNEL', 'Se visualiza peatón en el tunel', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC004', 'SEÑALIZACION DINAMICA', 'Se cambia señalizacion dinamica', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003'),
('CODACC005', 'MEGAFONIA', 'Se envia mensaje de megafonia', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ005'),
('CODACC006', 'LLAMADA EPI', 'Se solicita apoyo a EPI para dirigirse al lugar del incidente', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC007', 'EPI ESCOLTA VEHICULO', 'EPI procede a escoltar el vehiculo', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC008', 'EPI REMOLCA VEHICULO', 'EPI procede a remolcar el vehiculo', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC009', 'EPI ESCOLTA PEATON', 'EPI procede a escoltar a peaton', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC010', 'EPI A PIE', 'EPI se dirige al punto a pie', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC011', 'LLEGADA GRUA', 'Grua llega al lugar del incidente', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC012', 'GRUA REMOLCA VEHICULO', 'Grua procede a remolcar el vehiculo', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC013', 'REMOLCADO POR OTRO VEHICULO', 'Se visualiza que vehiculo detenido es remolcado por otro vehiculo', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC014', 'RETIRA POR SUS PROPIOS MEDIOS', 'Se visualiza que vehiculo detenido se retira por sus propios medios', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC015', 'VENTILACION', 'Se procede a activar ventilador', '1', '2018-02-08 02:18:23', ' rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014'),
('CODACC016', 'ILUMINACION', 'Se procede a activar luminaria', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ013'),
('CODACC017', 'POSTE SOS', 'Se recibe llamada de Poste SOS', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004'),
('CODACC018', 'BARRERA VEHICULAR', 'Se activa barrera vehicular', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ010'),
('CODACC019', 'GALIBO', 'Se activó alarma de Galibo', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ009'),
('CODACC020', 'VIA LIBERADA', 'Via se encuentra liberada, se restablece señalizacion. Condiciones normales de operación', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC021', 'AVISO PNP', 'Se solicita apoyo a PNP', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC022', 'AVISO EIM', 'Se solicita apoyo a EIM', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC023', 'AVISO MANTTO', 'Se solicita apoyo a personal de Mantenimiento', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC024', 'AVISO RETEN DE DIRECCION', 'Se reporta a reten de direccion', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC025', 'AVISO CCO _LAP', 'Se reporta a LAP', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC026', 'AVISO DIRESA', 'Se reporta a DIRESA', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC027', 'AVISO CGBVP', 'Se solicita apoyo a los Bomberos', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC028', 'AVISO INDECI', 'Se solicita apoyo a INDECI', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC029', 'AVISO SEGURIDAD', 'Se solicita apoyo a personal de Seguridad', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015'),
('CODACC030', 'AVISO FF.AA.', 'Se solicita apoyo a FF.AA', '1', '2018-02-08 02:18:23', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aforo`
--

CREATE TABLE `aforo` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `codigo_turno` varchar(9) NOT NULL,
  `codigo_sentido` varchar(9) NOT NULL,
  `total_liviano` decimal(15,6) NOT NULL,
  `total_pesado` decimal(15,6) NOT NULL,
  `velocidad` decimal(15,6) NOT NULL,
  `userCreate` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL,
  `userUpdate` varchar(100) DEFAULT NULL,
  `dateUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aforo`
--

INSERT INTO `aforo` (`id`, `fecha`, `codigo_turno`, `codigo_sentido`, `total_liviano`, `total_pesado`, `velocidad`, `userCreate`, `dateCreate`, `userUpdate`, `dateUpdate`) VALUES
(1, '2018-02-09', 'CODTUR001', 'CODSEN001', '200.000000', '50.000000', '0.000000', 'raul', '2018-02-21 04:29:26', NULL, NULL),
(2, '2018-02-09', 'CODTUR002', 'CODSEN001', '2000.000000', '5000.000000', '49.000000', 'raul', '2018-02-15 00:00:00', NULL, NULL),
(3, '2018-02-09', 'CODTUR003', 'CODSEN001', '4000.000000', '2500.000000', '50.000000', 'raul', '2018-02-15 00:00:00', NULL, NULL),
(5, '2018-02-10', 'CODTUR001', 'CODSEN001', '200.000000', '300.000000', '50.000000', 'raul', '2018-02-09 22:56:46', NULL, NULL),
(6, '2018-02-10', 'CODTUR002', 'CODSEN001', '200.000000', '300.000000', '50.000000', 'raul', '2018-02-09 22:56:58', NULL, NULL),
(8, '2018-02-10', 'CODTUR003', 'CODSEN001', '200.000000', '100.000000', '50.000000', 'raul', '2018-02-09 23:10:45', NULL, NULL),
(9, '2018-02-09', 'CODTUR001', 'CODSEN002', '200.000000', '300.000000', '50.000000', 'raul', '2018-02-09 23:26:47', NULL, NULL),
(10, '2018-02-09', 'CODTUR002', 'CODSEN002', '200.000000', '300.000000', '50.000000', 'raul', '2018-02-09 23:27:06', NULL, NULL),
(11, '2018-02-09', 'CODTUR003', 'CODSEN002', '200.000000', '300.000000', '50.000000', 'raul', '2018-02-09 23:27:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `abreviatura` varchar(50) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`codigo`, `nombre`, `abreviatura`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODARE001', 'CENTRO DE CONTROL', 'CC', '1', '2017-12-10 15:45:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODARE002', 'EQUIPO PRIMERA INTERVENCION', 'EPI', '1', '2017-12-10 15:45:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODARE003', 'MANTENIMIENTO', 'MANTTO', '1', '2017-12-10 15:45:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODARE004', 'SEGURIDAD', 'SEG', '1', '2017-12-10 15:45:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR001', 'JEFE', 'JEFE DE OPERACIONES', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR002', 'COORDINADOR CC', 'COORDINADOR DE SALA', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR003', 'OPERADOR CC', 'OPERADOR DE SALA', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR004', 'TI', 'TECNICO INFORMATICO', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR005', 'MANTENIMIENTO', 'TECNICO MANTENIMIENTO', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR006', 'EPI', 'EQUIPO DE PRIMERA INTERVENCION', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR007', 'SEGURIDAD', 'SEGURIDAD TUNEL', '1', '2017-12-10 16:08:57', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codigo`, `nombre`, `descripcion`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODCAR001', 'COORDINADOR', 'COORDINADOR DE OPERACIONES', '1', '2017-12-13 19:45:55', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR002', 'COORDINADOR CC', 'COORDINADOR DE SALA', '1', '2017-12-13 19:45:55', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR003', 'OPERADOR CC', 'OPERADOR DE SALA', '1', '2017-12-13 19:45:56', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR004', 'TI', 'TECNICO INFORMATICO', '1', '2017-12-13 19:45:56', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR005', 'MANTENIMIENTO', 'TECNICO MANTENIMIENTO', '1', '2017-12-13 19:45:56', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR006', 'EPI', 'EQUIPO DE PRIMERA INTERVENCION', '1', '2017-12-13 19:45:56', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODCAR007', 'SEGURIDAD', 'SEGURIDAD TUNEL', '1', '2017-12-13 19:45:56', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativo`
--

CREATE TABLE `correlativo` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `correlativo`
--

INSERT INTO `correlativo` (`id`, `codigo`, `descripcion`, `numero`) VALUES
(1, 'REGINC', 'REGISTRO DE INCIDENTES', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `tipo_equipos_codigo` varchar(9) NOT NULL,
  `zona_codigo` varchar(9) NOT NULL,
  `ubicacion_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `tipo_equipos_codigo`, `zona_codigo`, `ubicacion_codigo`) VALUES
('CODEQU001', 'DAI-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU002', 'DAI-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU003', 'DAI-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU004', 'DAI-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU005', 'DAI-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU006', 'DAI-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON002', 'CODUBI002'),
('CODEQU007', 'DAI-NS-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON003', 'CODUBI002'),
('CODEQU008', 'DAI-NS-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON003', 'CODUBI002'),
('CODEQU009', 'DAI-NS-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON003', 'CODUBI002'),
('CODEQU010', 'DAI-NS-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON003', 'CODUBI002'),
('CODEQU011', 'DAI-NS-011', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU012', 'DAI-NS-012', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU013', 'DAI-NS-013', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU014', 'DAI-NS-014', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU015', 'DAI-NS-015', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU016', 'DAI-NS-016', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON004', 'CODUBI002'),
('CODEQU017', 'DAI-NS-017', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON005', 'CODUBI002'),
('CODEQU018', 'DAI-NS-018', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON005', 'CODUBI002'),
('CODEQU019', 'DAI-NS-019', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON005', 'CODUBI002'),
('CODEQU020', 'DAI-NS-020', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON005', 'CODUBI002'),
('CODEQU021', 'DAI-NS-021', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON006', 'CODUBI002'),
('CODEQU022', 'DAI-NS-022', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON006', 'CODUBI002'),
('CODEQU023', 'DAI-NS-023', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON006', 'CODUBI002'),
('CODEQU024', 'DAI-NS-024', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON006', 'CODUBI002'),
('CODEQU025', 'DAI-SN-025', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU026', 'DAI-SN-026', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU027', 'DAI-SN-027', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU028', 'DAI-SN-028', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU029', 'DAI-SN-029', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU030', 'DAI-SN-030', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON009', 'CODUBI002'),
('CODEQU031', 'DAI-SN-031', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON010', 'CODUBI002'),
('CODEQU032', 'DAI-SN-032', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON010', 'CODUBI002'),
('CODEQU033', 'DAI-SN-033', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON010', 'CODUBI002'),
('CODEQU034', 'DAI-SN-034', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON010', 'CODUBI002'),
('CODEQU035', 'DAI-SN-035', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU036', 'DAI-SN-036', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU037', 'DAI-SN-037', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU038', 'DAI-SN-038', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU039', 'DAI-SN-039', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU040', 'DAI-SN-040', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON011', 'CODUBI002'),
('CODEQU041', 'DAI-SN-041', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON012', 'CODUBI002'),
('CODEQU042', 'DAI-SN-042', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON012', 'CODUBI002'),
('CODEQU043', 'DAI-SN-043', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON012', 'CODUBI002'),
('CODEQU044', 'DAI-SN-044', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON012', 'CODUBI002'),
('CODEQU045', 'DAI-SN-045', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON013', 'CODUBI002'),
('CODEQU046', 'DAI-SN-046', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON013', 'CODUBI002'),
('CODEQU047', 'DAI-SN-047', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON013', 'CODUBI002'),
('CODEQU048', 'DAI-SN-048', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ001', 'CODZON013', 'CODUBI002'),
('CODEQU049', 'PTZ-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON001', 'CODUBI003'),
('CODEQU050', 'PTZ-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON003', 'CODUBI002'),
('CODEQU051', 'PTZ-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON004', 'CODUBI002'),
('CODEQU052', 'PTZ-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON005', 'CODUBI002'),
('CODEQU053', 'PTZ-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON007', 'CODUBI003'),
('CODEQU054', 'PTZ-SN-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON008', 'CODUBI003'),
('CODEQU055', 'PTZ-SN-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON010', 'CODUBI002'),
('CODEQU056', 'PTZ-SN-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON011', 'CODUBI002'),
('CODEQU057', 'PTZ-SN-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON012', 'CODUBI002'),
('CODEQU058', 'PTZ-SN-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON014', 'CODUBI003'),
('CODEQU059', 'TVF-GPO-49', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON001', 'CODUBI001'),
('CODEQU060', 'TVF-GPO-50', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON002', 'CODUBI001'),
('CODEQU061', 'TVF-GPO-51', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON002', 'CODUBI001'),
('CODEQU062', 'PTZ-GPO-52', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON003', 'CODUBI004'),
('CODEQU063', 'TVF-GPO-53', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON003', 'CODUBI001'),
('CODEQU064', 'TVF-GPO-54', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON003', 'CODUBI001'),
('CODEQU065', 'TVF-GPO-55', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON004', 'CODUBI001'),
('CODEQU066', 'PTZ-GPO-56', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON004', 'CODUBI004'),
('CODEQU067', 'TVF-GPO-57', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON004', 'CODUBI001'),
('CODEQU068', 'TVF-GPO-58', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON004', 'CODUBI001'),
('CODEQU069', 'TVF-GPO-59', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON005', 'CODUBI001'),
('CODEQU070', 'PTZ-GPO-60', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON005', 'CODUBI004'),
('CODEQU071', 'TVF-GPO-61', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON005', 'CODUBI001'),
('CODEQU072', 'TVF-GPO-62', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON006', 'CODUBI001'),
('CODEQU073', 'TVF-GPO-63', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON007', 'CODUBI001'),
('CODEQU074', 'TVF-GPE-64', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON008', 'CODUBI001'),
('CODEQU075', 'TVF-GPE-65', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON009', 'CODUBI001'),
('CODEQU076', 'TVF-GPE-66', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON010', 'CODUBI001'),
('CODEQU077', 'PTZ-GPE-67', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON010', 'CODUBI004'),
('CODEQU078', 'TVF-GPE-68', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON010', 'CODUBI001'),
('CODEQU079', 'TVF-GPE-69', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON011', 'CODUBI001'),
('CODEQU080', 'TVF-GPE-70', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON011', 'CODUBI001'),
('CODEQU081', 'PTZ-GPE-71', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON011', 'CODUBI004'),
('CODEQU082', 'TVF-GPE-72', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON011', 'CODUBI001'),
('CODEQU083', 'TVF-GPE-73', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON012', 'CODUBI001'),
('CODEQU084', 'TVF-GPE-74', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON012', 'CODUBI001'),
('CODEQU085', 'PTZ-GPE-75', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON012', 'CODUBI004'),
('CODEQU086', 'TVF-GPE-76', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON013', 'CODUBI001'),
('CODEQU087', 'TVF-GPE-77', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON013', 'CODUBI001'),
('CODEQU088', 'TVF-GPE-78', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ002', 'CODZON014', 'CODUBI001'),
('CODEQU089', 'PMV-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU090', 'PMV-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU091', 'PMV-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU092', 'PMV-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU093', 'PMV-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU094', 'PMV-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI003'),
('CODEQU095', 'AF-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU096', 'AF-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU097', 'AF-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU098', 'AF-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU099', 'AF-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU100', 'AF-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU101', 'AF-NS-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU102', 'AF-NS-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU103', 'AF-NS-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU104', 'AF-NS-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU105', 'AF-NS-011', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU106', 'AF-NS-012', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU107', 'AF-NS-013', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU108', 'AF-NS-014', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU109', 'AF-NS-015', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU110', 'AF-SN-016', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU111', 'AF-SN-017', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU112', 'AF-SN-018', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU113', 'AF-SN-019', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU114', 'AF-SN-020', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU115', 'AF-SN-021', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU116', 'AF-SN-022', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU117', 'AF-SN-023', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU118', 'AF-SN-024', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU119', 'AF-SN-025', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU120', 'AF-SN-026', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU121', 'AF-SN-027', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU122', 'AF-SN-028', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU123', 'AF-SN-029', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU124', 'AF-SN-030', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU125', 'SV-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU126', 'SV-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU127', 'SV-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU128', 'SV-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU129', 'SV-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU130', 'SV-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON002', 'CODUBI002'),
('CODEQU131', 'SV-NS-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU132', 'SV-NS-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU133', 'SV-NS-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON003', 'CODUBI002'),
('CODEQU134', 'SV-NS-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU135', 'SV-NS-011', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU136', 'SV-NS-012', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON004', 'CODUBI002'),
('CODEQU137', 'SV-NS-013', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU138', 'SV-NS-014', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU139', 'SV-NS-015', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON005', 'CODUBI002'),
('CODEQU140', 'SV-SN-016', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU141', 'SV-SN-017', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU142', 'SV-SN-018', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON009', 'CODUBI002'),
('CODEQU143', 'SV-SN-019', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU144', 'SV-SN-020', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU145', 'SV-SN-021', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON010', 'CODUBI002'),
('CODEQU146', 'SV-SN-022', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU147', 'SV-SN-023', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU148', 'SV-SN-024', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON011', 'CODUBI002'),
('CODEQU149', 'SV-SN-025', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU150', 'SV-SN-026', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU151', 'SV-SN-027', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON012', 'CODUBI002'),
('CODEQU152', 'SV-SN-028', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON013', 'CODUBI002'),
('CODEQU153', 'SV-SN-029', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON013', 'CODUBI002'),
('CODEQU154', 'SV-SN-030', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ003', 'CODZON013', 'CODUBI002'),
('CODEQU155', 'VL-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU156', 'VL-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU157', 'VL-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON003', 'CODUBI002'),
('CODEQU158', 'VL-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON003', 'CODUBI002'),
('CODEQU159', 'VL-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON004', 'CODUBI002'),
('CODEQU160', 'VL-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON004', 'CODUBI002'),
('CODEQU161', 'VL-NS-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON004', 'CODUBI002'),
('CODEQU162', 'VL-NS-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON004', 'CODUBI002'),
('CODEQU163', 'VL-NS-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON005', 'CODUBI002'),
('CODEQU164', 'VL-NS-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON005', 'CODUBI002'),
('CODEQU165', 'VL-NS-011', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON005', 'CODUBI002'),
('CODEQU166', 'VL-NS-012', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON005', 'CODUBI002'),
('CODEQU167', 'VL-NS-013', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON006', 'CODUBI002'),
('CODEQU168', 'VL-NS-014', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON006', 'CODUBI002'),
('CODEQU169', 'VL-SN-015', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON009', 'CODUBI002'),
('CODEQU170', 'VL-SN-016', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON009', 'CODUBI002'),
('CODEQU171', 'VL-SN-017', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON010', 'CODUBI002'),
('CODEQU172', 'VL-SN-018', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON010', 'CODUBI002'),
('CODEQU173', 'VL-SN-019', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON010', 'CODUBI002'),
('CODEQU174', 'VL-SN-020', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON010', 'CODUBI002'),
('CODEQU175', 'VL-SN-021', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON011', 'CODUBI002'),
('CODEQU176', 'VL-SN-022', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON011', 'CODUBI002'),
('CODEQU177', 'VL-SN-023', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON011', 'CODUBI002'),
('CODEQU178', 'VL-SN-024', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON011', 'CODUBI002'),
('CODEQU179', 'VL-SN-025', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON012', 'CODUBI002'),
('CODEQU180', 'VL-SN-026', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON012', 'CODUBI002'),
('CODEQU181', 'VL-SN-027', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON013', 'CODUBI002'),
('CODEQU182', 'VL-SN-028', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON013', 'CODUBI002'),
('CODEQU183', 'VPG-GPO-029', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU184', 'VG-GPO-030', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU185', 'VG-GPO-031', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU186', 'VG-GPO-032', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU187', 'VG-GPO-033', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU188', 'VG-GPO-034', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU189', 'VG-GPO-035', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU190', 'VPG-GPO-036', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU191', 'VPG-GPE-037', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU192', 'VG-GPE-038', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU193', 'VG-GPE-039', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU194', 'VG-GPE-040', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU195', 'VG-GPE-041', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU196', 'VG-GPE-042', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU197', 'VG-GPE-043', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU198', 'VPG-GPE-044', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ014', 'CODZON002', 'CODUBI002'),
('CODEQU199', 'GAL-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ009', 'CODZON002', 'CODUBI002'),
('CODEQU200', 'GAL-SN-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ009', 'CODZON002', 'CODUBI002'),
('CODEQU201', 'SOS-NS-001', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU202', 'SOS-NS-002', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU203', 'SOS-NS-003', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU204', 'SOS-NS-004', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU205', 'SOS-NS-005', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU206', 'SOS-NS-006', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU207', 'SOS-NS-007', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU208', 'SOS-NS-008', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU209', 'SOS-NS-009', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU210', 'SOS-NS-010', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU211', 'SOS-SN-011', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU212', 'SOS-SN-012', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU213', 'SOS-SN-013', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU214', 'SOS-SN-014', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU215', 'SOS-SN-015', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU216', 'SOS-SN-016', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU217', 'SOS-SN-017', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU218', 'SOS-SN-018', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU219', 'SOS-SN-019', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU220', 'SOS-SN-020', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU221', 'SOS-NS-E01', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU222', 'SOS-NS-E02', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU223', 'SOS-SN-E03', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU224', 'SOS-SN-E04', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU225', 'SOS-GPE-039', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002'),
('CODEQU226', 'SOS-GPO-040', '1', '2018-01-15 00:00:00', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTEQ004', 'CODZON002', 'CODUBI002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE `incidente` (
  `codigo` varchar(9) NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `tipo_incidente_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`codigo`, `valor`, `descripcion`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `tipo_incidente_codigo`) VALUES
('CODINC001', 'P-MET-01 ', 'Niebla ', '1', '2017-12-10 16:14:41', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC002', 'P-MET-02 ', 'Lluvia intensa/muy intensa ', '1', '2017-12-10 16:14:41', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC003', 'P-MET-03 ', 'Viento fuerte ', '1', '2017-12-10 16:14:41', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC004', 'P-AMB-01 ', 'Alta concentración de CO/ NOx o alto nivel de Opacidad (Nivel de Alarma H) ', '1', '2017-12-10 16:14:41', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC005', 'P-FUE-01 ', 'Presencia de humo por incendio exterior ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC006', 'P-TRA-01 ', 'Circulación lenta ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC007', 'P-TRA-02 ', 'Obstáculo en berma ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC008', 'P-TRA-03 ', 'Obstáculo en carril ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC009', 'P-TRA-04 ', 'Presencia de animal suelto ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC010', 'P-TRA-05 ', 'Vehículo circulando a velocidad reducida ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN001'),
('CODINC011', 'E0_AMB_01 ', 'Alta concentración de CO/OP/NOx (Nivel de Alarma HH) ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC012', 'E0_TRA_01 ', 'Presencia de peatones y vehículos no autorizados ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC013', 'E0_TRA_02 ', 'Vehículo detenido obstaculizando parcialmente la calzada ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC014', 'E0_TRA_03 ', 'Vehículo detenido u obstáculo obstaculizando totalmente el paso ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC015', 'E0_TRA_04 ', 'Derrame de líquidos ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC016', 'E0_TRA_05 ', 'Retenciones de carácter severo. Circulación parada ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC017', 'E0_TRA_05 ', 'Detección de exceso de gálibo en túnel ', '1', '2017-12-10 16:14:42', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC018', 'E0_ACC_01 ', 'Accidente sin heridos ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC019', 'E0_ACC_02 ', 'Avería de aeronave en vuelo (baja probabilidad) ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC020', 'E0_AVE_01 ', 'Condiciones de servicio degradado ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC021', 'E0_ILI_01 ', 'Intrusión en dependencias de la explotación ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN002'),
('CODINC022', 'E1_TRA_01 ', 'Conducción temeraria ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC023', 'E1_ACC_01 ', 'Accidente con heridos ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC024', 'E1_ACC_02 ', 'Accidente de TMP sin fuga, derrame, incendio o explosión ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC025', 'E1_ACC_03 ', 'Avería de aeronave en vuelo (alta probabilidad) ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC026', 'E1_ILI_01 ', 'Amenaza de atentado ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC027', 'E1_ILI_02 ', 'Objeto o vehículo sospechoso abandonado ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC028', 'E1_ILI_03 ', 'Manifestaciones o desórdenes públicos ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC029', 'E1_ILI_04 ', 'Asaltos o secuestros ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC030', 'E1-RUI-01 ', 'Sismo ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC031', 'E1-RUI-02 ', 'Tsunami ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC032', 'E1_AVE_01 ', 'Avería grave ', '1', '2017-12-10 16:14:43', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC033', 'E1_FUE_01 ', 'Fuego en las instalaciones de la explotación próximas al túnel (subestaciones o centro de control, área de EPIs) ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN003'),
('CODINC034', 'E2_ACC_01 ', 'Accidente múltiple con heridos ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004'),
('CODINC035', 'E2_ACC_02 ', 'Accidente con implicación de TMP con fuga o derrame ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004'),
('CODINC036', 'E2_ACC_03 ', 'Accidente de aeronave ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004'),
('CODINC037', 'E2_ILI_01 ', 'Sabotajes o atentado ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004'),
('CODINC038', 'E2_RUI_01 ', 'Daños estructurales de carácter grave ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004'),
('CODINC039', 'E2_FUE_01 ', 'Fuego en el túnel ', '1', '2017-12-10 16:14:44', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTIN004');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `descripcion`, `item`) VALUES
(1, 'MANTENIMIENTOS', 1),
(2, 'GESTIÓN', 2),
(3, 'ADMINISTRADOR', 4),
(5, 'REPORTES', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `sentido_codigo` varchar(9) NOT NULL,
  `turno_codigo` varchar(9) NOT NULL,
  `incidente_codigo` varchar(9) NOT NULL,
  `coordinador` varchar(9) NOT NULL,
  `operador1` varchar(9) NOT NULL,
  `operador2` varchar(9) NOT NULL,
  `ti` varchar(9) NOT NULL,
  `epi` varchar(9) NOT NULL,
  `seguridad` varchar(9) NOT NULL,
  `movil` varchar(9) NOT NULL,
  `flagdelete` enum('1','0') DEFAULT '0',
  `fregistro` datetime NOT NULL,
  `usercreate` varchar(100) NOT NULL,
  `frupdate` datetime NOT NULL,
  `userupdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id`, `fecha`, `sentido_codigo`, `turno_codigo`, `incidente_codigo`, `coordinador`, `operador1`, `operador2`, `ti`, `epi`, `seguridad`, `movil`, `flagdelete`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
(1, '2018-02-09', 'CODSEN001', 'CODTUR001', 'CODINC013', 'CODPER002', 'CODPER006', 'CODPER011', '0', '0', '0', '0', '0', '2018-02-09 00:15:48', 'raul', '0000-00-00 00:00:00', ''),
(2, '2018-02-09', 'CODSEN002', 'CODTUR003', 'CODINC008', 'CODPER002', 'CODPER006', 'CODPER011', 'CODPER016', 'CODPER034', 'CODPER037', 'CODVEH004', '0', '2018-02-09 00:37:16', 'raul', '0000-00-00 00:00:00', ''),
(3, '2018-02-10', 'CODSEN001', 'CODTUR003', 'CODINC008', 'CODPER002', 'CODPER006', 'CODPER011', 'CODPER016', '0', '0', '0', '0', '2018-02-09 00:37:55', 'raul', '0000-00-00 00:00:00', ''),
(4, '2018-02-09', 'CODSEN001', 'CODTUR002', 'CODINC010', 'CODPER002', 'CODPER011', 'CODPER009', 'CODPER015', '0', '0', '0', '0', '2018-02-09 00:47:08', 'raul', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_submenu`
--

CREATE TABLE `permiso_submenu` (
  `id` int(11) NOT NULL,
  `estado` enum('1','0') DEFAULT '0',
  `submenu_id` int(11) NOT NULL,
  `usuarios_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso_submenu`
--

INSERT INTO `permiso_submenu` (`id`, `estado`, `submenu_id`, `usuarios_codigo`) VALUES
(1, '1', 1, 'CODPER001'),
(2, '1', 2, 'CODPER001'),
(3, '1', 3, 'CODPER001'),
(4, '1', 4, 'CODPER001'),
(5, '1', 5, 'CODPER001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `codigo` varchar(9) NOT NULL,
  `apepat` varchar(100) DEFAULT NULL,
  `apemat` varchar(100) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `celular` char(9) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `area_codigo` varchar(9) NOT NULL,
  `cargo_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`codigo`, `apepat`, `apemat`, `nombres`, `email`, `foto`, `fec_nac`, `dni`, `celular`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `area_codigo`, `cargo_codigo`) VALUES
('CODPER001', ' Ronchi ', 'Cabrera', 'Carlos Hugo', 'cronchic86@gmail.com', '', '2017-12-10', '05040555', '954716264', '1', '2017-12-10 16:00:26', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR001'),
('CODPER002', 'Torre', 'Carrillo', 'Enrique Luis', 'enlutorre@hotmail.com', '', '2017-12-10', '05040555', '985093224', '1', '2017-12-10 16:00:26', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR002'),
('CODPER003', ' Ponce ', 'Rodas', 'Jesús Miguel', 'jemiporo@gmail.com', '', '2017-12-10', '05040555', '947595179', '1', '2017-12-10 16:00:26', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR002'),
('CODPER004', ' Janampa ', 'Palomino', 'Johan', 'johan10jp@gmail.com', '', '2017-12-10', '05040555', '925724694', '1', '2017-12-10 16:00:26', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR002'),
('CODPER005', ' Cerron ', 'Ruiz', 'Nilo Ricardo', 'nicg00@hotmail.com', '', '2017-12-10', '05040555', '948617062', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR002'),
('CODPER006', ' Salazar', ' Manrique', 'Adrian', 'adalos@outlook.com', '', '2017-12-10', '05040555', '987755990', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER007', ' Arpasi ', 'Cerna', 'Jaime Christian', 'jarpasic@gmail.com', '', '2017-12-10', '05040555', '949390420', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER008', ' Huauya ', 'Trujillo', 'William', 'williams_abraham@msn.com', '', '2017-12-10', '05040555', '986017371', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER009', ' Herreros ', 'Atauje', 'Diana', 'diana_2005_3@hotmail.com', '', '2017-12-10', '05040555', '993163464', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER010', ' Barrios ', 'Acasiete', 'Jose', 'jbarrios.ak7@gmail.com', '', '2017-12-10', '05040555', '987821269', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER011', 'Granda', 'Sabroso', 'Brian', '', '', '2017-12-10', '05040555', '', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER012', 'Abarca', 'Navarro', 'Erick', '', '', '2017-12-10', '05040555', '', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR003'),
('CODPER013', ' Vizarreta ', 'Salazar', 'Victor Raul', 'visavira@hotmail.com', '', '2017-12-10', '05040555', '923660406', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR004'),
('CODPER014', ' Alcantara  ', 'Estrada', 'Jhosep', 'jhosep_087@hotmail.com', '', '2017-12-10', '05040555', '991379907', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR004'),
('CODPER015', ' Briones ', 'Romero', 'Christian', 'brivalsoft@gmail.com', '', '2017-12-10', '05040555', '992451010', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR004'),
('CODPER016', ' San Martin ', 'Suarez', 'Alejandro', 'alesamasu@gmail.com', '', '2017-12-10', '05040555', '986123219', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE001', 'CODCAR004'),
('CODPER017', 'Alegria', 'Chapiana', 'Jemel ', '', '', '2017-12-10', '05040555', '965079980', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER018', 'Grandez', 'Calampa', 'Adderly', '', '', '2017-12-10', '05040555', '949124698', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER019', 'Camacho', 'Arroyo', 'Carlos', '', '', '2017-12-10', '05040555', '947536018', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER020', 'Maza', 'Ubillus', 'Luis Alberto', '', '', '2017-12-10', '05040555', '971781687', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER021', 'Huaman', 'Gutierrez', 'Eddy Alexander', '', '', '2017-12-10', '05040555', '977983049', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER022', 'Cespedes', 'Villanueva', 'Oswaldo', '', '', '2017-12-10', '05040555', '950622892', '1', '2017-12-10 16:00:27', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER023', 'De la Cruz', 'Astiyauri', 'Angel', '', '', '2017-12-10', '05040555', '992772985', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER024', 'Zevallos', 'Nuñez', 'Rider', '', '', '2017-12-10', '05040555', '968143975', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER025', 'Chanchari', 'Curichimba', 'Johny', '', '', '2017-12-10', '05040555', '955801279', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER026', 'Vargas', 'Pando', 'Heraclides Silverio  ', '', '', '2017-12-10', '05040555', '993094610', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER027', 'Villantoy', 'Gamboa', 'Danilo  ', '', '', '2017-12-10', '05040555', '962751768', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER028', 'Huacacolqui', 'Pereda', 'Alfredo Manuel', '', '', '2017-12-10', '05040555', '958543711', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER029', 'Martinez', 'Marchan', 'Israel Yovany', '', '', '2017-12-10', '05040555', '983586209', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE003', 'CODCAR005'),
('CODPER030', 'Angeles', 'Bachet', 'Carlos', 'cangeles@outlook.com', '', '2017-12-10', '05040555', '991775742', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE002', 'CODCAR006'),
('CODPER031', 'Begazo', 'Tapia', 'Alex', 'abegazotapia@gmail.com', '', '2017-12-10', '05040555', '949603333', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE002', 'CODCAR006'),
('CODPER032', 'Camargo', 'Rivera', 'Jose', 'joseluiscrb60@gmail.com', '', '2017-12-10', '05040555', '990272970', '1', '2017-12-10 16:00:28', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE002', 'CODCAR006'),
('CODPER033', 'Dorival', 'Herencia', 'Marcel Fernando', 'marceldorival2@gmail.com', '', '2017-12-10', '05040555', '986822512', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE002', 'CODCAR006'),
('CODPER034', 'Prentice', 'Cavero', 'Daniel Eduardo', 'danielprentice81@hotmail.com', '', '2017-12-10', '05040555', '965419082', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE002', 'CODCAR006'),
('CODPER035', 'Inga', 'Leon', 'Edgar', 'edgar_ingaleon@hotmail.com', '', '2017-12-10', '05040555', '993002366', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE004', 'CODCAR007'),
('CODPER036', 'Cañas', 'Huarhua', 'Teodoro', 'canashuarhuaalejandro@gmail.com', '', '2017-12-10', '05040555', '983154800', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE004', 'CODCAR007'),
('CODPER037', 'Melcliades', 'Giraldo', 'Emiliano', 'emiliano_10g@hotmail.com', '', '2017-12-10', '05040555', '991375273', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE004', 'CODCAR007'),
('CODPER038', 'Haro', 'Morales', 'Jorge Victor', 'victor_1451@hotmail.com', '', '2017-12-10', '05040555', '997549889', '1', '2017-12-10 16:00:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODARE004', 'CODCAR007');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sentido`
--

CREATE TABLE `sentido` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sentido`
--

INSERT INTO `sentido` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODSEN001', 'CALLAO', '1', '2017-12-10 16:21:56', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSEN002', 'VENTANILLA', '1', '2017-12-10 16:21:56', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODSIS001', 'Sistema de Seguridad, Vigilancia y Control', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS002', 'Sistema de Señalizacion Dinamica', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS003', 'Sistema de Control de Galibo', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS004', 'Sistema de Cierre de Tunel', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS005', 'Sistema de CCTV', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS006', 'Sistema DAI', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS007', 'Sistema de Poste SOS', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS008', 'Sistema de Megafonia', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS009', 'Sistema de Radiocomunicaciones', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS010', 'Sistema de Deteccion y Extincion de Incendios', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS011', 'Sistema de Control de Ventilacion y Medicion Ambiental', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS012', 'Sistema de Control de Aforos', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS013', 'Sistema de Iluminacion', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODSIS014', 'EPI', '1', '2017-12-10 16:29:52', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `item` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `submenu`
--

INSERT INTO `submenu` (`id`, `descripcion`, `ruta`, `item`, `menu_id`) VALUES
(1, 'MENÚ', 'pages/menu', 1, 3),
(2, 'SUBMENÚS', 'pages/submenu', 2, 3),
(3, 'USUARIOS', 'pages/usuario', 3, 3),
(4, 'INCIDENTE', 'pages/incidente', 1, 2),
(5, 'AFORO', 'pages/aforo', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipos`
--

CREATE TABLE `tipo_equipos` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `sistemas_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_equipos`
--

INSERT INTO `tipo_equipos` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `sistemas_codigo`) VALUES
('CODTEQ001', 'CAMARA DAI', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS006'),
('CODTEQ002', 'CAMARAS', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS005'),
('CODTEQ003', 'PVM', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS002'),
('CODTEQ004', 'POSTE SOS', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS007'),
('CODTEQ005', 'MEGAFONO', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS008'),
('CODTEQ006', 'ASPA/FLECHA', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS002'),
('CODTEQ007', 'VELOCIDAD', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS002'),
('CODTEQ008', 'SAM', '1', '2017-12-10 15:35:52', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS002'),
('CODTEQ009', 'GALIBO', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS003'),
('CODTEQ010', 'BARRERA VEHICULAR', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS004'),
('CODTEQ011', 'SEMAFORO', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS004'),
('CODTEQ012', 'ESPIRA', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS012'),
('CODTEQ013', 'LUMINARIA', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS013'),
('CODTEQ014', 'VENTILADOR', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS011'),
('CODTEQ015', 'EPI', '1', '2017-12-10 15:35:53', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSIS014');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_incidente`
--

CREATE TABLE `tipo_incidente` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_incidente`
--

INSERT INTO `tipo_incidente` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODTIN001', 'PRE-EMERGENCIA', '1', '2017-12-10 16:20:51', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTIN002', 'EMERG. NIVEL 0 ', '1', '2017-12-10 16:20:51', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTIN003', 'EMERG. NIVEL 1', '1', '2017-12-10 16:20:51', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTIN004', 'EMERG. NIVEL 2', '1', '2017-12-10 16:20:51', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE `tipo_vehiculo` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODTVE001', 'CAMIONETA', '1', '2017-12-10 16:27:18', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTVE002', 'GRUA', '1', '2017-12-10 16:27:18', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTVE003', 'VAN', '1', '2017-12-10 16:27:18', 'rvizarreta', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODTUR001', 'MAÑANA', '1', '2017-12-10 16:25:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTUR002', 'TARDE', '1', '2017-12-10 16:25:15', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODTUR003', 'NOCHE', '1', '2017-12-10 16:25:15', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODUBI001', 'GALERIA', '1', '2017-12-10 16:24:42', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODUBI002', 'TUNEL', '1', '2017-12-10 16:24:42', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODUBI003', 'EXTERIOR', '1', '2017-12-10 16:24:43', 'rvizarreta', '0000-00-00 00:00:00', ''),
('CODUBI004', 'REFUGIO', '1', '2017-12-10 16:24:43', 'rvizarreta', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` varchar(9) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `clave` varchar(200) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `tipo` enum('user','admin') NOT NULL DEFAULT 'user',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `usuario`, `nombres`, `apellidos`, `clave`, `estado`, `tipo`, `fregistro`, `usercreate`, `frupdate`, `userupdate`) VALUES
('CODPER001', 'raul', 'RAUL', 'VIZARRETA', 'e10adc3949ba59abbe56e057f20f883e', '1', 'admin', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER002', 'etorre', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER003', 'jponce', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER004', 'jjanampa', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER005', 'ncerron', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER006', 'asalazar', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER007', 'jarpasi', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER008', 'whuauya', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:03', 'raul', NULL, ''),
('CODPER009', 'dherreros', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER010', 'jbarrios', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER011', 'bgranda', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER012', 'eabarca', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER013', 'rvizarreta', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER014', 'jalcantara', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER015', 'cbriones', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, ''),
('CODPER016', 'asanmartin', '', '', '202cb962ac59075b964b07152d234b70', '1', 'user', '2017-12-10 16:07:04', 'raul', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `codigo` varchar(9) NOT NULL,
  `placa` varchar(50) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `tipo_vehiculo_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`codigo`, `placa`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `tipo_vehiculo_codigo`) VALUES
('CODVEH001', 'EGX-727', '1', '2017-12-10 16:26:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTVE001'),
('CODVEH002', 'EGX-739', '1', '2017-12-10 16:26:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTVE001'),
('CODVEH003', 'C8S-834', '1', '2017-12-10 16:26:29', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODTVE002'),
('CODVEH004', 'ECD-498', '1', '2017-12-10 16:26:29', 'rvizarreta', NULL, NULL, 'CODTVE003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `codigo` varchar(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` enum('1','0') DEFAULT '1',
  `fregistro` datetime DEFAULT NULL,
  `usercreate` varchar(100) DEFAULT NULL,
  `frupdate` datetime DEFAULT NULL,
  `userupdate` varchar(100) DEFAULT NULL,
  `sentido_codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`codigo`, `nombre`, `estado`, `fregistro`, `usercreate`, `frupdate`, `userupdate`, `sentido_codigo`) VALUES
('CODZON001', 'ZONA 1', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON002', 'ZONA 2', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON003', 'ZONA 3', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON004', 'ZONA 4', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON005', 'ZONA 5', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON006', 'ZONA 6', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON007', 'ZONA 7', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN001'),
('CODZON008', 'ZONA 1', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON009', 'ZONA 2', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON010', 'ZONA 3', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON011', 'ZONA 4', '1', '2017-12-10 16:23:24', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON012', 'ZONA 5', '1', '2017-12-10 16:23:25', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON013', 'ZONA 6', '1', '2017-12-10 16:23:25', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002'),
('CODZON014', 'ZONA 7', '1', '2017-12-10 16:23:25', 'rvizarreta', '0000-00-00 00:00:00', '', 'CODSEN002');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_acciones_tipo_equipos1_idx` (`tipo_equipos_codigo`);

--
-- Indices de la tabla `aforo`
--
ALTER TABLE `aforo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `correlativo`
--
ALTER TABLE `correlativo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_equipos_tipo_equipos1_idx` (`tipo_equipos_codigo`),
  ADD KEY `fk_equipos_zona1_idx` (`zona_codigo`),
  ADD KEY `fk_equipos_ubicacion1_idx` (`ubicacion_codigo`);

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_incidente_tipo_incidente1_idx` (`tipo_incidente_codigo`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permiso_submenu`
--
ALTER TABLE `permiso_submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permiso_submenu_submenu1_idx` (`submenu_id`),
  ADD KEY `fk_permiso_submenu_usuarios1_idx` (`usuarios_codigo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_personal_area_idx` (`area_codigo`),
  ADD KEY `fk_personal_cargo1_idx` (`cargo_codigo`);

--
-- Indices de la tabla `sentido`
--
ALTER TABLE `sentido`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_submenu_menu1_idx` (`menu_id`);

--
-- Indices de la tabla `tipo_equipos`
--
ALTER TABLE `tipo_equipos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_tipo_equipos_sistemas1_idx` (`sistemas_codigo`);

--
-- Indices de la tabla `tipo_incidente`
--
ALTER TABLE `tipo_incidente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_vehiculo_tipo_vehiculo1_idx` (`tipo_vehiculo_codigo`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_zona_sentido1_idx` (`sentido_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aforo`
--
ALTER TABLE `aforo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `correlativo`
--
ALTER TABLE `correlativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permiso_submenu`
--
ALTER TABLE `permiso_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `fk_acciones_tipo_equipos1` FOREIGN KEY (`tipo_equipos_codigo`) REFERENCES `tipo_equipos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `fk_equipos_tipo_equipos1` FOREIGN KEY (`tipo_equipos_codigo`) REFERENCES `tipo_equipos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_ubicacion1` FOREIGN KEY (`ubicacion_codigo`) REFERENCES `ubicacion` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipos_zona1` FOREIGN KEY (`zona_codigo`) REFERENCES `zona` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `fk_incidente_tipo_incidente1` FOREIGN KEY (`tipo_incidente_codigo`) REFERENCES `tipo_incidente` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permiso_submenu`
--
ALTER TABLE `permiso_submenu`
  ADD CONSTRAINT `fk_permiso_submenu_submenu1` FOREIGN KEY (`submenu_id`) REFERENCES `submenu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permiso_submenu_usuarios1` FOREIGN KEY (`usuarios_codigo`) REFERENCES `usuarios` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_area` FOREIGN KEY (`area_codigo`) REFERENCES `area` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_cargo1` FOREIGN KEY (`cargo_codigo`) REFERENCES `cargo` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `fk_submenu_menu1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_equipos`
--
ALTER TABLE `tipo_equipos`
  ADD CONSTRAINT `fk_tipo_equipos_sistemas1` FOREIGN KEY (`sistemas_codigo`) REFERENCES `sistemas` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_vehiculo_tipo_vehiculo1` FOREIGN KEY (`tipo_vehiculo_codigo`) REFERENCES `tipo_vehiculo` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zona`
--
ALTER TABLE `zona`
  ADD CONSTRAINT `fk_zona_sentido1` FOREIGN KEY (`sentido_codigo`) REFERENCES `sentido` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
