USE webDevelopment;
CREATE TABLE languages (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
language VARCHAR(255)
);
CREATE TABLE tools (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
tool VARCHAR(255)
);
CREATE TABLE frameworks (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
name VARCHAR(255)
);
CREATE TABLE libraries (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
library VARCHAR(255)
);
CREATE TABLE ide (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
ideName VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS frameworks (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
name VARCHAR(255)
);
DROP TABLE IF EXISTS tools;
DROP TABLE libraries;
DROP TABLE ide;
CREATE DATABASE IF NOT EXISTS codex CHARACTER SET utf8;
USE codex;
CREATE TABLE clients (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
lastname VARCHAR(255),
firstname VARCHAR(255),
birthDate DATE,
address VARCHAR(255),
firstPhoneNumber INT,
secondPhoneNumber INT,
mail VARCHAR(255)
);
