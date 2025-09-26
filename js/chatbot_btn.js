const chatbox = document.getElementById("chatbox");

// Alternar visibilidad del chatbot
function toggleChat() {
    const chat = document.getElementById("chatbot");
    chat.style.display = chat.style.display === "flex" ? "none" : "flex";
}

// Manejo de botones de opciones
document.addEventListener("click", async (e) => {
    if (e.target.classList.contains("option-btn")) {
        const pregunta = e.target.getAttribute("data-value");
        const action = e.target.getAttribute("data-action");

        // Mostrar mensaje del usuario
        chatbox.innerHTML += `<div class="msg-user">${pregunta}</div>`;

        // Remover las opciones anteriores
        if (e.target.parentElement) {
            e.target.parentElement.remove();
        }

        // Solo enviamos action si existe
        const bodyData = new URLSearchParams();
        bodyData.append("pregunta", pregunta);
        if (action) bodyData.append("action", action);

        const response = await fetch("chatbot/chatbot.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: bodyData.toString()
        });

        const data = await response.json();

        // Mostrar respuesta del bot
        chatbox.innerHTML += `<div class="msg-bot">${data.respuesta}</div>`;

        // Mostrar nuevas opciones
        if (data.opciones && data.opciones.length > 0) {
            let newOptionsHTML = `<div class="options-container">`;

            data.opciones.forEach(opcion => {
                if (opcion.url) {
                    // Si es un enlace
                    newOptionsHTML += `<a href="${opcion.url}" target="_blank" class="option-btn">${opcion.text}</a>`;
                } else if (opcion.action) {
                    // Si es un botón de acción
                    newOptionsHTML += `<button class="option-btn" data-value="${opcion.text}" data-action="${opcion.action}">${opcion.text}</button>`;
                }
            });

            newOptionsHTML += `</div>`;
            chatbox.innerHTML += newOptionsHTML;
        }

        // Mantener scroll abajo
        chatbox.scrollTop = chatbox.scrollHeight;
    }
});
