-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2018 a las 07:36:25
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `isoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `horario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`horario`) VALUES
('1=0,2=1,3=0,4=0,5=0,6=1,7=0,8=1,9=0,10=0,11=0,12=1,13=0,14=1,15=0,16=0,17=0,18=0,19=0,20=1,21=0,22=0,23=0,24=0,25=0,26=0,27=0,28=0,29=0,30=0,31=0,32=0,33=0,34=1,35=0,36=0,37=1,38=0,39=0,40=1,41=0,42=0,43=1,44=1,45=0,46=1,47=0,48=0,49=1,50=1,51=0,52=1,53=0,54=1,55=1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancia`
--

CREATE TABLE `mercancia` (
  `Cedula` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Prioridad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mercancia`
--

INSERT INTO `mercancia` (`Cedula`, `id`, `Nombre`, `Prioridad`) VALUES
(2222, 1111, 'Petooo', 'No Perecedero'),
(55555, 33333, 'Petooo', 'No Perecedero'),
(88546, 96547, 'Peto', 'Perecedero'),
(2222222, 1111111, 'Petooo', 'No Perecedero'),
(6666, 5555555, 'Petrrrrooo', 'Perecedero'),
(22222222, 11111111, 'Petrooo', 'No Perecedero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Contraseña` text NOT NULL,
  `Email` text NOT NULL,
  `Telefono` text NOT NULL,
  `Tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombres`, `Apellidos`, `Cedula`, `Contraseña`, `Email`, `Telefono`, `Tipo`) VALUES
('Camilo', 'Fonseca', 88546, '123', '222', '32111', 'Cliente'),
('Alvaro', 'Ariza', 7756141, '1234', 'Alvaro@ariza.co', '32541654', 'Administrador'),
('Rafael', 'Herrera', 1007195176, '123', 'Rafa510736@gmail.com', '3174959308', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
