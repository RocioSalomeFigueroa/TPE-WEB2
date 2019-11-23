{literal}
   <section id="template-vue-comentarios">
    <h5> {{ subtitle }} </h5>

    <ul>
       <li v-for="comentario in comentarios"> 
           <span>{{comentario.valoracion}} </span>
           <span>{{comentario.comentario}} </span>

        <span>
        <button v-on:click="deleteComment(comentario.id_comentario)">Eliminar</button>
        </span>
       </li> 
    </ul>

</section>
{/literal}