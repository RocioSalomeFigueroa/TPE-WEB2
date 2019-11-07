{include file="header.tpl"}
    <div class="datos-bbdd">
        <h2>Autores</h2>

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
{include file="footer.tpl"}