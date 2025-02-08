<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/styleADMJogos.css">
</head>
<body>
    <div class="container">
        <h1 id="form-title">Adicionar Novo Jogo</h1>
        <form id="game-form">
            <label for="teams">Equipes:</label>
            <input type="text" id="teams" name="teams" required><br><br>

            <label for="date">Data:</label>
            <input type="date" id="date" name="date" required><br><br>

            <label for="result">Resultado:</label>
            <input type="text" id="result" name="result"><br><br>

            <button type="submit" id="submit-btn">Adicionar Jogo</button>
        </form>
        <a href="testepaginajogos.php" id="back-link" class="button">Voltar para Tabela</a>
    </div>

    <script src="JS/scriptADMjogosJS.js"></script>
</body>
</html>