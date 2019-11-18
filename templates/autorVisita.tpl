{include file="headerVisitante.tpl"}
  <div class="datos-bbdd">
      <h3>Autor:</h3>

        <h4 class="card-text">Nombre: {$autor.nombre}</h4>
        <h4 class="card-text">Apellido: {$autor.apellido}</h4>
        <p class="card-text">Fecha: {$autor.fecha}</p>
        <p class="card-text">Biografia: {$autor.biografia}</p>

    <h5>Titulos:</h5>
         <ul>
            {foreach from=$libros item=item}
                <li>{$item.titulo}</li>   
            {/foreach}
        <ul>
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