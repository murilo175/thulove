<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/FoiF.css">
    <title>Musica</title>
</head>
<body>
    <a href='EscolaAberta.php' id='Home'><img src='img/Home.svg' alt='Inicio' width='48px' height='48px'></a>
    <div class="quadrado">
        <h1>Aproveite essa melodia</h1>
        <audio id="myAudio" controls autoplay>
            <source src="img/MatoGrosso.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <br>
        <div id="button">
            <button id="audio" onclick="playAudio()"><img src="img/Play.svg" alt="Play_Icon"></button>
            <button id="audio" onclick="pauseAudio()"><img src="img/Pause.svg" alt="Pause_Icon"></button>
            <button id="audio" onclick="stopAudio()"><img src="img/Stop.svg" alt="Stop_Icon"></button>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>