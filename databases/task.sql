
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `php_crud`
--

--
-- Estructura de tabla para la tabla `task`
--

CREATE DATABASE IF NOT EXISTS 'php_crud'

USE php_crud;
DROP TABLE IF EXISTS task;

CREATE TABLE `task` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


