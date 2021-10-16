
CREATE DATABASE IF NOT EXISTS 'php_crud'

USE php_crud;
DROP TABLE IF EXISTS task;
CREATE TABLE `task` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
