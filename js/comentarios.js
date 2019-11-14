"use strict"

let app = new Vue({
    el: "#template-vue-tasks",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        tasks: [] 
    }
});

function getTasks() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(tasks => {
        app.tasks = tasks; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}
