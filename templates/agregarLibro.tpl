{include file="header.tpl"}

    <div class="datos-bbdd">

        <h3>Agregar Libro</h3>
            <form id="formview" action="addLibro" method="post" enctype="multipart/form-data">
  
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
                      <label> Imagen: </label>
                      <input value=" " name="imagen[]" id="imagenes_mult" type="file" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                    </div>
              </form>
    </div>




{include file="footer.tpl"}