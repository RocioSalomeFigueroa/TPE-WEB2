{include file="headerVisitante.tpl"}

    <div class="datos-bbdd">
        <h2>Autores</h2>

        <div class="card-group">
                    
          {foreach from=$autores item=autor}                               
                <div class = "dato">
                  <a href="autorVisita/{$autor.id_autor}"><h5 class="card-title">Nombre: {$autor.apellido}, {$autor.nombre}</h5></a>
                  <p class="card-text">Fecha: {$autor.fecha}</p>
                  <p class="card-text">Biografia: {$autor.biografia}</p>
                </div>          
          {/foreach}
        </div>
      </div>
    </div>
    
        <div class="footer">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0 h1">Visitante - WEB 2 TUDAI</span>
            </nav>

        </div>
     </div>
</body>
</html>