{include file="header.tpl"}

    <ul>

    {foreach from=$libros item=libro}

        <li>{$libro->titulo}: {$libro->reseña} - <a href='/{$libro->id}'>Finalizar</a> - <a href='/{$libro->id}'>Borrar</a></li>
            
    {/foreach}

    </ul>


{include 'templates/footer.tpl'}