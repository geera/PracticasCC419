-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-10-2012 a las 22:42:30
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `practicas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `eventos`
-- 

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `capacidad` int(11) NOT NULL,
  PRIMARY KEY  (`id_evento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `eventos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_user`
-- 

CREATE TABLE `tipo_user` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tipo_user`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `user`
-- 

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `user`
-- 

