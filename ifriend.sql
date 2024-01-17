-- Active: 1700591675136@@127.0.0.1@3306@ifriend
DROP DATABASE IF EXISTS `ifriend`;
CREATE DATABASE `ifriend` DEFAULT CHARACTER SET = 'utf8mb4';
USE `ifriend`;
CREATE TABLE `users`(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    `name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(20),
    `mail` VARCHAR(50),
    `create_at` TIMESTAMP,
    `update_at` TIMESTAMP
);
