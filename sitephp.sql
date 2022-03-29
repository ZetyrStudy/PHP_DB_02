-- Apagar o banco de dados em desenvolvimento
DROP DATABASE IF EXISTS sitephp;
-- Cria banco de dados
CREATE DATABASE sitephp CHARACTER SET utf8 COLLATE utf8_general_ci;
-- Cria tabela que armazena os contatos
CREATE TABLE contatos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    assunto VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    status ENUM('recebido', 'lido', 'respondido', 'apagado') DEFAULT 'recebido'
);

-- Cria tabela usuarios
CREATE TABLE usuarios (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    acesso ENUM('normal', 'administrador') NOT NULL DEFAULT 'normal',
    ultimologin DATETIME,
    status ENUM ('ativo', 'inativo', 'apagado') NOT NULL DEFAULT 'ativo'
);