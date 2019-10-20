{include file="header.tpl"}

{$titulo}

        {foreach from=$Libros item=item}
        <p>{$item.titulo}</p>
        {/foreach}
        
{include file="footer.tpl"}