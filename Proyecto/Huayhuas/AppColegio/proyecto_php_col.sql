-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2016 a las 02:22:51
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.33

CREATE DATABASE IF NOT EXISTS proyecto_php_col;

-- ==========================================================
-- Seleccionar la Base de Datos
-- ==========================================================

USE proyecto_php_col;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_php_col`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_alumno`
--

CREATE TABLE `col_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(200) DEFAULT NULL,
  `ap_alumno` varchar(200) DEFAULT NULL,
  `am_alumno` varchar(200) DEFAULT NULL,
  `col_Grado_id_grado` int(11) NOT NULL,
  `email_alumno` varchar(200) DEFAULT NULL,
  `telefono_alumno` varchar(9) DEFAULT NULL,
  `celular_alumno` varchar(9) DEFAULT NULL,
  `fregistro_alumno` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_curso`
--

CREATE TABLE `col_curso` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(150) DEFAULT NULL,
  `descripcion_curso` varchar(500) DEFAULT NULL,
  `fregistro_curso` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `col_Docente_id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_docente`
--

CREATE TABLE `col_docente` (
  `id_docente` int(11) NOT NULL,
  `dni_docente` varchar(10) DEFAULT NULL,
  `nombre_docente` varchar(200) DEFAULT NULL,
  `ap_docente` varchar(200) DEFAULT NULL,
  `am_docente` varchar(200) DEFAULT NULL,
  `mail_docente` varchar(100) DEFAULT NULL,
  `telefono_docente` varchar(9) DEFAULT NULL,
  `celular_docente` varchar(9) DEFAULT NULL,
  `fregistro_docente` datetime DEFAULT NULL,
  `estado_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado`
--

CREATE TABLE `col_grado` (
  `id_grado` int(11) NOT NULL,
  `nivel_grado` varchar(200) DEFAULT NULL,
  `grado_grado` varchar(200) DEFAULT NULL,
  `col_Seccion_id_seccion` int(11) NOT NULL,
  `col_Turno_id_turno` int(11) NOT NULL,
  `max_alumno` int(11) DEFAULT NULL,
  `cant_alumno` int(11) DEFAULT NULL,
  `finicio_grado` date DEFAULT NULL,
  `ffin_grado` date DEFAULT NULL,
  `estado_grado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado_has_col_curso`
--

CREATE TABLE `col_grado_has_col_curso` (
  `col_Grado_id_grado` int(11) NOT NULL,
  `col_Curso_id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_grado_has_col_docente`
--

CREATE TABLE `col_grado_has_col_docente` (
  `col_Grado_id_grado` int(11) NOT NULL,
  `col_Docente_id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_matricula`
--

CREATE TABLE `col_matricula` (
  `id_matricula` int(11) NOT NULL,
  `col_Alumno_id_alumno` int(11) NOT NULL,
  `fmatricula_matricula` datetime DEFAULT NULL,
  `estado_matricula` int(11) DEFAULT NULL,
  `col_Grado_id_grado` int(11) NOT NULL,
  `pago_matricula` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_pago`
--

CREATE TABLE `col_pago` (
  `id_pago` int(11) NOT NULL,
  `col_Grado_id_grado` int(11) NOT NULL,
  `cuotas_pago` int(11) DEFAULT NULL,
  `fvencimiento_pago` date DEFAULT NULL,
  `monto_pago` double DEFAULT NULL,
  `fpago_pago` date DEFAULT NULL,
  `montopagado_pago` double DEFAULT NULL,
  `estadopago_pago` int(11) DEFAULT NULL,
  `fregistro` datetime DEFAULT NULL,
  `estado_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_seccion`
--

CREATE TABLE `col_seccion` (
  `id_seccion` int(11) NOT NULL,
  `nombre_seccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_tipousuario`
--

CREATE TABLE `col_tipousuario` (
  `id_tipousuario` int(11) NOT NULL,
  `descripcion_tu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `col_tipousuario`
--

INSERT INTO `col_tipousuario` (`id_tipousuario`, `descripcion_tu`) VALUES
(1, 'Administrador'),
(2, 'Matricula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_turno`
--

CREATE TABLE `col_turno` (
  `id_turno` int(11) NOT NULL,
  `descripcion_turno` varchar(200) DEFAULT NULL,
  `horario_turno` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `col_usuario`
--

CREATE TABLE `col_usuario` (
  `id_usuario` int(11) NOT NULL,
  `col_TipoUsuario_id_tipousuario` int(11) NOT NULL,
  `nombre_usuario` varchar(200) DEFAULT NULL,
  `ap_usuario` varchar(200) DEFAULT NULL,
  `am_usuario` varchar(200) DEFAULT NULL,
  `sexo_usuario` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(200) DEFAULT NULL,
  `usu_usuario` varchar(200) DEFAULT NULL,
  `password_usuario` varchar(200) DEFAULT NULL,
  `fregistro_usuario` datetime DEFAULT NULL,
  `estado_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `col_usuario`
--

INSERT INTO `col_usuario` (`id_usuario`, `col_TipoUsuario_id_tipousuario`, `nombre_usuario`, `ap_usuario`, `am_usuario`, `sexo_usuario`, `email_usuario`, `usu_usuario`, `password_usuario`, `fregistro_usuario`, `estado_usuario`) VALUES
(34, 1, 'kevin', 'huayhuas', 'cariapaza', 'M', 'kevin_4592@hotmail.com', 'Admin', 'bfTlgedRe2G0yW92Ke55Ln/IjUrmoF3zgQJaBERZVi4=', '2016-11-24 19:00:49', 1),
(36, 2, 'jair', 'polanco', 'santos', 'M', 'polanco@gmail.com', 'Polanco', '+/ZPmnVN5sdqsB1b+2s3F+fblpGKXZCnL4EiD6l5y8U=', '2016-11-25 04:18:32', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `col_alumno`
--
ALTER TABLE `col_alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `fk_col_Alumno_col_Grado1_idx` (`col_Grado_id_grado`);

--
-- Indices de la tabla `col_curso`
--
ALTER TABLE `col_curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_col_Curso_col_Docente1_idx` (`col_Docente_id_docente`);

--
-- Indices de la tabla `col_docente`
--
ALTER TABLE `col_docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `col_grado`
--
ALTER TABLE `col_grado`
  ADD PRIMARY KEY (`id_grado`),
  ADD KEY `fk_col_Grado_col_Seccion1_idx` (`col_Seccion_id_seccion`),
  ADD KEY `fk_col_Grado_col_Turno1_idx` (`col_Turno_id_turno`);

--
-- Indices de la tabla `col_grado_has_col_curso`
--
ALTER TABLE `col_grado_has_col_curso`
  ADD PRIMARY KEY (`col_Grado_id_grado`,`col_Curso_id_curso`),
  ADD KEY `fk_col_Grado_has_col_Curso_col_Curso1_idx` (`col_Curso_id_curso`),
  ADD KEY `fk_col_Grado_has_col_Curso_col_Grado1_idx` (`col_Grado_id_grado`);

--
-- Indices de la tabla `col_grado_has_col_docente`
--
ALTER TABLE `col_grado_has_col_docente`
  ADD PRIMARY KEY (`col_Grado_id_grado`,`col_Docente_id_docente`),
  ADD KEY `fk_col_Grado_has_col_Docente_col_Docente1_idx` (`col_Docente_id_docente`),
  ADD KEY `fk_col_Grado_has_col_Docente_col_Grado1_idx` (`col_Grado_id_grado`);

--
-- Indices de la tabla `col_matricula`
--
ALTER TABLE `col_matricula`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `fk_col_Matricula_col_Alumno1_idx` (`col_Alumno_id_alumno`),
  ADD KEY `fk_col_Matricula_col_Grado1_idx` (`col_Grado_id_grado`);

--
-- Indices de la tabla `col_pago`
--
ALTER TABLE `col_pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_col_Pago_col_Grado1_idx` (`col_Grado_id_grado`);

--
-- Indices de la tabla `col_seccion`
--
ALTER TABLE `col_seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `col_tipousuario`
--
ALTER TABLE `col_tipousuario`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- Indices de la tabla `col_turno`
--
ALTER TABLE `col_turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `col_usuario`
--
ALTER TABLE `col_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_col_Usuario_col_TipoUsuario1_idx` (`col_TipoUsuario_id_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `col_curso`
--
ALTER TABLE `col_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_docente`
--
ALTER TABLE `col_docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_grado`
--
ALTER TABLE `col_grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_matricula`
--
ALTER TABLE `col_matricula`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_pago`
--
ALTER TABLE `col_pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_seccion`
--
ALTER TABLE `col_seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_tipousuario`
--
ALTER TABLE `col_tipousuario`
  MODIFY `id_tipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `col_turno`
--
ALTER TABLE `col_turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `col_usuario`
--
ALTER TABLE `col_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `col_alumno`
--
ALTER TABLE `col_alumno`
  ADD CONSTRAINT `fk_col_Alumno_col_Grado1` FOREIGN KEY (`col_Grado_id_grado`) REFERENCES `col_grado` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_curso`
--
ALTER TABLE `col_curso`
  ADD CONSTRAINT `fk_col_Curso_col_Docente1` FOREIGN KEY (`col_Docente_id_docente`) REFERENCES `col_docente` (`id_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_grado`
--
ALTER TABLE `col_grado`
  ADD CONSTRAINT `fk_col_Grado_col_Seccion1` FOREIGN KEY (`col_Seccion_id_seccion`) REFERENCES `col_seccion` (`id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_col_Grado_col_Turno1` FOREIGN KEY (`col_Turno_id_turno`) REFERENCES `col_turno` (`id_turno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_grado_has_col_curso`
--
ALTER TABLE `col_grado_has_col_curso`
  ADD CONSTRAINT `fk_col_Grado_has_col_Curso_col_Curso1` FOREIGN KEY (`col_Curso_id_curso`) REFERENCES `col_curso` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_col_Grado_has_col_Curso_col_Grado1` FOREIGN KEY (`col_Grado_id_grado`) REFERENCES `col_grado` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_grado_has_col_docente`
--
ALTER TABLE `col_grado_has_col_docente`
  ADD CONSTRAINT `fk_col_Grado_has_col_Docente_col_Docente1` FOREIGN KEY (`col_Docente_id_docente`) REFERENCES `col_docente` (`id_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_col_Grado_has_col_Docente_col_Grado1` FOREIGN KEY (`col_Grado_id_grado`) REFERENCES `col_grado` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_matricula`
--
ALTER TABLE `col_matricula`
  ADD CONSTRAINT `fk_col_Matricula_col_Alumno1` FOREIGN KEY (`col_Alumno_id_alumno`) REFERENCES `col_alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_col_Matricula_col_Grado1` FOREIGN KEY (`col_Grado_id_grado`) REFERENCES `col_grado` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_pago`
--
ALTER TABLE `col_pago`
  ADD CONSTRAINT `fk_col_Pago_col_Grado1` FOREIGN KEY (`col_Grado_id_grado`) REFERENCES `col_grado` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `col_usuario`
--
ALTER TABLE `col_usuario`
  ADD CONSTRAINT `fk_col_Usuario_col_TipoUsuario1` FOREIGN KEY (`col_TipoUsuario_id_tipousuario`) REFERENCES `col_tipousuario` (`id_tipousuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
