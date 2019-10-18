{include file="header.tpl"}

        <ul>
        {foreach from=$libros item=libro}
        <li>{$libro->$titulo}<li>
        {/foreach}
        </ul>
{include file="footer.tpl"}