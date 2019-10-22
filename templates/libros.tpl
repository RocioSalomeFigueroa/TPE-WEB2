{include file="header.tpl"}

{$titulo}

       <table>
	{foreach from=$Libros item=libro}
		<tr>
			{foreach from=$libro item=caracteristica}
				<td>{$caracteristica}</td>
			{/foreach}
</tr>
{/foreach}
</table>

        
{include file="footer.tpl"}