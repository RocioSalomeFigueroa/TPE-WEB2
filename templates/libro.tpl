{include file="header1.tpl"}

    <div class="datos-bbdd">
        <div>
            <h4 class="card-title">Titulo: {$libro.titulo}</h4>
            <h5 class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</h5>
            <p class="card-text">Genero: {$libro.genero}</p>
            <p class="card-text">Año: {$libro.anio}</p>
            <p class="card-text">Reseña: {$libro.resenia}</p>
        </div>

        <form id="formview" action="editarLibro/{$libro.id_libro}" method="post">
  
                  <div class="form-group">
                      <label> Titulo: </label>
                      <input value=" " name="titulo" type="text" class="form-control" placeholder="Titulo">
                  </div>
                  <div class="form-group">
                      <label for="inputState">Seleccione Autor:</label>
                      <select  class="form-control" name="autor">
                        <option> Seleccione  </option>

                            {foreach from=$autores item=autor}
                              <option value="{$autor.id_autor} ">{$autor.apellido}, {$autor.nombre} </option>
                            {/foreach}
                         </select>
                    </div>
                    <div class="form-group">
                      <label> Genero: </label>
                      <input value=" " name="genero" type="text" class="form-control" placeholder="Genero">
                    </div>
                    <div class="form-group">
                        <label> Año de publicación: </label>
                        <input value=" " name="anio" type="text" class="form-control" placeholder="Año de publicación">
                    </div>
                    <div class="form-group">
                        <label> valoracion: </label>
                        <input value=" " name="valoracion" type="text" class="form-control" placeholder="Valoracion">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Reseña:</label>
                      <textarea class="form-control" name="resenia" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                    </div>
              </form>



    </div>

    <div class="buttons">
        <div class = "botonera">
          <a href="agregarlibro" class="btn btn-success">Agregar</a>
          <a href="editarlibro/{$libro.id_libro}" class="btn btn-success btn-sm">Editar</a>
		      <a href="borrarlibro/{$libro.id_libro}" class="btn btn-danger btn-sm">Eliminar</a>
        </div>

    </div>


{include file="footer.tpl"}