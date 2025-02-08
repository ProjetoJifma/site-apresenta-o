<?php
// Conexão com o banco de dados

include'conexao.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT id, usuario_id, imagem, titulo, texto, data_postagem FROM Postagem ORDER BY data_postagem DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p>" . $row["texto"] . "</p>";
        if ($row["imagem"]) {
            echo "<img src='" . $row["imagem"] . "' alt='Imagem da Postagem' style='max-width: 100%; height: auto;'>";
        }
        echo "<p><small>Postado por silas: " . $row["data_postagem"] . "</small></p>";
        echo "</div><hr>";
    }
} else {
    echo "Nenhuma postagem encontrada.";
}

$conn->close();
?>

<html><a href='postar_noticia.html'>fazer nova postagem</a></html>