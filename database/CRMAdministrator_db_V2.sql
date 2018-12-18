-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2018 a las 01:05:58
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
  `organization_office_id` int(11) NOT NULL,
  `employee_position_id` int(11) NOT NULL,
  `status_employee_id` int(11) NOT NULL,
  `is_employee_system` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `roster`, `last_name`, `mother_name`, `names`, `organization_office_id`, `employee_position_id`, `status_employee_id`, `is_employee_system`, `created`, `modified`) VALUES
(1, 1, 'ADMIN', 'ADMIN', 'ADMIN', 73, 1, 1, 1, '2018-12-04 22:07:56', '2018-12-04 22:07:56'),
(2, 37758, 'RIZO', 'FLORES', 'JUAN CARLOS', 72, 1, 1, 1, '2018-12-04 22:26:16', '2018-12-04 22:33:20');

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

INSERT INTO `organizations` (`id`, `name`, `organization_id`, `type_organization_id`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'GENTERA', 0, 1, 'GENTERA', 1, '2018-11-29 01:26:35', '2018-11-29 01:26:35'),
(2, 'Dirección Ejecutiva Ventas', 5, 2, 'Dirección ejecutiva de ventas', 1, '2018-12-17 16:55:12', '2018-12-17 16:55:12'),
(3, 'Dirección Nacional de Ventas', 2, 3, 'Dirección Nacional de Ventas', 1, '2018-12-17 23:37:46', '2018-12-17 23:37:46'),
(4, 'Dirección De Ventas Centro', 3, 3, 'Dirección De Ventas Centro', 1, '2018-12-17 23:44:32', '2018-12-17 23:44:32'),
(5, 'COMPARTAMOS BANCO S.A. DE C.V.', 1, 4, 'COMPARTAMOS BANCO S.A. DE C.V.', 1, '2018-12-17 23:46:35', '2018-12-17 23:46:35'),
(6, 'Dirección de ventas Centro Norte', 3, 3, 'Dirección de ventas Centro Norte', 1, '2018-12-17 23:55:32', '2018-12-17 23:55:32'),
(7, 'Subdirección Regional Ventas Centro Norte 01', 6, 5, 'Subdirección Regional Ventas Centro Norte 01', 1, '2018-12-17 23:56:50', '2018-12-17 23:56:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organization_directions`
--

CREATE TABLE `organization_directions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organization_directions`
--

INSERT INTO `organization_directions` (`id`, `name`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'DIRECCIÓN DE VENTAS CENTRO', 'DIRECCIÓN VENTAS CENTRO', 1, '2018-11-26 16:54:52', '2018-11-26 17:24:54'),
(2, 'DIRECCIÓN DE VENTAS CENTRO NORTE', 'DIRECCIÓN DE VENTAS CENTRO NORTE', 1, '2018-11-26 17:24:45', '2018-11-26 17:25:01'),
(3, 'DIRECCIÓN DE VENTAS SURESTE', 'DIRECCIÓN DE VENTAS SURESTE', 1, '2018-11-26 17:25:18', '2018-11-26 17:25:18'),
(4, 'DIRECCIÓN DE VENTAS METRO', 'DIRECCIÓN DE VENTAS METRO', 1, '2018-11-26 17:25:36', '2018-11-26 17:25:36'),
(5, 'DIRECCIÓN DE VENTAS NORESTE', 'DIRECCIÓN DE VENTAS NORESTE', 1, '2018-11-28 22:35:16', '2018-11-28 22:35:16'),
(6, 'DIRECCIÓN DE VENTAS OCCIDENTE', 'DIRECCIÓN DE VENTAS OCCIDENTE', 1, '2018-11-28 22:36:45', '2018-11-28 22:36:45'),
(7, 'DIRECCIÓN GENERAL DE OPERACIONES', 'DIRECCIÓN GENERAL DE OPERACIONES', 1, '2018-11-29 01:27:17', '2018-11-29 01:27:17'),
(8, 'DIRECCIÓN GENERAL DE TECNOLOGIA', 'DIRECCIÓN GENERAL DE TECNOLOGIA', 1, '2018-11-30 15:09:16', '2018-11-30 15:09:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organization_offices`
--

CREATE TABLE `organization_offices` (
  `id` int(11) NOT NULL,
  `cost_center` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `organization_subdirection_id` int(11) NOT NULL,
  `organization_type_id` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organization_offices`
--

INSERT INTO `organization_offices` (`id`, `cost_center`, `name`, `organization_subdirection_id`, `organization_type_id`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 3390, 'TOLUCA ORIENTE', 2, 1, 'OFICINA DE SERVICIO TOLUCA ORIENTE', 1, '2018-11-27 18:51:31', '2018-11-28 20:05:18'),
(2, 3954, 'ALMOLOYA', 2, 1, 'OFICINA DE SERVICIO DE ALMOLOYA', 1, '2018-11-27 19:29:47', '2018-11-28 20:05:40'),
(3, 4098, 'ACOLMAN', 17, 1, 'OS ACOLMAN', 1, '2018-11-28 20:46:09', '2018-11-28 20:46:09'),
(4, 4622, 'AEROPUERTO DF', 7, 1, 'AEROPUERTO DF', 1, '2018-11-28 20:46:43', '2018-11-28 20:46:43'),
(5, 3652, 'ALVARO OBREGON', 6, 1, 'ALVARO OBREGON\r\n', 1, '2018-11-28 20:47:05', '2018-11-28 20:47:05'),
(6, 4167, 'ARAGÓN', 6, 1, 'ARAGÓN', 1, '2018-11-28 20:47:36', '2018-11-28 20:47:36'),
(7, 4601, 'ARBOLEDAS', 14, 1, 'ARBOLEDAS\r\n', 1, '2018-11-28 20:48:11', '2018-11-28 20:48:11'),
(8, 243, 'ATLACOMULCO', 11, 1, 'ATLACOMULCO\r\n', 1, '2018-11-28 20:48:30', '2018-11-28 20:48:30'),
(9, 2779, 'AZCAPOTZALCO', 6, 1, 'AZCAPOTZALCO', 1, '2018-11-28 20:48:56', '2018-11-28 20:48:56'),
(10, 2680, 'BENITO JUAREZ', 8, 1, 'BENITO JUAREZ\r\n', 1, '2018-11-28 20:49:14', '2018-11-28 20:49:14'),
(11, 4094, 'CHICOLOAPAN', 9, 1, 'CHICOLOAPAN\r\n', 1, '2018-11-28 20:49:28', '2018-11-28 20:49:28'),
(12, 270, 'IXTLAHUACA', 11, 1, 'IXTLAHUACA\r\n', 1, '2018-11-28 20:50:11', '2018-11-28 20:50:11'),
(13, 901, 'TEMASCALCINGO', 11, 1, 'TEMASCALCINGO\r\n', 1, '2018-11-28 20:50:25', '2018-11-28 20:50:25'),
(14, 3851, 'TEMOAYA', 11, 1, 'TEMOAYA\r\n', 1, '2018-11-28 20:50:39', '2018-11-28 20:50:39'),
(15, 5617, 'VILLA DEL CARBÓN', 11, 1, 'VILLA DEL CARBÓN', 1, '2018-11-28 20:50:58', '2018-11-28 20:50:58'),
(16, 4088, 'HUEHUETOCA', 12, 1, 'HUEHUETOCA\r\n', 1, '2018-11-28 20:52:13', '2018-11-28 20:52:13'),
(17, 3800, 'JILOTEPEC', 12, 1, 'JILOTEPEC\r\n', 1, '2018-11-28 20:52:27', '2018-11-28 20:52:27'),
(18, 846, 'CUAUTITLÁN', 13, 1, 'CUAUTITLÁN\r\n', 1, '2018-11-28 20:52:56', '2018-11-28 20:52:56'),
(19, 4607, 'IZCALLI', 13, 1, 'IZCALLI\r\n', 0, '2018-11-28 20:53:10', '2018-11-28 20:53:10'),
(20, 3681, 'TEPOTZOTLÁN', 13, 1, 'TEPOTZOTLÁN\r\n', 1, '2018-11-28 20:53:26', '2018-11-28 20:53:26'),
(21, 6904, 'TULTEPEC', 13, 1, 'TULTEPEC\r\n', 1, '2018-11-28 20:53:44', '2018-11-28 20:53:44'),
(22, 3389, 'NICOLAS ROMERO', 14, 1, 'NICOLAS ROMERO', 1, '2018-11-28 20:54:46', '2018-11-28 20:54:46'),
(23, 167, 'TLALNEPANTLA', 14, 1, 'TLALNEPANTLA\r\n', 1, '2018-11-28 20:55:03', '2018-11-28 20:55:03'),
(24, 4505, 'TULTITLAN', 14, 1, 'TULTITLAN\r\n', 1, '2018-11-28 20:55:16', '2018-11-28 20:55:16'),
(25, 6905, 'TEOLOYUCAN', 15, 1, 'TEOLOYUCAN\r\n', 1, '2018-11-28 20:56:43', '2018-11-28 20:56:43'),
(26, 1989, 'ZUMPANGO', 15, 1, 'ZUMPANGO\r\n', 1, '2018-11-28 20:56:59', '2018-11-28 20:56:59'),
(27, 4657, 'ZUMPANGO SUR', 15, 1, 'ZUMPANGO SUR\r\n', 1, '2018-11-28 20:57:53', '2018-11-28 20:57:53'),
(28, 642, 'ECATEPEC', 16, 1, 'ECATEPEC\r\n', 1, '2018-11-28 20:58:33', '2018-11-28 20:58:33'),
(29, 4600, 'ECATEPEC SUR', 16, 1, 'ECATEPEC SUR\r\n', 1, '2018-11-28 20:59:06', '2018-11-28 20:59:06'),
(30, 5560, 'XALOSTOC MÉXICO', 16, 1, 'XALOSTOC MÉXICO\r\n', 1, '2018-11-28 22:16:11', '2018-11-28 22:16:11'),
(31, 2993, 'CHICONCUAC', 17, 1, 'CHICONCUAC\r\n', 1, '2018-11-28 22:16:45', '2018-11-28 22:16:45'),
(32, 234, 'TEXCOCO', 17, 1, 'TEXCOCO\r\n', 1, '2018-11-28 22:17:01', '2018-11-28 22:17:01'),
(33, 4093, 'COACALCO', 18, 1, 'COACALCO', 1, '2018-11-28 22:17:26', '2018-11-28 22:17:26'),
(34, 4633, 'OJO DE AGUA', 18, 1, 'OJO DE AGUA\r\n', 1, '2018-11-28 22:17:44', '2018-11-28 22:17:44'),
(35, 4008, 'TECÁMAC', 18, 1, 'TECÁMAC\r\n', 1, '2018-11-28 22:17:56', '2018-11-28 22:17:56'),
(36, 3857, 'TEOTIHUACÁN', 18, 1, 'TEOTIHUACÁN\r\n', 1, '2018-11-28 22:18:08', '2018-11-28 22:18:08'),
(37, 5277, 'SAN JOSE DEL RINCON', 1, 1, 'SAN JOSE DEL RINCON\r\n', 1, '2018-11-28 22:18:45', '2018-11-28 22:18:45'),
(38, 4038, 'VILLA VICTORIA', 2, 1, 'VILLA VICTORIA\r\n', 1, '2018-11-28 22:19:19', '2018-11-28 22:19:19'),
(39, 1039, 'ZINACANTEPEC', 2, 1, 'ZINACANTEPEC\r\n', 1, '2018-11-28 22:19:30', '2018-11-28 22:19:30'),
(40, 1977, 'SAN MATEO ATENCO', 3, 1, 'SAN MATEO ATENCO\r\n', 1, '2018-11-28 22:19:46', '2018-11-28 22:19:46'),
(41, 242, 'TOLUCA', 3, 1, 'TOLUCA\r\n', 1, '2018-11-28 22:19:59', '2018-11-28 22:19:59'),
(42, 3006, 'TOLUCA CENTRO', 1, 1, 'TOLUCA CENTRO\r\n', 1, '2018-11-28 22:20:25', '2018-11-28 22:20:25'),
(43, 884, 'VILLA CUAUHTEMOC', 13, 1, 'VILLA CUAUHTEMOC\r\n\r\n', 1, '2018-11-28 22:21:06', '2018-11-28 22:21:06'),
(44, 5257, 'IXTAPAN DE LA SAL', 4, 1, 'IXTAPAN DE LA SAL\r\n', 1, '2018-11-28 22:24:13', '2018-11-28 22:24:13'),
(45, 3946, 'METEPEC', 4, 1, 'METEPEC\r\n', 1, '2018-11-28 22:24:25', '2018-11-28 22:24:25'),
(46, 1687, 'SANTIAGO TIANGUISTENCO', 4, 1, 'SANTIAGO TIANGUISTENCO\r\n', 1, '2018-11-28 22:24:37', '2018-11-28 22:24:37'),
(47, 164, 'TENANCINGO', 4, 1, 'TENANCINGO\r\n', 1, '2018-11-28 22:24:48', '2018-11-28 22:24:48'),
(48, 3505, 'HUIXQUILUCAN', 5, 1, 'HUIXQUILUCAN\r\n', 1, '2018-11-28 22:26:09', '2018-11-28 22:26:09'),
(49, 4151, 'NAUCALPAN DE JUAREZ', 5, 1, 'NAUCALPAN DE JUAREZ\r\n', 1, '2018-11-28 22:26:22', '2018-11-28 22:26:22'),
(50, 6024, 'SATELITE', 5, 1, 'SATELITE\r\n', 1, '2018-11-28 22:26:34', '2018-11-28 22:26:34'),
(51, 3549, 'INSURGENTES', 6, 1, 'INSURGENTES\r\n', 1, '2018-11-28 22:26:54', '2018-11-28 22:26:54'),
(52, 844, 'INDIOS VERDES', 7, 1, 'INDIOS VERDES\r\n', 1, '2018-11-28 22:29:18', '2018-11-28 22:29:18'),
(53, 6078, 'PANTITLAN', 7, 1, 'PANTITLAN\r\n', 1, '2018-11-28 22:29:31', '2018-11-28 22:29:31'),
(54, 236, 'NEZAHUALCOYOTL', 8, 1, 'NEZAHUALCOYOTL\r\n', 1, '2018-11-28 22:29:51', '2018-11-28 22:29:51'),
(55, 4203, 'SAN SEBASTIÁN', 8, 1, 'SAN SEBASTIÁN\r\n', 1, '2018-11-28 22:30:07', '2018-11-28 22:30:07'),
(56, 230, 'CHIMALHUACÁN', 10, 1, 'CHIMALHUACÁN\r\n\r\n', 1, '2018-11-28 22:31:01', '2018-11-28 22:31:01'),
(57, 3798, 'PEÑON', 10, 1, 'PEÑON\r\n', 1, '2018-11-28 22:31:15', '2018-11-28 22:31:15'),
(58, 6257, 'TEJEDORES', 10, 1, 'TEJEDORES\r\n', 1, '2018-11-28 22:31:29', '2018-11-28 22:31:29'),
(59, 4636, 'LA JOYA', 20, 1, 'LA JOYA\r\n', 1, '2018-11-28 22:34:18', '2018-11-28 22:34:18'),
(60, 1988, 'ESCOBEDO', 21, 1, 'ESCOBEDO\r\n', 1, '2018-11-28 22:35:59', '2018-11-28 22:35:59'),
(61, 3680, 'SAN MIGUEL DE ALLENDE', 22, 1, 'SAN MIGUEL DE ALLENDE\r\n', 1, '2018-11-28 22:37:39', '2018-11-28 22:37:39'),
(62, 2441, 'DOLORES HIDALGO', 23, 1, 'DOLORES HIDALGO\r\n', 1, '2018-11-28 22:37:53', '2018-11-28 22:37:53'),
(63, 1707, 'GUANAJUATO', 23, 1, 'GUANAJUATO\r\n', 1, '2018-11-28 22:38:07', '2018-11-28 22:38:07'),
(64, 2439, 'IRAPUATO SUR', 23, 1, 'IRAPUATO SUR\r\n', 1, '2018-11-28 22:38:22', '2018-11-28 22:38:22'),
(65, 1723, 'SILAO', 23, 1, 'SILAO\r\n', 1, '2018-11-28 22:38:35', '2018-11-28 22:38:35'),
(66, 3961, 'LEON HILAMAS', 24, 1, 'LEON HILAMAS\r\n', 1, '2018-11-28 22:40:05', '2018-11-28 22:40:05'),
(67, 3041, 'LEON NORTE', 24, 1, 'LEON NORTE\r\n', 1, '2018-11-28 22:40:19', '2018-11-28 22:40:19'),
(68, 4062, 'ROMITA', 24, 1, 'ROMITA\r\n', 1, '2018-11-28 22:40:33', '2018-11-28 22:40:33'),
(69, 2442, 'SAN FRANCISCO DEL RINCON', 24, 1, 'SAN FRANCISCO DEL RINCON\r\n', 1, '2018-11-28 22:40:43', '2018-11-28 22:40:43'),
(70, 2282, 'TORRES LANDA', 24, 1, 'TORRES LANDA\r\n', 1, '2018-11-28 22:40:55', '2018-11-28 22:40:55'),
(71, 284, 'COMITAN', 19, 1, 'COMITAN\r\n', 1, '2018-11-28 22:41:07', '2018-11-28 22:41:07'),
(72, 1000000001, 'EXCELENCIA OPERATIVA GENESIS', 25, 1, 'EXCELENCIA OPERATIVA GENESIS', 1, '2018-11-29 01:28:31', '2018-11-29 01:28:31'),
(73, 1000000002, 'SERVICIOS DE TI', 26, 4, 'SERVICIOS DE TI', 1, '2018-11-30 15:11:54', '2018-11-30 15:11:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organization_subdirections`
--

CREATE TABLE `organization_subdirections` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `organization_direction_id` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organization_subdirections`
--

INSERT INTO `organization_subdirections` (`id`, `name`, `organization_direction_id`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'SUBDIRECCIÓN REGIONAL METRO 01', 4, 'SUBDIRECCIÓN REGIONAL METRO 01', 1, '2018-11-26 17:26:34', '2018-11-26 17:28:36'),
(2, 'SUBDIRECCIÓN REGIONAL METRO 02', 4, 'SUBDIRECCIÓN REGIONAL METRO 02', 1, '2018-11-26 17:26:53', '2018-11-26 17:28:30'),
(3, 'SUBDIRECCIÓN REGIONAL METRO 03', 4, 'SUBDIRECCIÓN REGIONAL METRO 03', 1, '2018-11-26 17:27:05', '2018-11-26 17:28:24'),
(4, 'SUBDIRECCIÓN REGIONAL METRO 04', 4, 'SUBDIRECCIÓN REGIONAL METRO 04', 1, '2018-11-26 17:27:18', '2018-11-26 17:28:17'),
(5, 'SUBDIRECCIÓN REGIONAL METRO 07', 4, 'SUBDIRECCIÓN REGIONAL METRO 07', 1, '2018-11-26 17:28:08', '2018-11-26 17:28:08'),
(6, 'SUBDIRECCIÓN REGIONAL METRO 08', 4, 'SUBDIRECCIÓN REGIONAL METRO 08', 1, '2018-11-26 17:28:59', '2018-11-26 17:28:59'),
(7, 'SUBDIRECCIÓN REGIONAL METRO 09', 4, 'SUBDIRECCIÓN REGIONAL METRO 09', 1, '2018-11-26 17:29:10', '2018-11-26 17:29:10'),
(8, 'SUBDIRECCIÓN REGIONAL METRO 10', 4, 'SUBDIRECCIÓN REGIONAL METRO 10', 1, '2018-11-26 17:29:33', '2018-11-26 17:29:33'),
(9, 'SUBDIRECCIÓN REGIONAL METRO 11', 4, 'SUBDIRECCIÓN REGIONAL METRO 11', 1, '2018-11-26 17:29:59', '2018-11-26 17:29:59'),
(10, 'SUBDIRECCIÓN REGIONAL METRO 17', 4, 'SUBDIRECCIÓN REGIONAL METRO 17', 1, '2018-11-26 17:30:09', '2018-11-26 17:30:09'),
(11, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 01', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 01', 1, '2018-11-26 20:41:45', '2018-11-26 20:41:45'),
(12, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 02', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 02', 1, '2018-11-26 20:41:59', '2018-11-26 20:41:59'),
(13, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 03', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 03', 1, '2018-11-26 20:42:10', '2018-11-26 20:42:23'),
(14, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 04', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 04', 1, '2018-11-26 20:42:37', '2018-11-26 20:42:37'),
(15, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 05', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 05', 1, '2018-11-26 20:42:56', '2018-11-26 20:42:56'),
(16, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 06', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 06', 1, '2018-11-26 20:43:10', '2018-11-26 20:43:10'),
(17, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 07', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 07', 1, '2018-11-26 20:43:23', '2018-11-26 20:43:23'),
(18, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 08', 2, 'SUBDIRECCIÓN REGIONAL CENTRO NORTE 08', 1, '2018-11-26 20:44:07', '2018-11-26 20:44:07'),
(19, 'SUBDIRECCIÓN REGIONAL SURESTE 11', 3, 'SUBDIRECCIÓN REGIONAL SURESTE 11', 1, '2018-11-26 20:44:36', '2018-11-26 20:44:36'),
(20, 'SUBDIRECCIÓN REGIONAL METRO 16', 4, 'SUBDIRECCIÓN REGIONAL METRO 16\r\n', 1, '2018-11-28 22:33:48', '2018-11-28 22:33:48'),
(21, 'SUBDIRECCIÓN REGIONAL NORESTE 06', 5, 'SUBDIRECCIÓN REGIONAL NORESTE 06\r\n', 1, '2018-11-28 22:35:32', '2018-11-28 22:35:32'),
(22, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 02', 6, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 02\r\n', 1, '2018-11-28 22:36:58', '2018-11-28 22:36:58'),
(23, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 07', 6, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 07\r\n', 1, '2018-11-28 22:37:08', '2018-11-28 22:37:08'),
(24, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 13', 6, 'SUBDIRECCIÓN REGIONAL OCCIDENTE 13\r\n', 1, '2018-11-28 22:37:15', '2018-11-28 22:37:15'),
(25, 'SUBDIRECCIÓN DE EXCELENCIA OPERATIVA', 7, 'SUBDIRECCIÓN DE EXCELENCIA OPERATIVA', 1, '2018-11-29 01:27:54', '2018-11-29 01:27:54'),
(26, 'SUBDIRECCIÓN DE SERVICIOS TECNOLOGICOS', 8, 'SUBDIRECCIÓN DE SERVICIOS TECNOLOGICOS', 1, '2018-11-30 15:09:48', '2018-11-30 15:09:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organization_types`
--

CREATE TABLE `organization_types` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modfied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organization_types`
--

INSERT INTO `organization_types` (`id`, `type`, `description`, `enabled`, `created`, `modfied`) VALUES
(1, 'Oficina de servicio', 'Categoria para oficinas de servicio', 1, '2018-11-26 21:25:52', NULL),
(2, 'Posta', 'Posta', 1, '2018-11-27 19:45:23', NULL),
(3, 'Sucursal bancaria', 'Sucursal bancaria', 1, '2018-11-27 19:50:12', NULL),
(4, 'ÁREA INTERNA', 'ÁREA INTERNA', 1, '2018-11-30 15:11:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `rol_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `rol_name`, `description`, `enabled`, `created`, `modified`) VALUES
(1, 'SAdmin', 'Super administrador', 1, '2018-12-04 22:45:38', '2018-12-04 22:45:38'),
(2, 'Admin', 'Administrador base del sistema', 1, '2018-12-04 22:45:50', '2018-12-04 22:45:50');

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
-- Estructura de tabla para la tabla `test_fields`
--

CREATE TABLE `test_fields` (
  `id` int(11) NOT NULL,
  `test_varchar` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `test_text` text COLLATE utf8_spanish_ci NOT NULL,
  `test_datetime` datetime NOT NULL,
  `test_bool` tinyint(1) NOT NULL,
  `test_date` date NOT NULL
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
(5, 'Subdirección Regional Ventas', 'Subdirección Regional Ventas', 1, '2018-12-17 23:56:09', '2018-12-17 23:55:00');

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
(2, 2, 'JURIZO', '13894c2bc6925c1657af3b7f1f002a8a5298fa2a12ea8ef3064c307a261915a7', 2, 1, '2018-12-05 20:56:01', '2018-12-11 18:25:01');

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
-- Indices de la tabla `organization_directions`
--
ALTER TABLE `organization_directions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organization_offices`
--
ALTER TABLE `organization_offices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cost_center` (`cost_center`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `organization_subdirections`
--
ALTER TABLE `organization_subdirections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organization_types`
--
ALTER TABLE `organization_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
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
-- Indices de la tabla `test_fields`
--
ALTER TABLE `test_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_organizations`
--
ALTER TABLE `type_organizations`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `employee_positions`
--
ALTER TABLE `employee_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `organization_directions`
--
ALTER TABLE `organization_directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `organization_offices`
--
ALTER TABLE `organization_offices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `organization_subdirections`
--
ALTER TABLE `organization_subdirections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `organization_types`
--
ALTER TABLE `organization_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de la tabla `test_fields`
--
ALTER TABLE `test_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_organizations`
--
ALTER TABLE `type_organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
