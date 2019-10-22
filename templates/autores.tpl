{include file="header.tpl"}

{$titulo}

       <table>
	{foreach from=$autores item=autor}
		<tr>
			{foreach from=$autor item=caracteristica}
				<td>{$caracteristica}</td>
			{/foreach}
</tr>
{/foreach}
</table>

        
{include file="footer.tpl"}