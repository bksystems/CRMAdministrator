-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2018 a las 20:28:33
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crmadministrator`
--
CREATE DATABASE IF NOT EXISTS `crmadministrator` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `crmadministrator`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `roster` int(11) NOT NULL,
  `last_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `names` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `organization_id` int(11) NOT NULL,
  `employee_position_id` int(11) NOT NULL,
  `status_employee_id` int(11) NOT NULL,
  `is_employee_system` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `roster`, `last_name`, `mother_name`, `names`, `organization_id`, `employee_position_id`, `status_employee_id`, `is_employee_system`, `created`, `modified`) VALUES
(1, 1, 'ADMIN', 'ADMIN', 'ADMIN', 12, 4, 1, 1, '2018-12-04 22:07:56', '2018-12-18 21:16:32'),
(2, 37758, 'RIZO', 'FLORES', 'JUAN CARLOS', 37, 4, 1, 1, '2018-12-04 22:26:16', '2018-12-18 21:18:20'),
(3, 74674, 'GARCIA', 'CRUZ', 'ROBERTO ALEJANDRO', 37, 7, 1, 1, '2018-12-18 22:39:24', '2018-12-18 22:39:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_positions`
--

CREATE TABLE `employee_positions` (
  `id` int(11) NOT NULL,
  `position` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `employee_positions`
--

INSERT INTO `employee_positions` (`id`, `position`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'Director Ejecutivo', 'Director Ejecutivo', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(2, 'Director', 'Director', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(3, 'Subdirector', 'Subdirector', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(4, 'Gerente', 'Gerente', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(5, 'Subgerente', 'Subgerente', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(6, 'Líder', 'Líder', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(7, 'Coordinador', 'Coordinador', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `id_unique` int(11) NOT NULL,
  `cost_center` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `organization_id` int(11) NOT NULL,
  `type_organization_id` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organizations`
--

INSERT INTO `organizations` (`id`, `id_unique`, `cost_center`, `name`, `organization_id`, `type_organization_id`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 0, 0, 'GENTERA', 0, 1, 'GENTERA', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(2, 0, 0, 'DIRECCIÓN EJECUTIVA DE VENTAS', 5, 2, 'DIRECCIÓN EJECUTIVA DE VENTAS', 1, '2018-12-17 16:55:12', '2018-12-17 16:55:12'),
(3, 0, 0, 'DIRECCIÓN NACIONAL DE VENTAS', 2, 3, 'DIRECCIÓN NACIONAL DE VENTAS', 1, '2018-12-17 23:37:46', '2018-12-17 23:37:46'),
(4, 0, 0, 'DIRECCIÓN DE VENTAS CENTRO', 3, 3, 'DIRECCIÓN DE VENTAS CENTRO', 1, '2018-12-17 23:44:32', '2018-12-17 23:44:32'),
(5, 0, 0, 'COMPARTAMOS BANCO S.A. DE C.V.', 1, 4, 'COMPARTAMOS BANCO S.A. DE C.V.', 1, '2018-12-17 23:46:35', '2018-12-17 23:46:35'),
(6, 0, 0, 'DIRECCIÓN DE VENTAS CENTRO NORTE', 3, 3, 'DIRECCIÓN DE VENTAS CENTRO NORTE', 1, '2018-12-17 23:55:32', '2018-12-17 23:55:32'),
(7, 0, 0, 'SUBDIRECCIÓN REGIONAL DE VENTAS CENTRO NORTE 01', 6, 5, 'SUBDIRECCIÓN REGIONAL DE VENTAS CENTRO NORTE 01', 1, '2018-12-17 23:56:50', '2018-12-17 23:56:50'),
(8, 0, 0, 'DIRECCIÓN DE VENTAS SURESTE', 3, 3, 'DIRECCIÓN DE VENTAS SURESTE', 1, '2018-12-18 18:20:09', '2018-12-18 18:20:09'),
(9, 0, 0, 'DIRECCIÓN DE VENTAS METRO', 3, 3, 'DIRECCIÓN DE VENTAS METRO', 1, '2018-12-18 18:20:44', '2018-12-18 18:20:44'),
(10, 0, 0, 'DIRECCIÓN DE VENTAS NORESTE', 3, 3, 'DIRECCIÓN DE VENTAS NORESTE', 1, '2018-12-18 18:21:06', '2018-12-18 18:37:48'),
(11, 0, 0, 'DIRECCIÓN DE VENTAS OCCIDENTE', 3, 3, 'DIRECCIÓN DE VENTAS OCCIDENTE', 1, '2018-12-18 18:21:42', '2018-12-18 18:38:03'),
(12, 0, 0, 'DIRECCIÓN EJECUTIVA DE TECNOLOGÍAS DE LA INFORMACIÓN', 1, 2, 'DIRECCIÓN EJECUTIVA DE TECNOLOGÍAS DE LA INFORMACIÓN', 1, '2018-12-18 18:30:09', '2018-12-18 18:30:09'),
(13, 0, 0, 'DIRECCIÓN EJECUTIVA DE OPERACIONES', 5, 2, 'DIRECCIÓN EJECUTIVA DE OPERACIONES', 1, '2018-12-18 18:30:40', '2018-12-18 18:30:40'),
(14, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 01', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 01', 1, '2018-11-26 17:26:34', '2018-11-26 17:28:36'),
(15, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 02', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 02', 1, '2018-11-26 17:26:53', '2018-11-26 17:28:30'),
(16, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 03', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 03', 1, '2018-11-26 17:27:05', '2018-11-26 17:28:24'),
(17, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 04', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 04', 1, '2018-11-26 17:27:18', '2018-11-26 17:28:17'),
(18, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 07', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 07', 1, '2018-11-26 17:28:08', '2018-11-26 17:28:08'),
(19, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 08', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 08', 1, '2018-11-26 17:28:59', '2018-11-26 17:28:59'),
(20, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 09', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 09', 1, '2018-11-26 17:29:10', '2018-11-26 17:29:10'),
(21, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 10', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 10', 1, '2018-11-26 17:29:33', '2018-11-26 17:29:33'),
(22, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 11', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 11', 1, '2018-11-26 17:29:59', '2018-11-26 17:29:59'),
(23, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 17', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 17', 1, '2018-11-26 17:30:09', '2018-11-26 17:30:09'),
(24, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 02', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 02', 1, '2018-11-26 20:41:59', '2018-11-26 20:41:59'),
(25, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 03', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 03', 1, '2018-11-26 20:42:10', '2018-11-26 20:42:23'),
(26, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 04', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 04', 1, '2018-11-26 20:42:37', '2018-11-26 20:42:37'),
(27, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 05', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 05', 1, '2018-11-26 20:42:56', '2018-11-26 20:42:56'),
(28, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 06', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 06', 1, '2018-11-26 20:43:10', '2018-11-26 20:43:10'),
(29, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 07', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 07', 1, '2018-11-26 20:43:23', '2018-11-26 20:43:23'),
(30, 0, 0, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 08', 6, 5, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 08', 1, '2018-11-26 20:44:07', '2018-11-26 20:44:07'),
(31, 0, 0, 'SUBDIRECCIÓN REGIONAL SURESTE 11', 8, 5, 'SUBDIRECCIÓN REGIONAL SURESTE 11', 1, '2018-11-26 20:44:36', '2018-11-26 20:44:36'),
(32, 0, 0, 'SUBDIRECCIÓN REGIONAL METRO 16', 9, 5, 'SUBDIRECCIÓN REGIONAL METRO 16\r\n', 1, '2018-11-28 22:33:48', '2018-11-28 22:33:48'),
(33, 0, 0, 'SUBDIRECCIÓN REGIONAL NORESTE 06', 10, 5, 'SUBDIRECCIÓN REGIONAL NORESTE 06\r\n', 1, '2018-11-28 22:35:32', '2018-11-28 22:35:32'),
(34, 0, 0, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 02', 11, 5, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 02\r\n', 1, '2018-11-28 22:36:58', '2018-11-28 22:36:58'),
(35, 0, 0, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 07', 11, 5, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 07\r\n', 1, '2018-11-28 22:37:08', '2018-11-28 22:37:08'),
(36, 0, 0, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 13', 11, 5, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 13\r\n', 1, '2018-11-28 22:37:15', '2018-11-28 22:37:15'),
(37, 0, 0, 'SUBDIRECCIÓN DE EXCELENCIA OPERATIVA', 13, 7, 'SUBDIRECCIÓN DE EXCELENCIA OPERATIVA', 1, '2018-11-29 01:27:54', '2018-11-29 01:27:54'),
(38, 3390, 1200003390, 'TOLUCA ORIENTE', 15, 6, 'OFICINA DE SERVICIOS DE TOLUCA ORIENTE', 1, NULL, NULL),
(39, 3954, 1200003954, 'ALMOLOYA', 15, 6, 'OFICINA DE SERVICIOS DE ALMOLOYA', 1, NULL, NULL),
(40, 4098, 1200004098, 'ACOLMAN', 29, 6, 'OFICINA DE SERVICIOS DE ACOLMAN', 1, NULL, NULL),
(41, 4622, 1200004622, 'AEROPUERTO DF', 20, 6, 'OFICINA DE SERVICIOS DE AEROPUERTO DF', 1, NULL, NULL),
(42, 3652, 1200003652, 'ALVARO OBREGON', 19, 6, 'OFICINA DE SERVICIOS DE ALVARO OBREGON', 1, NULL, NULL),
(43, 4167, 1200004167, 'ARAGÓN', 19, 6, 'OFICINA DE SERVICIOS DE ARAGÓN', 1, NULL, NULL),
(44, 4601, 1200004601, 'ARBOLEDAS', 26, 6, 'OFICINA DE SERVICIOS DE ARBOLEDAS', 1, NULL, NULL),
(45, 243, 1200000243, 'ATLACOMULCO', 7, 6, 'OFICINA DE SERVICIOS DE ATLACOMULCO', 1, NULL, NULL),
(46, 2779, 1200002779, 'AZCAPOTZALCO', 19, 6, 'OFICINA DE SERVICIOS DE AZCAPOTZALCO', 1, NULL, NULL),
(47, 2680, 1200002680, 'BENITO JUAREZ', 21, 6, 'OFICINA DE SERVICIOS DE BENITO JUAREZ', 1, NULL, NULL),
(48, 4094, 1200004094, 'CHICOLOAPAN', 22, 6, 'OFICINA DE SERVICIOS DE CHICOLOAPAN', 1, NULL, NULL),
(49, 270, 1200000270, 'IXTLAHUACA', 7, 6, 'OFICINA DE SERVICIOS DE IXTLAHUACA', 1, NULL, NULL),
(50, 901, 1200000901, 'TEMASCALCINGO', 7, 6, 'OFICINA DE SERVICIOS DE TEMASCALCINGO', 1, NULL, NULL),
(51, 3851, 1200003851, 'TEMOAYA', 7, 6, 'OFICINA DE SERVICIOS DE TEMOAYA', 1, NULL, NULL),
(52, 5617, 1200005617, 'VILLA DEL CARBÓN', 7, 6, 'OFICINA DE SERVICIOS DE VILLA DEL CARBÓN', 1, NULL, NULL),
(53, 4088, 1200004088, 'HUEHUETOCA', 24, 6, 'OFICINA DE SERVICIOS DE HUEHUETOCA', 1, NULL, NULL),
(54, 3800, 1200003800, 'JILOTEPEC', 24, 6, 'OFICINA DE SERVICIOS DE JILOTEPEC', 1, NULL, NULL),
(55, 846, 1200000846, 'CUAUTITLÁN', 25, 6, 'OFICINA DE SERVICIOS DE CUAUTITLÁN', 1, NULL, NULL),
(56, 4607, 1200004607, 'IZCALLI', 25, 6, 'OFICINA DE SERVICIOS DE IZCALLI', 1, NULL, NULL),
(57, 3681, 1200003681, 'TEPOTZOTLÁN', 25, 6, 'OFICINA DE SERVICIOS DE TEPOTZOTLÁN', 1, NULL, NULL),
(58, 6904, 1200006904, 'TULTEPEC', 25, 6, 'OFICINA DE SERVICIOS DE TULTEPEC', 1, NULL, NULL),
(59, 3389, 1200003389, 'NICOLAS ROMERO', 26, 6, 'OFICINA DE SERVICIOS DE NICOLAS ROMERO', 1, NULL, NULL),
(60, 167, 1200000167, 'TLALNEPANTLA', 26, 6, 'OFICINA DE SERVICIOS DE TLALNEPANTLA', 1, NULL, NULL),
(61, 4505, 1200004505, 'TULTITLAN', 26, 6, 'OFICINA DE SERVICIOS DE TULTITLAN', 1, NULL, NULL),
(62, 6905, 1200006905, 'TEOLOYUCAN', 27, 6, 'OFICINA DE SERVICIOS DE TEOLOYUCAN', 1, NULL, NULL),
(63, 1989, 1200001989, 'ZUMPANGO', 27, 6, 'OFICINA DE SERVICIOS DE ZUMPANGO', 1, NULL, NULL),
(64, 4657, 1200004657, 'ZUMPANGO SUR', 27, 6, 'OFICINA DE SERVICIOS DE ZUMPANGO SUR', 1, NULL, NULL),
(65, 642, 1200000642, 'ECATEPEC', 28, 6, 'OFICINA DE SERVICIOS DE ECATEPEC', 1, NULL, NULL),
(66, 4600, 1200004600, 'ECATEPEC SUR', 28, 6, 'OFICINA DE SERVICIOS DE ECATEPEC SUR', 1, NULL, NULL),
(67, 5560, 1200005560, 'XALOSTOC MÉXICO', 28, 6, 'OFICINA DE SERVICIOS DE XALOSTOC MÉXICO', 1, NULL, NULL),
(68, 2993, 1200002993, 'CHICONCUAC', 29, 6, 'OFICINA DE SERVICIOS DE CHICONCUAC', 1, NULL, NULL),
(69, 234, 1200000234, 'TEXCOCO', 29, 6, 'OFICINA DE SERVICIOS DE TEXCOCO', 1, NULL, NULL),
(70, 4093, 1200004093, 'COACALCO', 30, 6, 'OFICINA DE SERVICIOS DE COACALCO', 1, NULL, NULL),
(71, 4633, 1200004633, 'OJO DE AGUA', 30, 6, 'OFICINA DE SERVICIOS DE OJO DE AGUA', 1, NULL, NULL),
(72, 4008, 1200004008, 'TECÁMAC', 30, 6, 'OFICINA DE SERVICIOS DE TECÁMAC', 1, NULL, NULL),
(73, 3857, 1200003857, 'TEOTIHUACÁN', 30, 6, 'OFICINA DE SERVICIOS DE TEOTIHUACÁN', 1, NULL, NULL),
(74, 5277, 1200005277, 'SAN JOSE DEL RINCON', 14, 6, 'OFICINA DE SERVICIOS DE SAN JOSE DEL RINCON', 1, NULL, NULL),
(75, 4038, 1200004038, 'VILLA VICTORIA', 15, 6, 'OFICINA DE SERVICIOS DE VILLA VICTORIA', 1, NULL, NULL),
(76, 1039, 1200001039, 'ZINACANTEPEC', 15, 6, 'OFICINA DE SERVICIOS DE ZINACANTEPEC', 1, NULL, NULL),
(77, 1977, 1200001977, 'SAN MATEO ATENCO', 16, 6, 'OFICINA DE SERVICIOS DE SAN MATEO ATENCO', 1, NULL, NULL),
(78, 242, 1200000242, 'TOLUCA', 16, 6, 'OFICINA DE SERVICIOS DE TOLUCA', 1, NULL, NULL),
(79, 3006, 1200003006, 'TOLUCA CENTRO', 14, 6, 'OFICINA DE SERVICIOS DE TOLUCA CENTRO', 1, NULL, NULL),
(80, 884, 1200000884, 'VILLA CUAUHTEMOC', 25, 6, 'OFICINA DE SERVICIOS DE VILLA CUAUHTEMOC', 1, NULL, NULL),
(81, 5257, 1200005257, 'IXTAPAN DE LA SAL', 17, 6, 'OFICINA DE SERVICIOS DE IXTAPAN DE LA SAL', 1, NULL, NULL),
(82, 3946, 1200003946, 'METEPEC', 17, 6, 'OFICINA DE SERVICIOS DE METEPEC', 1, NULL, NULL),
(83, 1687, 1200001687, 'SANTIAGO TIANGUISTENCO', 17, 6, 'OFICINA DE SERVICIOS DE SANTIAGO TIANGUISTENCO', 1, NULL, NULL),
(84, 164, 1200000164, 'TENANCINGO', 17, 6, 'OFICINA DE SERVICIOS DE TENANCINGO', 1, NULL, NULL),
(85, 3505, 1200003505, 'HUIXQUILUCAN', 18, 6, 'OFICINA DE SERVICIOS DE HUIXQUILUCAN', 1, NULL, NULL),
(86, 4151, 1200004151, 'NAUCALPAN DE JUAREZ', 18, 6, 'OFICINA DE SERVICIOS DE NAUCALPAN DE JUAREZ', 1, NULL, NULL),
(87, 6024, 1200006024, 'SATELITE', 18, 6, 'OFICINA DE SERVICIOS DE SATELITE', 1, NULL, NULL),
(88, 3549, 1200003549, 'INSURGENTES', 19, 6, 'OFICINA DE SERVICIOS DE INSURGENTES', 1, NULL, NULL),
(89, 844, 1200000844, 'INDIOS VERDES', 20, 6, 'OFICINA DE SERVICIOS DE INDIOS VERDES', 1, NULL, NULL),
(90, 6078, 1200006078, 'PANTITLAN', 20, 6, 'OFICINA DE SERVICIOS DE PANTITLAN', 1, NULL, NULL),
(91, 236, 1200000236, 'NEZAHUALCOYOTL', 21, 6, 'OFICINA DE SERVICIOS DE NEZAHUALCOYOTL', 1, NULL, NULL),
(92, 4203, 1200004203, 'SAN SEBASTIÁN', 21, 6, 'OFICINA DE SERVICIOS DE SAN SEBASTIÁN', 1, NULL, NULL),
(93, 230, 1200000230, 'CHIMALHUACÁN', 23, 6, 'OFICINA DE SERVICIOS DE CHIMALHUACÁN', 1, NULL, NULL),
(94, 3798, 1200003798, 'PEÑON', 23, 6, 'OFICINA DE SERVICIOS DE PEÑON', 1, NULL, NULL),
(95, 6257, 1200006257, 'TEJEDORES', 23, 6, 'OFICINA DE SERVICIOS DE TEJEDORES', 1, NULL, NULL),
(96, 4636, 1200004636, 'LA JOYA', 32, 6, 'OFICINA DE SERVICIOS DE LA JOYA', 1, NULL, NULL),
(97, 1988, 1200001988, 'ESCOBEDO', 33, 6, 'OFICINA DE SERVICIOS DE ESCOBEDO', 1, NULL, NULL),
(98, 3680, 1200003680, 'SAN MIGUEL DE ALLENDE', 34, 6, 'OFICINA DE SERVICIOS DE SAN MIGUEL DE ALLENDE', 1, NULL, NULL),
(99, 2441, 1200002441, 'DOLORES HIDALGO', 35, 6, 'OFICINA DE SERVICIOS DE DOLORES HIDALGO', 1, NULL, NULL),
(100, 1707, 1200001707, 'GUANAJUATO', 35, 6, 'OFICINA DE SERVICIOS DE GUANAJUATO', 1, NULL, NULL),
(101, 2439, 1200002439, 'IRAPUATO SUR', 35, 6, 'OFICINA DE SERVICIOS DE IRAPUATO SUR', 1, NULL, NULL),
(102, 1723, 1200001723, 'SILAO', 35, 6, 'OFICINA DE SERVICIOS DE SILAO', 1, NULL, NULL),
(103, 3961, 1200003961, 'LEON HILAMAS', 36, 6, 'OFICINA DE SERVICIOS DE LEON HILAMAS', 1, NULL, NULL),
(104, 3041, 1200003041, 'LEON NORTE', 36, 6, 'OFICINA DE SERVICIOS DE LEON NORTE', 1, NULL, NULL),
(105, 4062, 1200004062, 'ROMITA', 36, 6, 'OFICINA DE SERVICIOS DE ROMITA', 1, NULL, NULL),
(106, 2442, 1200002442, 'SAN FRANCISCO DEL RINCÓN', 36, 6, 'OFICINA DE SERVICIOS DE SAN FRANCISCO DEL RINCÓN', 1, NULL, NULL),
(107, 2282, 1200002282, 'TORRES LANDA', 36, 6, 'OFICINA DE SERVICIOS DE TORRES LANDA', 1, NULL, NULL),
(108, 284, 1200000284, 'COMITAN', 31, 6, 'OFICINA DE SERVICIOS DE COMITAN', 1, NULL, NULL),
(109, 1, 1, 'DIRECCIÓN OPERACIONES FRONT OFFICES', 13, 3, 'DIRECCIÓN OPERACIONES FRONT OFFICES', 1, '2018-12-18 22:43:30', '2018-12-18 22:43:30'),
(110, 2, 2, 'YASTAS S.A. DE C.V.', 1, 4, 'YASTAS', 1, '2018-12-19 21:09:48', '2018-12-19 21:09:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `controller` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `action` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `controller`, `action`, `enabled`, `description`, `created`, `modified`) VALUES
(1, 'Pages', 'display', 1, 'Pages display', '2018-12-19 22:03:45', '2018-12-19 22:03:45'),
(2, 'Permissions', 'add', 1, 'Permissions - Add', '2018-12-19 22:04:25', '2018-12-19 22:04:25'),
(3, 'Permissions', 'edit', 1, 'Permissions - Edit', '2018-12-19 22:04:57', '2018-12-19 22:04:57'),
(4, 'Permissions', 'delete', 1, 'Permissions - delete', '2018-12-19 22:05:19', '2018-12-19 22:05:19'),
(5, 'Permissions', 'view', 1, 'Permissions - view', '2018-12-19 22:05:31', '2018-12-19 22:05:31'),
(6, 'Users', 'index', 1, 'Users - index', NULL, NULL),
(7, 'Users', 'add', 1, 'Users - add', NULL, NULL),
(8, 'Users', 'edit', 1, 'Users - edit', NULL, NULL),
(9, 'Users', 'delete', 1, 'Users - delete', NULL, NULL),
(10, 'Users', 'view', 1, 'Users - view', NULL, NULL),
(11, 'Employees', 'index', 1, 'Employees - index', NULL, NULL),
(12, 'Employees', 'add', 1, 'Employees - add', NULL, NULL),
(13, 'Employees', 'edit', 1, 'Employees - edit', NULL, NULL),
(14, 'Employees', 'delete', 1, 'Employees - delete', NULL, NULL),
(15, 'Employees', 'view', 1, 'Employees - view', NULL, NULL),
(16, 'EmployeePosition', 'index', 1, 'EmployeePosition - index', NULL, NULL),
(17, 'EmployeePosition', 'add', 1, 'EmployeePosition - add', NULL, NULL),
(18, 'EmployeePosition', 'edit', 1, 'EmployeePosition - edit', NULL, NULL),
(19, 'EmployeePosition', 'delete', 1, 'EmployeePosition - delete', NULL, NULL),
(20, 'EmployeePosition', 'view', 1, 'EmployeePosition - view', NULL, NULL),
(21, 'StatusEmployees', 'index', 1, 'StatusEmployees - index', NULL, NULL),
(22, 'StatusEmployees', 'add', 1, 'StatusEmployees - add', NULL, NULL),
(23, 'StatusEmployees', 'edit', 1, 'StatusEmployees - edit', NULL, NULL),
(24, 'StatusEmployees', 'delete', 1, 'StatusEmployees - delete', NULL, NULL),
(25, 'StatusEmployees', 'view', 1, 'StatusEmployees - view', NULL, NULL),
(26, 'StatusUsers', 'index', 1, 'StatusUsers - index', NULL, NULL),
(27, 'StatusUsers', 'add', 1, 'StatusUsers - add', NULL, NULL),
(28, 'StatusUsers', 'edit', 1, 'StatusUsers - edit', NULL, NULL),
(29, 'StatusUsers', 'delete', 1, 'StatusUsers - delete', NULL, NULL),
(30, 'StatusUsers', 'view', 1, 'StatusUsers - view', NULL, NULL),
(31, 'TypeOrganizations', 'index', 1, 'TypeOrganizations - index', NULL, NULL),
(32, 'TypeOrganizations', 'add', 1, 'TypeOrganizations - add', NULL, NULL),
(33, 'TypeOrganizations', 'edit', 1, 'TypeOrganizations - edit', NULL, NULL),
(34, 'TypeOrganizations', 'delete', 1, 'TypeOrganizations - delete', NULL, NULL),
(35, 'TypeOrganizations', 'view', 1, 'TypeOrganizations - view', NULL, NULL),
(36, 'Rols', 'index', 1, 'Rols - index', NULL, NULL),
(37, 'Rols', 'add', 1, 'Rols - add', NULL, NULL),
(38, 'Rols', 'edit', 1, 'Rols - edit', NULL, NULL),
(39, 'Rols', 'delete', 1, 'Rols - delete', NULL, NULL),
(40, 'Rols', 'view', 1, 'Rols - view', NULL, NULL),
(41, 'RolsPermissions', 'index', 1, 'RolsPermissions - index', NULL, NULL),
(42, 'RolsPermissions', 'add', 1, 'RolsPermissions - add', NULL, NULL),
(43, 'RolsPermissions', 'edit', 1, 'RolsPermissions - edit', NULL, NULL),
(44, 'RolsPermissions', 'delete', 1, 'RolsPermissions - delete', NULL, NULL),
(45, 'RolsPermissions', 'view', 1, 'RolsPermissions - view', NULL, NULL),
(46, 'Organizations', 'index', 1, 'Organizations - index', NULL, NULL),
(47, 'Organizations', 'add', 1, 'Organizations - add', NULL, NULL),
(48, 'Organizations', 'edit', 1, 'Organizations - edit', NULL, NULL),
(49, 'Organizations', 'delete', 1, 'Organizations - delete', NULL, NULL),
(50, 'Organizations', 'view', 1, 'Organizations - view', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `name`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'SAdmin', 'Super administrador', 1, '2018-12-04 22:45:38', '2018-12-04 22:45:38'),
(2, 'Admin', 'Administrador base del sistema', 1, '2018-12-04 22:45:50', '2018-12-04 22:45:50'),
(3, 'Genesis CEAS', 'Genesis CEASS', 1, '2018-12-20 18:25:32', '2018-12-20 18:25:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols_permissions`
--

CREATE TABLE `rols_permissions` (
  `id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rols_permissions`
--

INSERT INTO `rols_permissions` (`id`, `rol_id`, `permission_id`, `created`, `modified`) VALUES
(1, 2, 1, '2018-12-20 15:29:47', '2018-12-20 15:29:47'),
(4, 3, 1, '2018-12-20 18:28:38', '2018-12-20 18:28:38'),
(5, 3, 11, '2018-12-20 18:42:11', '2018-12-20 18:42:11'),
(6, 3, 12, '2018-12-20 18:43:27', '2018-12-20 18:43:27'),
(7, 3, 13, '2018-12-20 18:43:39', '2018-12-20 18:43:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_employees`
--

CREATE TABLE `status_employees` (
  `id` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `status_employees`
--

INSERT INTO `status_employees` (`id`, `status`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'ALTA', 'ALTA', 1, '2018-11-29 01:28:49', '2018-11-29 01:28:49'),
(2, 'BAJA', 'BAJA', 1, '2018-11-29 01:29:04', '2018-11-29 01:29:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_users`
--

CREATE TABLE `status_users` (
  `id` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `status_users`
--

INSERT INTO `status_users` (`id`, `status`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'Activo', 'Activo', 1, '2018-12-04 22:46:26', '2018-12-04 22:46:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `street_activities`
--

CREATE TABLE `street_activities` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `type_street_activity` int(11) NOT NULL,
  `message` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_organizations`
--

CREATE TABLE `type_organizations` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modfied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `type_organizations`
--

INSERT INTO `type_organizations` (`id`, `type`, `description`, `enabled`, `created`, `modfied`) VALUES
(1, 'Organización Principal', 'Organización Principal', 1, '2018-11-26 21:25:52', '2018-11-26 21:25:52'),
(2, 'Dirección Ejecutiva', 'Dirección Ejecutiva', 1, '2018-12-17 23:28:04', '2018-12-17 23:27:00'),
(3, 'Dirección', 'Dirección', 1, '2018-12-17 23:38:15', '2018-12-17 23:38:00'),
(4, 'Organización Secundaria', 'Organización Secundaria', 1, '2018-12-17 23:45:31', '2018-12-17 23:45:00'),
(5, 'Subdirección Regional Ventas', 'Subdirección Regional Ventas', 1, '2018-12-17 23:56:09', '2018-12-17 23:55:00'),
(6, 'Oficina de servicios', 'Oficina de servicios', 1, '2018-12-18 19:24:07', '2018-12-18 19:23:00'),
(7, 'Subdirección', 'Subdirección', 1, '2018-12-18 22:43:57', '2018-12-18 22:43:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_street_activities`
--

CREATE TABLE `type_street_activities` (
  `id` int(11) NOT NULL,
  `type` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `type_street_activities`
--

INSERT INTO `type_street_activities` (`id`, `type`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'Visita en oficina', 'Visita en oficina', 1, '2018-12-20 19:14:13', '2018-12-20 19:14:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `status_user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `employee_id`, `username`, `password`, `rol_id`, `status_user_id`, `created`, `modified`) VALUES
(1, 1, 'root', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 1, 1, '2018-12-05 20:47:40', '2018-12-11 18:43:21'),
(2, 2, 'JURIZO', '13894c2bc6925c1657af3b7f1f002a8a5298fa2a12ea8ef3064c307a261915a7', 2, 1, '2018-12-05 20:56:01', '2018-12-11 18:25:01'),
(3, 3, 'roagarcia', 'a53e82198624ff46352f7b20830c49c41d7712ac2156e92b125dc3463ca33c94', 3, 1, '2018-12-18 22:56:17', '2018-12-20 18:25:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roster` (`roster`);

--
-- Indices de la tabla `employee_positions`
--
ALTER TABLE `employee_positions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indices de la tabla `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols_permissions`
--
ALTER TABLE `rols_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status_employees`
--
ALTER TABLE `status_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indices de la tabla `status_users`
--
ALTER TABLE `status_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `street_activities`
--
ALTER TABLE `street_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_organizations`
--
ALTER TABLE `type_organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_street_activities`
--
ALTER TABLE `type_street_activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `employee_positions`
--
ALTER TABLE `employee_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rols_permissions`
--
ALTER TABLE `rols_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `status_employees`
--
ALTER TABLE `status_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `status_users`
--
ALTER TABLE `status_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `street_activities`
--
ALTER TABLE `street_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_organizations`
--
ALTER TABLE `type_organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `type_street_activities`
--
ALTER TABLE `type_street_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
