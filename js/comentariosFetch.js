"use strict"

document.addEventListener("DOMContentLoaded", global);


function global(){
//document.querySelector("#form-comment").addEventListener('submit', addComment);


document.getElementById('form-comment').addEventListener('submit', function(evt){
    evt.preventDefault();
    alert("entra");
    addComment();
})

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
      //  console.log(comentarios); // similar a $this->smarty->assign("comentarios", $comentarios)
    })
    .catch(error => console.log(error));
}

getComentarios();

function deleteComment(){
    let url = "api/comentarios";

    fetch( url,{
        "method" : "DELETE",
        "headers" : {
            "Content-Type" : "application/json"
        }
    }).then(function(){
        getComentarios();
    }).catch(function(e){
        console.log(e)
    })
}

function addComment(){

    console.log("entra");
    
    let data = {
        id_usuario:  document.querySelector("input[name=usuario]").value,
        id_libro:  document.querySelector("input[name=libro]").value,
        valoracion:  document.querySelector("input[name=valoracion]").value,
        comentario:  document.querySelector("textarea[name=comentario]").value
    }
    
    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data)
     })
     .then(response => {
         console.log(data);
         getComentarios();
     })
     .catch(error => console.log(error));

}
}