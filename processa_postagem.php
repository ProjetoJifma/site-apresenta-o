<?php
// Conexão com o banco de dados
include'conexao.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagem = "";

    // Verifica se uma imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = 'uploads/' . basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
    }

    $sql = "INSERT INTO Postagem (usuario_id, imagem, titulo, texto) VALUES ('$usuario_id', '$imagem', '$titulo', '$texto')";

    if ($conn->query($sql) === TRUE) {
        echo "Nova postagem criada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<html><a href='exibir_noticia.php'>ver postagem</a></html>