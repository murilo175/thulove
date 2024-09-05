<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+IN:wght@100..400&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="website icon" type="png" href="img/Icon.png">
    <title>O amor está no ar</title>
</head>
<body>
        <h1 id="title">TrueLove</h1>
    
    <div class="quadrado">
        <div class="square">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <form action="Compatibilidade.php" method="post">
            <h2>Será que você combina com seu Crush?</h2>
            <label for="yourName">Digite seu nome</label>
            <input type="text" id="yourName" name="yourName" required><br><br>
            <label for="crushName">Digite o nome do seu crush</label>
            <input type="text" id="crushName" name="crushName" required><br><br>
            <button type="submit" name="envio" class="submit-button">
                Verifica Porcentagem
                <img src="img/Coracao.svg" alt="Coração" width="24" height="24">
            </button>
            </form>

            <form method="post" action="EscolaAberta.php">
                <button type="submit" name="clear" class="submit-button" style="margin-top: 20px">Limpar Dados</button>
            </form>
        </div>
        
    </div>

    

    <?php 
        if (isset($_POST['clear'])) {
            session_start();
            session_unset();
            session_destroy(); // Destrói a sessão
            header("Location: EscolaAberta.php"); // Recarrega a página
            exit;
        }
    ?>
</body>
</html>
