<?php
// Conexão com o banco de dados
$host = 'localhost';  // Ajuste se necessário
$user = 'root';       // Nome de usuário do MySQL
$password = '';       // Senha do MySQL
$database = 'emprestimos'; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$data_emprestimo = $_POST['data_emprestimo'];
$data_devolucao = $_POST['data_devolucao'];
$item = $_POST['item'];
$quantidade = $_POST['quantidade'];

// Insere os dados na tabela 'emprestimos'
$sql = "INSERT INTO emprestimos (nome, turma, data_emprestimo, data_devolucao, item, quantidade) 
        VALUES ('$nome', '$turma', '$data_emprestimo', '$data_devolucao', '$item', '$quantidade')";

if ($conn->query($sql) === TRUE) {
    echo "Empréstimo registrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
