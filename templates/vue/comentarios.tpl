{literal}
   <section id="template-vue-comentarios">
    <h4> {{ subtitle }} </h4>

    <table id="tbl_comentarios" class="table table-bordered">
        <thead>
          <tr>
            <th>Valoracion</th>
            <th>Comentarios</th>
            <th></th>
          </tr>
        </thead>
        <tbody v-for="comentario in comentarios">
            <tr>
            <td><span>{{comentario.valoracion}} </span></td>
            <td><span>{{comentario.comentario}} </span></td>
            <td><span v-show="admin == 1">
            <button v-on:click="deleteComment(comentario.id_comentario)" class="btn btn-danger btn-sm">Eliminar</button>
            </span> </td>
            </tr>
        </tbody>
    </table>

    <div v-show="admin >= 0">
        <h5>Agregar comentario</h5>
        <form  method="POST" id="form-comment" @submit.prevent="addComment">
            <div class="form-group">
                <label> valoracion: </label>
                <input value=" " name="valoracion" type="text" class="form-control" placeholder="Valoracion">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">comentario:</label>
              <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Agregar comentario</button>
            </div>
        </form>
    </div>

</section>
{/literal}