// Obtenha o elemento de áudio
var audio = document.getElementById("myAudio");

// Função para reproduzir o áudio
function playAudio() {
    audio.play();
}

// Função para pausar o áudio
function pauseAudio() {
    audio.pause();
}

// Função para parar o áudio
function stopAudio() {
    audio.pause();
    audio.currentTime = 0; // Reinicia o tempo de reprodução
}
