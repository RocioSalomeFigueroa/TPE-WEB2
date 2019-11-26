{include file="header.tpl"}

    <div class="datos-bbdd">
      <div 
        id="container" data-objectId="null" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
        <h2>{$titulo}</h2>
        <h3>Libros:</h3>


        <div class="card-group">
                    
          {foreach from=$Libros item=libro}
                                                 
                <div class = "dato">
                  <a href="libro/{$libro.id_libro}"><h5 class="card-title">Titulo: {$libro.titulo}</h5></a>
                  <p class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</p>
                  <p class="card-text">Genero: {$libro.genero}</p>
                  <p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
				          
                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">
        {if $user.admin eq "1"}
        <div class = "botonera">
          <a href="agregarLibro" class="btn btn-success">Agregar</a>
        </div> 
      {/if}   
      </div>
  </div>

        
{include file="footer.tpl"}