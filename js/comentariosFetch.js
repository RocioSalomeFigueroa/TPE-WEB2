"use strict"

let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "Comentarios sobre el Libro",
        comentarios: [],
        auth: true
    }
});

function getComentarios() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios;
        console.log(comentarios); // similar a $this->smarty->assign("comentarios", $comentarios)
    })
    .catch(error => console.log(error));
}

getComentarios();