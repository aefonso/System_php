CREATE TABLE Usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  apelido VARCHAR(30) NOT NULL,
  usuario VARCHAR(30) NOT NULL,
  senha VARCHAR(20) NOT NULL
);

CREATE TABLE Categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome  VARCHAR(100) NOT NULL
);

CREATE TABLE Fornecedores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  id_fornecedores INT NOT NULL,
  FOREIGN KEY (id_fornecedores) REFERENCES Fornecedores(id)
);

CREATE TABLE Produtos_Fornecedores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_produtos INT NOT NULL,
  id_categorias INT NOT NULL,
  FOREIGN KEY (id_produtos) REFERENCES Produtos(id),
  FOREIGN KEY (id_categorias) REFERENCES Categorias(id)
);

INSERT INTO  Usuario(nome, apelido, usuario, senha) VALUES ('Administrador', 'Admin', 'Admin', '123')