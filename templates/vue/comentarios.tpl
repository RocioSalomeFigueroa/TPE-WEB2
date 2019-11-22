{literal}
   <section id="template-vue-comentarios">
    <h5> {{ subtitle }} </h5>

    <ul>
       <li v-for="comentario in comentarios"> 
           <span>{{comentario.valoracion}} </span>
           <span>{{comentario.comentario}} </span>
       </li> 
    </ul>

</section>
{/literal}