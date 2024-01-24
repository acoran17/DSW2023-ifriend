-- Active: 1700591690136@@127.0.0.1@3306@ifriend
DROP DATABASE IF EXISTS `ifriend`;
CREATE DATABASE `ifriend` DEFAULT CHARACTER SET = 'utf8mb4';
USE `ifriend`;
CREATE TABLE `users`(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    `name` VARCHAR(255) NOT NULL,
    `password` VARCHAR(20),
    `mail` VARCHAR(50),
    `created_at` TIMESTAMP,
    `updated_at` TIMESTAMP
);
CREATE TABLE `games`(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    `name` VARCHAR(255) NOT NULL,
    `id_admin` int NOT NULL,
    `created_at` TIMESTAMP,
    `updated_at` TIMESTAMP,
    CONSTRAINT `id_admin` FOREIGN KEY (`id_admin`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE `user_game`(
    `id_user` int NOT NULL,
    `id_game` int NOT NULL,
    `created_at` TIMESTAMP,
    `updated_at` TIMESTAMP,
    PRIMARY KEY(`id_user`, `id_game`),
    CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `id_game` FOREIGN KEY (`id_game`) REFERENCES `games`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);