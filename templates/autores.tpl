{include file="header.tpl"}

    <div class="datos-bbdd">
        {$titulo}

        <div class="card-group">
                    
          {foreach from=$autores item=autor}
                                                        
                <div class = "dato">
                 <a href="autor/{$autor.id_autor}"><h5 class="card-title">Nombre: {$autor.apellido}, {$autor.nombre}</h5></a>
                  <p class="card-text">Fecha: {$autor.fecha}</p>
                  <p class="card-text">Biografia: {$autor.biografia}</p>
				  <a href="editar/{$autor.id_autor}" class="btn btn-success btn-sm">Editar</a>
				  <a href="elimnar/{$autor.id_autor}" class="btn btn-danger btn-sm">Eliminar</a>
                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">

        <div class = "botonera">
          <a href="agregarAutor" class="btn btn-success">Agregar</a>
        </div>    
      </div>
  </div>

        
{include file="footer.tpl"}