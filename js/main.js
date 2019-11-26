"use strict"
document.addEventListener("DOMContentLoaded", global);

function global(){

        let container = document.getElementById("container");
        let objId = container.dataset.objectid;
        let usrId = container.dataset.userid;
        let usrAdm = container.dataset.useradmin;

        let usrSpan = document.getElementById("usrId");
        let objSpan = document.getElementById("objId");
        let usrAdmSpan = document.getElementById("usrAdm");

        usrSpan.innerText = usrId;
        objSpan.innerText = objId;
        usrAdmSpan.innerText = usrAdm;

        getComentarios(objId);

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Comentarios sobre el Libro",
            comentarios: [],
            admin: usrAdm
        },
        methods: {
            deleteComment: function(id) {
                let url = "api/comentarios/" + id;

                fetch(url,{
                    "method" : "DELETE",
                    "headers" : {
                        "Content-Type" : "application/json"
                    }
                }).then(function(){
                    getComentarios(objId);
                }).catch(function(e){
                    console.log(e)
                })
            },
            addComment : function(){
                let data = {
                    id_usuario:  usrId,
                    id_libro:  objId,
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
                    getComentarios(objId);
                })
                .catch(error => console.log(error));
            }
        }
    });

    function getComentarios(objId) {
        let url = "api/libro/" + objId + "/comentarios";
        fetch(url)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
          let promedio=  getPuntuacion(comentarios);
            console.log(promedio);
        })
        .catch(error => console.log(error));
    }

    function getPuntuacion(comentarios){
        let promedio = 0;
        let total = comentarios.length;
        for (let comentario of comentarios){
            promedio =promedio + parseInt(comentario.valoracion);
        }
        console.log(comentarios.length);
        return promedio/total;
    }

    document.getElementById("btnEdit").addEventListener("click",openForm);
    document.getElementById("btnClose").addEventListener("click",closeForm);
  
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

}

