{include file="header.tpl"}

    <div class="datos-bbdd">
          <div 
        id="container" data-objectId="null" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
        <h2>{$titulo}</h2>
        <h3>Autores:</h3>

        <div class="card-group">
                    
          {foreach from=$autores item=autor}                          
                <div class = "dato">
                 <a href="autor/{$autor.id_autor}"><h5 class="card-title">Nombre: {$autor.apellido}, {$autor.nombre}</h5></a>
                  <p class="card-text">Fecha: {$autor.fecha}</p>
                  <p class="card-text">Biografia: {$autor.biografia}</p>
                </div>          
          {/foreach}
        </div>
      </div>
      <div class="buttons">
       {if $user.admin eq "1"}
        <div class = "botonera">
          <a href="agregarAutor" class="btn btn-success"class="btn">Agregar</a>
        </div>    
      </div>
  </div>
{/if}

        
{include file="footer.tpl"}