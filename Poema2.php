
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/FoiF.css">
    <title>Poema</title>
</head>
<body>
    <?php 
    
    session_start();

    $nome =  $_SESSION['you'];
    $crush = $_SESSION['crush'];

    echo "<div class='quadrado'>";
    echo "<h1>Poema</h1>";
    echo "
    <p>Senti teu olhar, como um raio a iluminar,<br>
    Mas teu coração, distante, nunca quis me amar.<br>
    Cada passo teu, meu sonho a desmoronar,<br>
    E em meu peito, a dor de tanto esperar.</p>
    
    <p>Teus sorrisos, outrora sol em meu viver,<br>
    Hoje são lembranças que prefiro esquecer.<br>
    Amor não correspondido, cruel padecer,<br>
    Nas noites solitárias, só resta o sofrer.</p>
    
    <p>Promessas ao vento, palavras sem raiz,<br>
    Meu coração ferido, em busca de um país,<br>
    Onde o amor não seja apenas uma atriz,<br>
    Mas uma verdade, um porto que me diz.</p>
    
    <p>Caminho sozinho, sem rumo, sem destino,<br>
    Esperanças perdidas, amor clandestino.<br>
    Sonhos desfeitos, um futuro cristalino,<br>
    Refletem apenas um coração desatino.</p>
    
    <p>Sei que a vida segue, e o tempo há de curar,<br>
    As feridas abertas, que o amor deixou a sangrar.<br>
    Mas hoje, sou sombra, sem brilho a brilhar,<br>
    Uma alma perdida, sem forças para amar.</p>
    
    <p> Infelizmente a chama no coração não é tão forte " . $nome . " acho melhor deixar a(o) " . $crush . " e ir atras se uma nova pessoa.";
    echo "</div>";

    ?>
</body>
</html>