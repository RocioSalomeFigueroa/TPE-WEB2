{include file="header.tpl"}

    <div class="datos-bbdd">
        <h2>{$titulo}</h2>
        <h3>Libros:</h3>


        <div class="card-group">
                    
          {foreach from=$Libros item=libro}
                                                 
                <div class = "dato">
                  <a href="libro/{$libro.id_libro}"><h5 class="card-title">Titulo: {$libro.titulo}</h5></a>
                  <p class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</p>
                  <p class="card-text">Genero: {$libro.genero}</p>
                  <p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
				          <a href="borrarLibro/{$libro.id_libro}" class="btn btn-danger btn-sm">Eliminar</a>
                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">

        <div class = "botonera">
          <a href="agregarLibro" class="btn btn-success">Agregar</a>
        </div>    
      </div>
  </div>

        
{include file="footer.tpl"}