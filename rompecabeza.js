let currentIndex = null;
let currentWord = '';

function showModal(index, word) {
    currentIndex = index;
    currentWord = word;

    const modal = document.getElementById('modal');
    const input = document.getElementById('modal-input');

    modal.classList.remove('hidden');
    input.value = '';
    input.focus();
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');
}


function normalizeText(text) {
    return text
        .toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "");
}

function checkWord() {
    const input = document.getElementById('modal-input').value.trim();
    const normalizedInput = normalizeText(input);
    const normalizedWord = normalizeText(currentWord);

    if (normalizedInput === normalizedWord) {
        revealImage(currentIndex);
        closeModal();
    } else {
        // Usar SweetAlert2 para el mensaje de error
        Swal.fire({
            icon: 'error',
            title: 'Esta No Es Pri',
            text: 'Siguele buscando',
            confirmButtonText: 'Simona La Mona',
        });
    }
}


function revealImage(index) {
    const piece = document.getElementById(`piece-${index}`);
    const image = piece.querySelector('img');
    const button = piece.querySelector('button');

    image.style.display = 'block';
    button.style.display = 'none';

    saveProgress(index);
    checkCompletion();
}

function saveProgress(index) {
    let progress = JSON.parse(localStorage.getItem('puzzleProgress')) || [];
    if (!progress.includes(index)) {
        progress.push(index);
    }
    localStorage.setItem('puzzleProgress', JSON.stringify(progress));
}

function loadProgress() {
    const progress = JSON.parse(localStorage.getItem('puzzleProgress')) || [];
    progress.forEach(index => {
        const piece = document.getElementById(`piece-${index}`);
        const image = piece.querySelector('img');
        const button = piece.querySelector('button');

        image.style.display = 'block';
        button.style.display = 'none';
    });

    checkCompletion();
}

function checkCompletion() {
    const hiddenButtons = document.querySelectorAll('.puzzle-piece button:not([style*="display: none"])');
    
    if (hiddenButtons.length === 0) {
        const finalPhrase = document.getElementById('final-phrase');
        
        if (finalPhrase) {
            finalPhrase.classList.remove('hidden');
            finalPhrase.querySelector('h3').innerHTML =
                "No hay palabra en el mundo que puedan expresar todo lo que siento por ti,<br>" +
                "no existen imágenes que lo describan,<br>" +
                "o poemas que plasmen ese sentimiento;<br>" +
                "lo más cercano a ello son los hechos,<br>" +
                "y yo cada día trabajaré duro para demostrarte cuánto te amo. <br><br><br><br>" + 
                '<h2>Aquí te dejo la Playlist con las canciones 💓</h2>' +
                '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/4lqhlTZPGZWCbIltmQ0Yox?utm_source=generator&autoplay=1" width="100%" height="152" frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';

            // Llamar a la función de animación de confeti
            launchConfetti();
        } else {
            console.error('Elemento con id "final-phrase" no encontrado.');
        }
    }
}





// Función para lanzar el confeti
// Función para lanzar el confeti
function launchConfetti() {
    const canvas = document.getElementById('confettiCanvas');
    const ctx = canvas.getContext('2d');

    // Configurar el tamaño del canvas
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Generar partículas de confeti
    const confetti = [];
    const colors = ['#ff595e', '#ffca3a', '#8ac926', '#1982c4', '#6a4c93'];
    const numConfetti = 3000; // Aumentar el número de partículas

    for (let i = 0; i < numConfetti; i++) {
        confetti.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height - canvas.height,
            radius: Math.random() * 6 + 3,
            speed: Math.random() * 3 + 1,
            direction: Math.random() * 2 * Math.PI,
            color: colors[Math.floor(Math.random() * colors.length)],
        });
    }

    // Variable para controlar el tiempo de duración
    const confettiDuration = 5000; // Duración en milisegundos (5 segundos)
    const startTime = Date.now();

    // Animación del confeti
    function animateConfetti() {
        const elapsedTime = Date.now() - startTime;

        // Limpiar el canvas en cada frame
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Animar las partículas
        confetti.forEach(particle => {
            particle.x += particle.speed * Math.cos(particle.direction);
            particle.y += particle.speed * Math.sin(particle.direction);
            particle.radius *= 0.99; // Decrecer el tamaño

            // Volver a aparecer desde arriba cuando se sale de la pantalla
            if (particle.y > canvas.height) {
                particle.y = -particle.radius;
            }

            // Dibujar cada partícula
            ctx.beginPath();
            ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
            ctx.fillStyle = particle.color;
            ctx.fill();
        });

        // Continuar la animación mientras no se haya alcanzado el tiempo límite
        if (elapsedTime < confettiDuration) {
            requestAnimationFrame(animateConfetti);
        } else {
            // Ocultar el canvas después de 5 segundos
            canvas.style.display = 'none';
        }
    }

    // Mostrar el canvas y comenzar la animación
    canvas.style.display = 'block';
    animateConfetti();
}

// Cargar progreso al cargar la página
document.addEventListener('DOMContentLoaded', loadProgress);
