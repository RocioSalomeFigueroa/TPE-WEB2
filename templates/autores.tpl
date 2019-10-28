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

<h4>Agregar Autor</h4>
<form class="formulario" action="agregarAutor" method="post">
    	<div class="input-group">
        	<div class="input-group-prepend">
              <span class="input-group-text">Nombre / Apellido</span>
            </div>
            <input type="text"  name="nombre" aria-label="First name" class="form-control">
            <input type="text" name="apellido" aria-label="Last name" class="form-control">
        </div>
    
    <input type="text" name="fecha" placeholder="Fecha">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Biografia</label>
    <textarea class="form-control" name="biografia" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    
    <input type="submit" value="agregarAutor">
</form> 

        
{include file="footer.tpl"}