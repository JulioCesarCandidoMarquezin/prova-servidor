DROP DATABASE IF EXISTS filmes;
CREATE DATABASE filmes;
USE filmes;

CREATE TABLE Ator (
	codigo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    idade INT,
    salario DECIMAL(10, 2),
    sexo ENUM('M', 'F'),
    cidade VARCHAR(50)
);