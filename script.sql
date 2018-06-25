CREATE DATABASE livraria DEFAULT CHARACTER SET utf8;
USE livraria;

CREATE TABLE livros (
    nome          VARCHAR(255) NOT NULL,
    autor         VARCHAR(255),
    quantidade    INT NOT NULL,
    preco         VARCHAR(255) NOT NULL,
    flag          TINYINT(1) NULL DEFAULT 0,
    data          DATE NOT NULL,
PRIMARY KEY (nome))
