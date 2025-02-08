<?php
// ... (código de conexão)

include 'conexao.php'; // incluir o arquivo de conexão

$email = $_POST['email'];
$password = $_POST['password'];

// Preparar a query com prepared statements
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['senha'])) {
        echo "Login bem-sucedido!";
        header("Location: subpaginaNOTICIAS.php");
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();
?>