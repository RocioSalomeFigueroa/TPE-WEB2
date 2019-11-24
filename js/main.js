"use strict"

document.addEventListener("DOMContentLoaded", global);

function global(){

 //   function setIds(){
        let container = document.getElementById("container");
        let objId = container.dataset.objectid;
        let usrId = container.dataset.userid;

        let usrSpan = document.getElementById("usrId");
        let objSpan = document.getElementById("objId");

        usrSpan.innerText = usrId;
        objSpan.innerText = objId;

        getComentarios(objId);
//    }
    
//    setIds();

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Comentarios sobre el Libro",
            comentarios: []
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
        })
        .catch(error => console.log(error));
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