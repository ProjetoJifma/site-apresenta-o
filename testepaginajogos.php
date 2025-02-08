<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/styletesteJOGOS.css">
</head>
<body>
    <header>
        <div class="header1">
            <nav>
                <a href="paginainicial1.php">
                    <img src="img/logodosite.png" alt="Logo" width="150px">
                </a>
                <ul class="ul">
                    <a href="landinpage.php">JIFMA</a>
                    <a href="LOGIN1.php">Login</a>
                    <a href="subpaginaJOGOS.php">Jogos</a>
                    <a href="subpaginaEQUIPES.php">Equipes</a>
                    <a href="subpaginaNOTICIAS.php">Notícias</a>
                    <a href="subpaginaSOBRE.php">Sobre</a>
                    <a href="galeria.php">Galeria</a>
                    <a  class="btn animate-btn" href="subpaginaCONTATO.php">Contato</a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Tabela de Jogos e Resultados</h1>
        <table id="games-table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Jogo</th>
                    <th>Resultado</th>
                </tr>

                <tr>
                    <th>25/11/2024</th>
                    <th>Infor 3 X Eletro 3</th>
                    <th>3 X 1</th>
                </tr>

                <tr>
                    <th>25/11/2024</th>
                    <th>Infor 3 X ADM 2</th>
                    <th>3 X 3</th>
                </tr>
            </thead>
            <tbody>
                <!-- Linhas serão preenchidas dinamicamente -->
            </tbody>
        </table>
    </div>
    <script src="JS/scriptADMjogosJS.js"></script>
</body>
</html>
