<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Foi.css">
    <title>Poema</title>
</head>
<body>
    <a href='EscolaAberta.php' id='Home'><img src='img/Home.svg' alt='Inicio' width='48px' height='48px'></a>
    <?php 
    
    session_start();

    $nome =  $_SESSION['you'];
    $crush = $_SESSION['crush'];
    
    echo "<div class='quadrado'>";
    echo "<h1>Poema</h1>";
    echo "<p>Em teu olhar " . $crush . " , encontro o sol a brilhar,<br>
    Cada sorriso teu, um raio de luar,<br>
    Teu toque suave, um doce aconchegar,<br>
    E em teus braços, o mundo a parar.</p>
    
    <p>Teu beijo, mel que adoça minha vida,<br>
    Teu perfume, flor que a alma embriaga,<br>
    Nosso amor, melodia bem vivida,<br>
    Em cada verso, nossa história se propaga.</p>
    
    <p>Seus sussurros, música que me acalma,<br>
    Teu abraço, refúgio do meu ser,<br>
    Teu amor, o segredo que me salva,<br>
    Em teu peito, encontro o meu viver.</p>
    
    <p>Meu coração, que bate forte por ti,<br>
    Em cada suspiro, teu nome a chamar,<br>
    Teu amor, meu doce elixir,<br>
    Na eternidade, contigo quero estar.</p>
    
    <p>És meu sonho, minha doce poesia,<br>
    Meu eterno amor, minha fantasia,<br>
    Contigo, a vida é pura magia,<br>
    Te amarei para sempre ".$crush." <br>
    Você é o motido do meu desperta.</p>
    ";
    echo "</div>";

    ?>
</body>
</html>