// Selección de formularios
const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e) {
    e.preventDefault();
    let enviar = confirm("¿Deseas enviar el formulario?");

    if (enviar) {
        // Datos del formulario
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        // Configuración de la solicitud fetch
        let encabezados = new Headers();
        let config = {
            method: method,
            headers: encabezados,
            mode: 'cors',
            cache: "no-cache",
            body: data // Agregamos los datos del formulario al cuerpo de la solicitud
        };

        // Realizar la solicitud fetch
        fetch(action, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                alert(respuesta);
            })
            .catch(error => {
                console.error('Error al enviar el formulario:', error);
            });
    }
}

// Recorrer formularios y agregar el evento de envío
formularios_ajax.forEach(formulario => {
    formulario.addEventListener("submit", enviar_formulario_ajax);
});
