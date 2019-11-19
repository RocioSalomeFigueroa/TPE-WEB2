{include file="headerVisitante.tpl"}

    <div class="datos-bbdd">
        <div>
            <h4 class="card-title">Titulo: {$libro.titulo}</h4>
            <h5 class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</h5>
            <p class="card-text">Genero: {$libro.genero}</p>
            <p class="card-text">Año: {$libro.anio}</p>
            <p class="card-text">Reseña: {$libro.resenia}</p>
            <img class="card-text" src="{$libro.imagen}"/>
        </div>





    </div>

    <div class="buttons">
        
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