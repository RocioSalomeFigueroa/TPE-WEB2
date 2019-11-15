"use strict"

let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        comentarios: [],
        auth: true
    }
});

function getComentarios() {
    fetch("api/comentarios")
    .then(function(r){
        return r.json()
    })
    .then(function(json) {
        console.log(json);
       // disenioCurricular = json.materias
       // cargarDisenio();
      })
    .catch(error => console.log(error));
}


getComentarios();