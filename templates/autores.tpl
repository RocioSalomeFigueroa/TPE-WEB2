{include file="header.tpl"}

{$titulo}
<div class="card-group">
	{foreach from=$autores item=autor}
		<div class="card">
				
					<div class="card-body">
						<h5 class="card-title" href="autors/{$autor.id_autor}">Apellido: {$autor.apellido}</h5>
						<p class="card-text">Nombre: {$autor.nombre}</p>
						<p class="card-text">Fecha: {$autor.fecha}</p>
						<p class="card-text">Biografia: {$autor.biografia}</p>
						<small><a href="borrarAutor/{$autor.id_autor}">ELIMINAR</a></li></small>
					</div>
			</div>
	{/foreach}
</div>

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