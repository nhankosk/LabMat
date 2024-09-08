-- Cria o banco de dados
CREATE DATABASE emprestimos;

-- Use o banco de dados
USE emprestimos;

-- Cria a tabela para armazenar os dados dos empréstimos
CREATE TABLE emprestimos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    turma VARCHAR(50),
    data_emprestimo DATE,
    data_devolucao DATE,
    item VARCHAR(100),
    quantidade INT
);
