<?php
// Informações de conexão
$servername = "localhost"; // nome do servidor
$username = "root"; // nome de usuário
$password = ""; // senha do usuário
$dbname = "jifma"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Coletar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$duvida = $_POST['Duvida'];

// Inserir dados no banco de dados
$sql = "INSERT INTO feedback (nome, email, telefone, duvida) VALUES ('$nome', '$email', '$telefone', '$duvida')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>