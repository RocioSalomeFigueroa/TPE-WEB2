{include file="header.tpl"}

    <div class="datos-bbdd">
        {$titulo}

        <div class="card-group">
                    
          {foreach from=$Libros item=libro}
                                                        
                <div class = "dato">
                  <h5 class="card-title" href="libros/{$libro.id_libro}">Titulo: {$libro.titulo}</h5>
                  <p class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</p>
                  <p class="card-text">Genero: {$libro.genero}</p>
                  <p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
                  <small><a href="borrar/{$libro.id_libro}">ELIMINAR</a></li></small>
                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">
        <a href="agregar" class="btn btn-success">Agregar</a>
      </div>
  </div>

{* <h3>Agregar</h3>
	<form class="formulario" action="insertar" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
        </div>
        <input type="text" name="titulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" name="autor" for="inputGroupSelect01">Autor</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Año / Genero</span>
            </div>
            <input type="text"  name="anio" aria-label="First name" class="form-control">
            <input type="text" name="genero" aria-label="Last name" class="form-control">
          </div>
    
    <input type="text" name="resenia" placeholder="Reseña">
    <input type="number" name="valoracion" placeholder="Valoracion" max="5" min="0">
    
    <input type="submit" value="Insertar">
</form> *}

        
{include file="footer.tpl"}