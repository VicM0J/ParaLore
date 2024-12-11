let redirectUrl = ""; // Variable para almacenar la URL de redirección
let expectedPassword = ""; // Variable para la contraseña esperada

function openModal(url, password) {
    redirectUrl = url; // Guarda la URL
    expectedPassword = password; // Guarda la contraseña esperada

    // Verifica si la URL ya fue desbloqueada
    if (isUnlocked(url)) {
        window.location.href = url; // Redirige automáticamente
        return;
    }

    document.getElementById("passwordModal").style.display = "flex"; // Muestra el modal
}

function closeModal() {
    document.getElementById("passwordModal").style.display = "none"; // Oculta el modal
    document.getElementById("passwordInput").value = ""; // Limpia el campo
}

function validatePassword() {
    const password = document.getElementById("passwordInput").value;

    if (password === expectedPassword) { // Verifica si la contraseña es correcta
        markAsUnlocked(redirectUrl); // Marca la URL como desbloqueada
        window.location.href = redirectUrl; // Redirige si es correcta
    } else {
        alert("Contraseña incorrecta. Intenta nuevamente."); // Muestra mensaje de error
    }
}

function isUnlocked(url) {
    // Verifica si la URL ya está desbloqueada
    const unlockedUrls = JSON.parse(localStorage.getItem("unlockedUrls")) || [];
    return unlockedUrls.includes(url);
}

function markAsUnlocked(url) {
    // Marca una URL como desbloqueada
    let unlockedUrls = JSON.parse(localStorage.getItem("unlockedUrls")) || [];
    if (!unlockedUrls.includes(url)) {
        unlockedUrls.push(url);
    }
    localStorage.setItem("unlockedUrls", JSON.stringify(unlockedUrls));
}
