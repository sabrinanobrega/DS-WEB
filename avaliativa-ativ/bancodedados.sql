/*criaçao do banco de dados*/

CREATE DATABASE loja;

/*criar tabela do banco de produtos*/

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
);

/*criar tabela do banco de usuarios*/

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(15)
);

/*criar tabela login de usuarios*/

INSERT INTO usuarios (nome, email, senha) 
VALUES ('Administrador', 'admin@sesi.com', '12345');

/*Adicionando elementos*/
INSERT INTO produtos (nome, preco, quantidade)
VALUES
('Rosa Vermelha', 3.50, 50), 
('Margarida', 2.00, 30),     
('Orquídea Phalaenopsis', 45.00, 10), 
('Lírio Branco', 5.00, 20),   
('Crisântemo', 4.00, 15);     


