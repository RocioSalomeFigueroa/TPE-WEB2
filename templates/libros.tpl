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

                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">

        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Agregar</a>
        </div>
        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Eliminar</a>
        </div>
        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Editar</a>
        </div>    
      </div>
  </div>

        
{include file="footer.tpl"}