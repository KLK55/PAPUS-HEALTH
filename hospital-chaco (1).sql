-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2023 a las 00:06:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital-chaco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `N_usuario` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `apellido`, `N_usuario`, `contrasena`) VALUES
(1, 'inca', 'rreable', 'INCA', '404'),
(2, 'juan', 'perez', 'MANTECA', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docpaczon`
--

CREATE TABLE `docpaczon` (
  `id_docpaczon` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docpaczon`
--

INSERT INTO `docpaczon` (`id_docpaczon`, `id_zona`, `id_paciente`, `id_doctor`) VALUES
(1, 1, 1, 3),
(2, 2, 2, 1),
(3, 3, 4, 2),
(4, 4, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id_doctor` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `cargo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id_doctor`, `nombre`, `apellido`, `cargo`) VALUES
(1, 'franco', 'salvatierra', 'cabecera'),
(2, 'genaro', 'iannelo', 'neurólogo'),
(3, 'stefano', 'peralta', 'pediatra'),
(4, 'santiago', 'miras', 'oftalmólogo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id_llamadas` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `motivo` text NOT NULL,
  `urgencia` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_pacientes` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `estado` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_pacientes`, `nombre`, `apellido`, `DNI`, `estado`, `descripcion`) VALUES
(1, 'mateo', 'francisco', '45932512', 'esqueleto', 'casi muelto'),
(2, 'gabriel', 'rolfi', '4235698', 'casi vivo', 'esta joya'),
(3, 'gaston', 'falcon', '46235658', 'bien', 'ya casi esta saludable'),
(4, 'inca', 'rreable', '45512932', 'de alta', 'esta joya, que vaya a su casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_roles_usuarios`
--

CREATE TABLE `t_roles_usuarios` (
  `id_rol` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_rol_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_roles_usuarios`
--

INSERT INTO `t_roles_usuarios` (`id_rol`, `id_admin`, `id_rol_user`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` int(11) NOT NULL,
  `piso` text NOT NULL,
  `quirofano` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_zona`, `piso`, `quirofano`) VALUES
(1, 'primero', '1'),
(2, 'Primero', '2'),
(3, 'Primero', '3'),
(4, 'Primero', '4'),
(5, 'segundo', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `docpaczon`
--
ALTER TABLE `docpaczon`
  ADD PRIMARY KEY (`id_docpaczon`),
  ADD UNIQUE KEY `id_zona` (`id_zona`,`id_paciente`,`id_doctor`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indices de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  ADD PRIMARY KEY (`id_llamadas`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_pacientes`);

--
-- Indices de la tabla `t_roles_usuarios`
--
ALTER TABLE `t_roles_usuarios`
  ADD PRIMARY KEY (`id_rol_user`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `docpaczon`
--
ALTER TABLE `docpaczon`
  MODIFY `id_docpaczon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id_llamadas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_pacientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_roles_usuarios`
--
ALTER TABLE `t_roles_usuarios`
  MODIFY `id_rol_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docpaczon`
--
ALTER TABLE `docpaczon`
  ADD CONSTRAINT `docpaczon_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctores` (`id_doctor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docpaczon_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_pacientes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docpaczon_ibfk_3` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_roles_usuarios`
--
ALTER TABLE `t_roles_usuarios`
  ADD CONSTRAINT `t_roles_usuarios_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
