{include file="headerVisitante.tpl"}

    <div class="datos-bbdd">
        <h2>Libros</h2>

        <div class="card-group">
                    
          {foreach from=$libros item=libro}        
                <div class = "dato">
                  <a href="libroVisita/{$libro.id_libro}"><h5 class="card-title">Titulo: {$libro.titulo}</h5></a>
                  <p class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</p>
                  <p class="card-text">Genero: {$libro.genero}</p>
                  <p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
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
</html