{literal}
   <section id="template-vue-comentarios">
    <h3> {{ subtitle }} </h3>

    <ul>
       <li v-for="comentario in comentarios"> 
           <span>{{comentario.id_comentario}} </span>
       </li> 
    </ul>
</section>

{/literal}